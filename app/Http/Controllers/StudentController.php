<?php
namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Roles;
use App\Models\Roles_Permission;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('revalidate');
        //$this->middleware('auth');
    }

    public function login()
    {
        if(session()->has('LoggedUser')){
            return redirect('profile');
        }
        else
        {
            return view('login');
        }
    }
    public function adminlogin()
    {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
        }
        return view('adminlogin');
    }
    public function logout()
    {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            session()->flush();
            return redirect('login');
        }
    }
    public function admindashboard()
    {
        return view('admindashboard');
    }
    public function checknew(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        if($request->email==='test@gmail.com'){
            if($request->password==='12345678'){
                return redirect('admindashboard');
            }
            else{
                return back()->with('fail','Invalid Password');
            }

        }
        else{
            return back()->with('fail','No account found for this email.');
        }
    }
    public function register()
    {
        if(session()->has('LoggedUser')){
            $data=Student::where('id','=',session('LoggedUser'))->first();
            $role=Roles::where('name','=',$data->role)->first();
            $user=Roles_Permission::where('role_id','=',$role->id)->get();
            $target=Permission::where('name','=','user_create')->first();
            $flag=0;
            foreach($user as $permission)
            {
                if($permission->permission_id==$target->id)
                {
                    $flag=1;
                    break;
                }
            }
            if($flag==0)
            {
                return back()->with('fail','You Do Not Have Permission To Create A New User');
            }
            else
            {
                $permission1=array();
                foreach($user as $permissions)
                {
                     $permission1[]=Permission::where('id','=',$permissions->permission_id)->first();
                }
                $data=Roles::all();
                return view('register',[
                    'roles'=>$data,
                    'permission'=>$permission1,
                ]);
            }
        }
        else{
            $data=Roles::all();
            return view('register',['roles'=>$data]);
        }
    }
    public function check(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $user=Student::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('LoggedUser',$user->id);
                return redirect('profile');
            }
            else{
                return back()->with('fail','Invalid Password');
            }

        }
        else{
            return back()->with('fail','No account found for this email.');
        }
    }
    public function profile()
    {
        if(session()->has('LoggedUser')){
            $user=Student::where('id','=',session('LoggedUser'))->first();
            $role=Roles::where('name','=',$user->role)->first();
            $permission_list=Roles_Permission::where('role_id','=',$role->id)->get();
            $permission=array();
            foreach($permission_list as $permissions)
            {
                $permission[]=Permission::where('id','=',$permissions->permission_id)->first();
            }
            return view('profile',
            [
                "LoggedUserInfo"=>$user,
                "permission"=>$permission,
            ]);
        }
        else
        {
            return redirect('login');
        }
    }
    public function delete($id)
    {
        if(session()->has('LoggedUser')){
            $data1=Student::find($id);
            $data=Student::where('id','=',session('LoggedUser'))->first();
            if($data->id==$data1->id)
            {
                return back()->with('fail','You do not have the permission to delete your data');
            }
            else
            {
                $role=Roles::where('name','=',$data->role)->first();
                $user=Roles_Permission::where('role_id','=',$role->id)->get();
                $target=Permission::where('name','=','user_delete')->first();
                $flag=0;
                foreach($user as $permission)
                {
                    if($permission->permission_id==$target->id)
                    {
                        $data1->delete();
                        print($permission->permission_id);
                        $flag=1;
                        break;
                    }
                }
                if($flag==0)
                {
                    return redirect('list')->with('fail','You Do Not Have Permission To Delete This user');
                }
                else
                {
                    return redirect('list')->with('success','User Deleted Successfully');
                }
            }
        }
        else{
            $data=Student::find($id);
            $data->delete();
            return redirect('list')->with('success','User Deleted Successfully');
        }
    }
    public function deleterole($id)
    {
        if(session()->has('LoggedUser')){
            $data1=Roles::find($id);
            $data=Student::where('id','=',session('LoggedUser'))->first();
            $role=Roles::where('name','=',$data->role)->first();
            $user=Roles_Permission::where('role_id','=',$role->id)->get();
            $target=Permission::where('name','=','role_delete')->first();
            $flag=0;
            foreach($user as $permission)
            {
                if($permission->permission_id==$target->id)
                {
                    $flag=1;
                    break;
                }
            }
            if($flag==0)
            {
                return back()->with('fail','You Do Not Have The Permission To Delete Roles');
            }
            else
            {
                $user=Student::where('role','=',$data->name)->first();
                if($user)
                {
                    return back()->with('fail','Some Users Are Linked To This Role Please Update Their Role Before Deleting This Role');
                }
                else
                {
                    $data1->delete();
                    return redirect('addrole')->with('success','Role Deleted Successfully');
                }
            }
        }
        else{
            $data=Roles::find($id);
            $user=Student::where('role','=',$data->name)->first();
            if($user)
            {
                return back()->with('fail','Some Users Are Linked To This Role Please Update Their Role Before Deleting This Role');
            }
            else
            {
                $data->delete();
                 return redirect('addrole')->with('success','Role Deleted Successfully');
            }
        }
    }
    public function deletepermission($id)
    {
        if(session()->has('LoggedUser')){
            $data1=Permission::find($id);
            $data=Student::where('id','=',session('LoggedUser'))->first();
            $role=Roles::where('name','=',$data->role)->first();
            $user=Roles_Permission::where('role_id','=',$role->id)->get();
            $target=Permission::where('name','=','permission_delete')->first();
            $flag=0;
            foreach($user as $permission)
            {
                if($permission->permission_id==$target->id)
                {
                    $flag=1;
                    break;
                }
            }
            if($flag==0)
            {
                return back()->with('fail','You Do Not Have The Permission To Delete Permissions');
            }
            else
            {
                $user=Roles_Permission::where('permission_id','=',$id)->first();
                if($user)
                {
                    return back()->with('fail','Some Roles Are Having This Permission Please Modify Their Permission List Before Deleting This Permission');
                }
                else
                {
                    $data1->delete();
                    return redirect('addpermission')->with('success','Permission Deleted Successfully');
                }
            }
        }
        else{
            $data=Permission::find($id);
            $user=Roles_Permission::where('permission_id','=',$id)->first();
            if($user)
            {
                return back()->with('fail','Some Roles Are Having This Permission Please Modify Their Permission List Before Deleting This Permission');
            }
            else
            {
                $data->delete();
                return redirect('addpermission')->with('success','Permission Deleted Successfully');
            }
        }
    }
    public function list()
    {
        if(session()->has('LoggedUser')){
            $data=Student::where('id','=',session('LoggedUser'))->first();
            $role=Roles::where('name','=',$data->role)->first();
            $user=Roles_Permission::where('role_id','=',$role->id)->get();
            $target=Permission::where('name','=','user_read')->first();
            $flag=0;
            foreach($user as $permission)
            {
                if($permission->permission_id==$target->id)
                {
                    $flag=1;
                    break;
                }
            }
            if($flag==0)
            {
                return redirect('profile')->with('fail','You Do Not Have Permission To View the details of other users');
            }
            else
            {
                $data1=Student::all();
                $permission1=array();
                foreach($user as $permissions)
                {
                    $permission1[]=Permission::where('id','=',$permissions->permission_id)->first();
                }
                return view('list',
                [
                    "members"=>$data1,
                    "permission"=>$permission1,
                    "data"=>$data->id,
                ]);
            }
        }
        else{
            $data=Student::all();
            return view('list',['members'=>$data]);
        }
        //$data=Student::all();
        //return view('list',['members'=>$data]);
    }
    public function addpermission()
    {
        if(session()->has('LoggedUser')){
            $data=Student::where('id','=',session('LoggedUser'))->first();
            $role=Roles::where('name','=',$data->role)->first();
            $user=Roles_Permission::where('role_id','=',$role->id)->get();
            $target=Permission::where('name','=','permission_read')->first();
            $flag=0;
            foreach($user as $permission)
            {
                if($permission->permission_id==$target->id)
                {
                    $flag=1;
                    break;
                }
            }
            if($flag==0)
            {
                return back()->with('fail','Some Roles Are Having This Permission Please Modify Their Permission List Before Deleting This Permission');
            }
            else
            {
                $permission1=array();
                foreach($user as $permissions)
                {
                    $permission1[]=Permission::where('id','=',$permissions->permission_id)->first();
                }
                $data=Permission::all();
                return view('addpermission',[
                'permissions'=>$data,
                'permission'=>$permission1,
                ]);
            }
        }
        else{
                $data=Permission::all();
                return view('addpermission',['permissions'=>$data]);
        }
    }
    public function addrole()
    {
        if(session()->has('LoggedUser')){
            $data=Student::where('id','=',session('LoggedUser'))->first();
            $role=Roles::where('name','=',$data->role)->first();
            $user=Roles_Permission::where('role_id','=',$role->id)->get();
            $target=Permission::where('name','=','permission_read')->first();
            $flag=0;
            foreach($user as $permission)
            {
                if($permission->permission_id==$target->id)
                {
                    $flag=1;
                    break;
                }
            }
            if($flag==0)
            {
                return back()->with('fail','You do not have the permission to view roles list');
            }
            else
            {
                $permission1=array();
                foreach($user as $permissions)
                {
                    $permission1[]=Permission::where('id','=',$permissions->permission_id)->first();
                }
                $data=Roles::all();
                return view('addrole',[
                'roles'=>$data,
                'permission'=>$permission1,
                ]);
            }
        }
        else{
            $data=Roles::all();
            return view('addrole',['roles'=>$data]);
        }
    }
    public function permission()
    {
        if(session()->has('LoggedUser')){
            $data4=Student::where('id','=',session('LoggedUser'))->first();
            $role=Roles::where('name','=',$data4->role)->first();
            $user=Roles_Permission::where('role_id','=',$role->id)->get();
            $target=Permission::where('name','=','role_permission_update')->first();
            $flag=0;
            foreach($user as $permission)
            {
                if($permission->permission_id==$target->id)
                {
                    $flag=1;
                    break;
                }
            }
            if($flag==0)
            {
                return back()->with('fail','You do not have the permission to see the permission list');
            }
            else
            {
                $permission1=array();
                foreach($user as $permissions)
                {
                    $permission1[]=Permission::where('id','=',$permissions->permission_id)->first();
                }
                $data=Roles::all();
                $data1=Permission::all();
                $data2=Roles_Permission::all();
                return view('permission',
                [
                     'roles'=>$data,
                     'roles_permissions'=>$data2,
                     'permissions'=>$data1,
                     'permission'=>$permission1,
                ]);
            }
        }
        else
        {
            $data=Roles::all();
            $data1=Permission::all();
            $data2=Roles_Permission::all();
            return view('permission',
            [
                'roles'=>$data,
                'roles_permissions'=>$data2,
                'permissions'=>$data1,
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store_role_permission(Request $request)
    {
        $request->validate([
            'checkbox'=>'required',
        ]);
        $user1=new Roles_Permission;
        $user1::truncate();
        foreach($request->checkbox as $check)
        {
            $user=new Roles_Permission;
            $str_arr = explode (",", $check);
            $user->role_id=intval($str_arr[0]);
            $user->permission_id=intval($str_arr[1]);
            $query=$user->save();
        }
        return redirect()->route('permission')->with('success','Permissions changed successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'password' => 'required|min:8',
            'role' => 'required',
            'desc' => 'required',
        ]);
        $user=new Student;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password= Hash::make($request->password);
        $user->role=$request->role;
        $user->desc=$request->desc;
        $query=$user->save();
        //Student::create($request->all());
        return redirect()->route('register')->with('success','User created successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storerole(Request $request)
    {
        if(session()->has('LoggedUser')){
            $data=Student::where('id','=',session('LoggedUser'))->first();
            $role=Roles::where('name','=',$data->role)->first();
            $user=Roles_Permission::where('role_id','=',$role->id)->get();
            $target=Permission::where('name','=','role_create')->first();
            $flag=0;
            foreach($user as $permission)
            {
                if($permission->permission_id==$target->id)
                {
                    $flag=1;
                    break;
                }
            }
            if($flag==0)
            {
                return back()->with('fail','You do not have the permission to add roles to the list');
            }
            else
            {
                $rules=[
                    'name' => 'required|unique:roles',
                ];
                $validator=Validator::make($request->all(),$rules);
                if($validator->fails())
                {
                    return redirect()->back()->withErrors($validator)->withInput();
                }
                else
                {
                    $user=new Roles;
                    $user->name=$request->name;
                    $query=$user->save();
                    return redirect()->route('addrole')->with('success','Role created successfully.');
                }
            }
        }
        else{
            $rules=[
                'name' => 'required|unique:roles',
            ];
            $validator=Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            else
            {
                $user=new Roles;
                $user->name=$request->name;
                $query=$user->save();
                return redirect()->route('addrole')->with('success','Role created successfully.');
            }
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storepermission(Request $request)
    {
        if(session()->has('LoggedUser')){
            $data=Student::where('id','=',session('LoggedUser'))->first();
            $role=Roles::where('name','=',$data->role)->first();
            $user=Roles_Permission::where('role_id','=',$role->id)->get();
            $target=Permission::where('name','=','permission_create')->first();
            $flag=0;
            foreach($user as $permission)
            {
                if($permission->permission_id==$target->id)
                {
                    $flag=1;
                    break;
                }
            }
            if($flag==0)
            {
                return back()->with('fail','You do not have the permission to add permissions to the list');
            }
            else
            {
                $rules=[
                    'name' => 'required|unique:permissions',
                ];
                $validator=Validator::make($request->all(),$rules);
                if($validator->fails())
                {
                    return redirect()->back()->withErrors($validator)->withInput();
                }
                $user=new Permission;
                $user->name=$request->name;
                $query=$user->save();
                return redirect()->route('addpermission')->with('success','Permission created successfully.');
            }
        }
        else{
            $rules=[
                'name' => 'required|unique:permissions',
            ];
            $validator=Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $user=new Permission;
            $user->name=$request->name;
            $query=$user->save();
            //Student::create($request->all());
            return redirect()->route('addpermission')->with('success','Permission created successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function showdata($id)
    {
        if(session()->has('LoggedUser')){
            $data2=Student::where('id','=',session('LoggedUser'))->first();
            $role=Roles::where('name','=',$data2->role)->first();
            $user=Roles_Permission::where('role_id','=',$role->id)->get();
            $target=Permission::where('name','=','user_update')->first();
            $flag=0;
            foreach($user as $permission)
            {
                if($permission->permission_id==$target->id)
                {
                    $flag=1;
                    break;
                }
            }
            if($flag==0)
            {
                return back()->with('fail','You do not have the permission to Update User Details');
            }
            else
            {
                $permission1=array();
                foreach($user as $permissions)
                {
                    $permission1[]=Permission::where('id','=',$permissions->permission_id)->first();
                }
                $data=Student::find($id);
                $data1=Roles::all();
                return view('edit',
                [
                    "data"=>$data,
                    "roles"=>$data1,
                    "permission"=>$permission1,
                ]);
            }
        }
        else{
            $data=Student::find($id);
            $data1=Roles::all();
            return view('edit',['data'=>$data],['roles'=>$data1]);
        }
    }
    public function showroledata($id)
    {
        if(session()->has('LoggedUser')){
            $data2=Student::where('id','=',session('LoggedUser'))->first();
            $role=Roles::where('name','=',$data2->role)->first();
            $user=Roles_Permission::where('role_id','=',$role->id)->get();
            $target=Permission::where('name','=','role_update')->first();
            $flag=0;
            foreach($user as $permission)
            {
                if($permission->permission_id==$target->id)
                {
                    $flag=1;
                    break;
                }
            }
            if($flag==0)
            {
                return back()->with('fail','You do not have the permission to add roles to the list');
            }
            else
            {
                $permission1=array();
                foreach($user as $permissions)
                {
                    $permission1[]=Permission::where('id','=',$permissions->permission_id)->first();
                }
                $data=Roles::find($id);
                return view('editrole',
                [
                    "data"=>$data,
                    "permission"=>$permission1,
                ]);
            }
        }
        else
        {
            $data=Roles::find($id);
            return view('editrole',['data'=>$data]);
        }
    }
    public function showpermissiondata($id)
    {
        if(session()->has('LoggedUser')){
            $data2=Student::where('id','=',session('LoggedUser'))->first();
            $role=Roles::where('name','=',$data2->role)->first();
            $user=Roles_Permission::where('role_id','=',$role->id)->get();
            $target=Permission::where('name','=','permission_update')->first();
            $flag=0;
            foreach($user as $permission)
            {
                if($permission->permission_id==$target->id)
                {
                    $flag=1;
                    break;
                }
            }
            if($flag==0)
            {
                return back()->with('fail','You do not have the permission to add roles to the list');
            }
            else
            {
                $permission1=array();
                foreach($user as $permissions)
                {
                    $permission1[]=Permission::where('id','=',$permissions->permission_id)->first();
                }
                $data=Permission::find($id);
                return view('editpermission',
                [
                    "data"=>$data,
                    "permission"=>$permission1,
                ]);
            }
        }
        else
        {
            $data=Permission::find($id);
            return view('editpermission',['data'=>$data]);
        }
    }
    public function update(Request $req)
    {
        $data=Student::find($req->id);
        if(session()->has('LoggedUser')){
            $data1=Student::where('id','=',session('LoggedUser'))->first();
            $role=Roles::where('name','=',$data1->role)->first();
            $user=Roles_Permission::where('role_id','=',$role->id)->get();
            $target=Permission::where('name','=','user_update')->first();
            $flag=0;
            foreach($user as $permission)
            {
                if($permission->permission_id==$target->id)
                {
                    $flag=1;
                    break;
                }
            }
            if($flag==1)
            {
                $id=$req->id;
                $rules=[
                    'email' => 'required|unique:students,email' . ($id ? ",$id" : ''),
                ];
                $validator=Validator::make($req->all(),$rules);
                if($validator->fails())
                {
                    return redirect()->back()->withErrors($validator)->withInput();
                }
                else
                {
                    $data->name=$req->name;
                    $data->email=$req->email;
                    $data->role=$req->role;
                    $data->desc=$req->desc;
                    $data->save();
                    return back()->with('success','User Updated Successfully');
                }
            }
            else
            {
                return back()->with('fail','You do not have the permission to Update User Details');
            }

        }
        else
        {
            $data->name=$req->name;
            $data->email=$req->email;
            $data->role=$req->role;
            $data->desc=$req->desc;
            $data->save();
            return back()->with('success','User Updated Successfully');
        }
        /*if($user=Student::where('id','=',session('LoggedUser'))->first())
        {
            $data = [
                "LoggedUserInfo"=>$user
                ];
            return view('profile', $data);
        }
        else
        {
            $data=Student::all();
            return view('list',['members'=>$data]);
        }*/
    }
    public function updaterole(Request $req)
    {
        $data=Roles::find($req->id);
        if(session()->has('LoggedUser')){
            $data1=Student::where('id','=',session('LoggedUser'))->first();
            $role=Roles::where('name','=',$data1->role)->first();
            $user=Roles_Permission::where('role_id','=',$role->id)->get();
            $target=Permission::where('name','=','role_update')->first();
            $flag=0;
            foreach($user as $permission)
            {
                if($permission->permission_id==$target->id)
                {
                    $flag=1;
                    break;
                }
            }
            if($flag==1)
            {
                $id=$req->id;
                $rules=[
                    'name' => 'required|unique:roles,name' . ($id ? ",$id" : ''),
                ];
                $validator=Validator::make($req->all(),$rules);
                if($validator->fails())
                {
                    return redirect()->back()->withErrors($validator);
                }
                else
                {
                    $data->name=$req->name;
                    $data->save();
                    return back()->with('success','Role Updated Successfully');
                }
            }
            else
            {
                return back()->with('fail','You do not have the permission to Update Role Details');
            }

        }
        else
        {
            $data->name=$req->name;
            $data->save();
            return back()->with('success','Role Updated Successfully');
        }
    }
    public function updatepermission(Request $req)
    {
        $data=Permission::find($req->id);
        if(session()->has('LoggedUser')){
            $data1=Student::where('id','=',session('LoggedUser'))->first();
            $role=Roles::where('name','=',$data1->role)->first();
            $user=Roles_Permission::where('role_id','=',$role->id)->get();
            $target=Permission::where('name','=','permission_update')->first();
            $flag=0;
            foreach($user as $permission)
            {
                if($permission->permission_id==$target->id)
                {
                    $flag=1;
                    break;
                }
            }
            if($flag==1)
            {
                $id=$req->id;
                $rules=[
                    'name' => 'required|unique:permissions,name' . ($id ? ",$id" : ''),
                ];
                $validator=Validator::make($req->all(),$rules);
                if($validator->fails())
                {
                    return redirect()->back()->withErrors($validator)->withInput();
                }
                else
                {
                    $data->name=$req->name;
                    $data->save();
                    return back()->with('success','Permission Updated Successfully');
                }
            }
            else
            {
                return back()->with('fail','You Cannot Update Permission Details');
            }

        }
        else
        {
            $data->name=$req->name;
            $data->save();
            return back()->with('success','Permission Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {

    }
}
