<?php
namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Roles;
use App\Models\Roles_Permission;
use App\Models\Permission;
use App\Models\user_details;
use App\Models\user_school;
use App\Models\users;
use App\Models\schools;
use App\Models\user_achievements;
use App\Models\categories;
use App\Models\answers;
use App\Models\user_life_strengths;
use App\Models\life_strength;
use App\Models\user_life_event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
    }
    public function login()
    {
        if(session()->has('LoggedUser')){
            return redirect('admin/profile');
        }
        else
        {
            return view('admin/login');
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
            return redirect('admin/login');
        }
    }
    public function studentlogout()
    {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            session()->flush();
            return redirect('student/login');
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
                return view('admin/register',[
                    'roles'=>$data,
                    'permission'=>$permission1,
                ]);
            }
        }
        else{
            $data=Roles::all();
            return view('admin/register',['roles'=>$data]);
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
                return redirect('admin/profile');
            }
            else{
                return back()->with('fail','Invalid Password');
            }

        }
        else{
            return back()->with('fail','No account found for this email.');
        }
    }
    public function studentregister()
    {
        return view('student/register');
    }
    public function studentlogin()
    {
        return view('student/login');
    }
    public function passwordset()
    {
        if(session()->has('LoggedUser')){
            $user=users::where('id','=',session('LoggedUser'))->first();
            return view('student/passwordset',
            [
                "user"=>$user
            ]);
        }
        else
        {
            return redirect('student/register');
        }
    }
    public function studentcheck(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $user=users::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('LoggedUser',$user->id);
                return redirect('student/profile');
            }
            else{
                return back()->with('fail','Invalid Password');
            }

        }
        else{
            return back()->with('fail','No account found for this email.');
        }
    }
    public function registercheck(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'studid'=>'required',
        ]);
        $user=users::where('email','=',$request->email)->first();
        if($user){
            if($request->studid===$user->school_id){
                $request->session()->put('LoggedUser',$user->id);
                return view('student/passwordset',
                [
                   "user"=>$user
                ]);
            }
            else{
                return back()->with('fail','Invalid Student ID');
            }

        }
        else{
            return back()->with('fail','No account found for this email.');
        }
    }
    public function createpassword(Request $request)
    {
        $data=users::find($request->id);
        $request->validate([
            'password'=>'required|min:6',
            'repeatpassword'=>'required|min:6',
        ]);
        if(session()->has('LoggedUser')){
            if($request->password===$request->repeatpassword)
            {
               $data->password=Hash::make($request->password);
               $data->save();
               return redirect('student/login')->with('success','Password Set Succesfully');
            }
            else
            {
                return back()->with('fail','Error in Repeating Password');
            }
        }
        else
        {
            return back()->with('fail','Error in Repeating Password');
        }
    }
    public function studentprofile()
    {
        if(session()->has('LoggedUser')){
            $data1=users::where('id','=',session('LoggedUser'))->first();
            $data2=user_achievements::where('user_id','=',$data1->id)->get();
            $data3=answers::where('user_id','=',$data1->id)->get();
            $data4=user_life_strengths::where('user_id','=',$data1->id)->get();
            $data5=life_strength::all();
            $data6=categories::all();
            $data7=user_life_event::where('user_id','=',$data1->id)->get();
            return view('student/profile',
            [
                "LoggedUserInfo"=>$data1,
                "Achievement"=>$data2,
                "Answers"=>$data3,
                "Strengths"=>$data4,
                "Strengthslist"=>$data5,
                "Categories"=>$data6,
                "Lifeline"=>$data7
            ]);
        }
        else
        {
            return redirect('student/login');
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
            return view('admin/profile',
            [
                "LoggedUserInfo"=>$user,
                "permission"=>$permission,
            ]);
        }
        else
        {
            return redirect('admin/login');
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
                    return redirect('admin/list')->with('fail','You Do Not Have Permission To Delete This user');
                }
                else
                {
                    return redirect('admin/list')->with('success','User Deleted Successfully');
                }
            }
        }
        else{
            $data=Student::find($id);
            $data->delete();
            return redirect('admin/list')->with('success','User Deleted Successfully');
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
                    return redirect('admin/addrole')->with('success','Role Deleted Successfully');
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
                 return redirect('admin/addrole')->with('success','Role Deleted Successfully');
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
                    return redirect('admin/addpermission')->with('success','Permission Deleted Successfully');
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
                return redirect('admin/addpermission')->with('success','Permission Deleted Successfully');
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
                return redirect('admin/profile')->with('fail','You Do Not Have Permission To View the details of other users');
            }
            else
            {
                $data1=Student::all();
                $permission1=array();
                foreach($user as $permissions)
                {
                    $permission1[]=Permission::where('id','=',$permissions->permission_id)->first();
                }
                return view('admin/list',
                [
                    "members"=>$data1,
                    "permission"=>$permission1,
                    "data"=>$data->id,
                ]);
            }
        }
        else{
            $data=Student::all();
            return view('admin/list',['members'=>$data]);
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
                return view('admin/addpermission',[
                'permissions'=>$data,
                'permission'=>$permission1,
                ]);
            }
        }
        else{
                $data=Permission::all();
                return view('admin/addpermission',['permissions'=>$data]);
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
                return view('admin/addrole',[
                'roles'=>$data,
                'permission'=>$permission1,
                ]);
            }
        }
        else{
            $data=Roles::all();
            return view('admin/addrole',['roles'=>$data]);
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
                return view('admin/permission',
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
            return view('admin/permission',
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
                return view('admin/edit',
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
            return view('admin/edit',['data'=>$data],['roles'=>$data1]);
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
                return view('admin/editrole',
                [
                    "data"=>$data,
                    "permission"=>$permission1,
                ]);
            }
        }
        else
        {
            $data=Roles::find($id);
            return view('admin/editrole',['data'=>$data]);
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
                return view('admin/editpermission',
                [
                    "data"=>$data,
                    "permission"=>$permission1,
                ]);
            }
        }
        else
        {
            $data=Permission::find($id);
            return view('admin/editpermission',['data'=>$data]);
        }
    }
    public function showstudentdata()
    {
        if(session()->has('LoggedUser')){
                $data=users::where('id','=',session('LoggedUser'))->first();
                $data2=user_details::where('user_id','=',$data->id)->first();
                return view('student/edit',
                [
                    "data"=>$data,
                    "data2"=>$data2
                ]);
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
    public function updatestudent(Request $req)
    {
        if(session()->has('LoggedUser')){
            $data=users::where('id','=',session('LoggedUser'))->first();
            $data2=user_details::where('user_id','=',$data->id)->first();
            $data->full_name=$req->full_name;
            $data2->gender=$req->gender;
            $data2->dob=$req->dob;
            $data->save();
            $data2->save();
            return back()->with('success','User Updated Successfully');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function addstudent()
    {
        if(session()->has('LoggedUser')){
            $data2=Student::where('id','=',session('LoggedUser'))->first();
            $role=Roles::where('name','=',$data2->role)->first();
            $user=Roles_Permission::where('role_id','=',$role->id)->get();
            $target=Permission::where('name','=','add_student')->first();
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
                return back()->with('fail','You do not have the permission to add students to the list');
            }
            else
            {
                $permission1=array();
                foreach($user as $permissions)
                {
                    $permission1[]=Permission::where('id','=',$permissions->permission_id)->first();
                }
                return view('admin/addstudent',
                [
                    "permission"=>$permission1,
                ]);
            }
        }
        else
        {
            $data=Permission::find($id);
            return view('admin/addstudent');
        }
    }
    public function generate() {
        $length = 64;
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function uploadfile(Request $request)
    {

        if ($request->input('submit') != null ){

          $file = $request->file('file');

          // File Details
          $filename = $file->getClientOriginalName();
          $extension = $file->getClientOriginalExtension();
          $tempPath = $file->getRealPath();
          $fileSize = $file->getSize();
          $mimeType = $file->getMimeType();

          // Valid File Extensions
          $valid_extension = array("csv");

          // 2MB in Bytes
          $maxFileSize = 2097152;

          // Check file extension
          if(in_array(strtolower($extension),$valid_extension)){
              // File upload location
              $location = 'uploads';

              // Upload file
              $file->move($location,$filename);

              // Import CSV to Database
              $filepath = public_path($location."/".$filename);

              // Reading file
              $file = fopen($filepath,"r");

              $importData_arr = array();
              $i = 0;

              while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                 $num = count($filedata );

                 // Skip first row (Remove below comment if you want to skip the first row)
                 if($i == 0){
                    $i++;
                    continue;
                 }
                 for ($c=0; $c < $num; $c++) {
                    $importData_arr[$i][] = $filedata [$c];
                 }
                 $i++;
              }
              fclose($file);
              $data3=new schools;
              $data3->name=$request->school;
              $data3->save();
              // Insert to MySQL database
              foreach($importData_arr as $importData){

                $insertData = array(
                   "dob"=>$importData[3],
                   "gender"=>$importData[4],
                   "language_spokens"=>$importData[6],
                   "comunication_address"=>$importData[5],
                   "email"=>$importData[10],
                   "school_id"=>$importData[2],
                   "full_name"=>$importData[1],
                   "standard"=>$importData[9],
                   "stream"=>$importData[7],
                   "is_school"=>$data3->id
                );
                $data=new users;
                $data->full_name=$insertData['full_name'];
                $data->email=$insertData['email'];
                $data->school_id=$insertData['school_id'];
                $random=$this->generate();
                $data->secure_key=$random;
                $data->is_school=$insertData['is_school'];
                $query=$data->save();
                $data1=new user_details;
                $data1->user_id=$data->id;
                $data1->dob=$insertData['dob'];
                $data1->gender=$insertData['gender'];
                $data1->language_spokens=$insertData['language_spokens'];
                $data1->comunication_address=$insertData['comunication_address'];
                $query=$data1->save();
                DB::table('user_school')->insert([
                    'school_name' =>$data3->name ,
                    'stream' => $insertData['stream'],
                    'standard'=>$insertData['standard'],
                    'user_id'=> $data->id,
                    'school_id'=>$data3->id
                ]);
              }
              return back()->with('success','data added successfully');
          }else{
            return back()->with('fail','unable to add data');
          }

        }
        return back()->with('fail','unable to add data');
    }
    public function addachievement(Request $request)
    {
        if(session()->has('LoggedUser')){
            $user1=users::where('id','=',session('LoggedUser'))->first();
            $validator = Validator::make($request->all(),[
                'professional_title' => 'required',
                'professional_category' => 'required',
                'professional_detail' => 'required',
                'standard' => 'required',
                'professional_strength'=>'required',
                'professional_tag'=> 'required'
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors();
                $error_msg = "";
                foreach($errors->all() as $error){
                    if($error_msg == ""){
                    $error_msg = $error;
                    }
                }
                return response()->json(['status' => false,'error' => $error_msg]);
            }
            $user=new user_achievements;
            $user->title=$request->professional_title;
            $user->user_id=$user1->id;
            $user->type=$request->professional_tag;
            $user->details=$request->professional_detail;
            $user->standard=$request->standard;
            $user->strength=$request->professional_strength;
            $user->media_type=$request->passion_media_type;
            if($user->media_type=='link')
            {
                $user->media=$request->media_link;
            }
            $path='';
            if ($request->hasFile('files')) {
                $extension = $request->file('files')->extension();
                $imageSize = $request->file('files')->getSize();
                if($extension=='jpg'||$extension=='jpeg'||$extension=='png'||$extension=='mp3'||$extension=='mp4'||$extension=='wav'||$extension=='mov'||$extension=='avi')
                {
                    if($imageSize<=5000000)
                    {
                        $file = $request->file('files');
                        $imageName = $file->getClientOriginalName();
                        $url='public/img';
                        $path = $file->storeAs($url,$imageName);
                        $user->media= $imageName;
                        $user->photo_type=$extension;
                    }
                }
            }
            $user->category_id=$request->professional_category;
            $query=$user->save();
            if($request->add_lifeline==1)
            {
                $user2=new user_life_event;
                $user2->user_id=$user1->id;
                $user2->life_event=$request->professional_title;
                $user2->standard=$request->standard;
                $user2->achievement_id=$user->id;
                $query1=$user2->save();
            }
            $userlifeachievement=user_achievements::where('user_id','=',$user1->id)->get();
            $userlifestrength=life_strength::all();
            $data6=categories::all();
            $htmltext= (string)View('student/LifeAchievementhtml',
            [
                'Achievement'=>$userlifeachievement,
                'Strengthslist'=>$userlifestrength,
                'Categories'=>$data6
            ]);
            return response()->json(
                [
                    'success' => true,
                    'htmltext' => $htmltext
                ]
            );
            if($query)
            {
                return redirect('student/profile');
            }
       }
    }
    public function GetLifeAchievementhtml(Request $request)
    {
        if(session()->has('LoggedUser')){
            $user1=users::where('id','=',session('LoggedUser'))->first();
            $userlifeevent=user_achievements::where('id','=',$request->id)->first();
            if($userlifeevent->user_id==$user1->id)
            {
                $htmltext= (string)View('student/LifeAchievementEdit',['item'=>$userlifeevent]);
                return response()->json(
                    [
                        'success'=> true,
                        'htmltext'=>$htmltext
                    ]
                );
            }
            else
            {
                return response()->json(
                    [
                        'status'=> false,
                        'error'=>'access denied'
                    ]
                );
            }
        }
    }
    public function updatelifeachievement(Request $request)
    {
        if(session()->has('LoggedUser')){
            $user1=users::where('id','=',session('LoggedUser'))->first();
            $validator = Validator::make($request->all(),[
                'professional_title' => 'required',
                'professional_category' => 'required',
                'professional_detail' => 'required',
                'standard' => 'required',
                'professional_strength'=>'required',
                'professional_tag'=> 'required'
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors();
                $error_msg = "";
                foreach($errors->all() as $error){
                    if($error_msg == ""){
                    $error_msg = $error;
                    }
                }
                return response()->json(['status' => false,'error' => $error_msg]);
            }
            $data=user_achievements::where('id','=',$request->id)->first();
            $data->title=$request->professional_title;
            $data->user_id=$user1->id;
            $data->type=$request->professional_tag;
            $data->details=$request->professional_detail;
            $data->standard=$request->standard;
            $data->strength=$request->professional_strength;
            $data->media_type=$request->passion_media_type;
            if($data->media_type=='link')
            {
                $data->media=$request->media_link;
            }
            $path='';
            if ($request->hasFile('files')) {
                $extension = $request->file('files')->extension();
                $imageSize = $request->file('files')->getSize();
                if($extension=='jpg'||$extension=='jpeg'||$extension=='png'||$extension=='mp3'||$extension=='mp4'||$extension=='wav'||$extension=='mov'||$extension=='avi')
                {
                    if($imageSize<=5000000)
                    {
                        $file = $request->file('files');
                        $imageName = $file->getClientOriginalName();
                        $url='public/img';
                        $path = $file->storeAs($url,$imageName);
                        $data->media= $imageName;
                        $data->photo_type=$extension;
                    }
                }
            }
            $data->category_id=$request->professional_category;
            $query=$data->save();
            if($request->add_lifeline==1)
            {
                $user2=user_life_event::where('achievement_id','=',$request->id)->first();
                $user2->user_id=$user1->id;
                $user2->life_event=$request->professional_title;
                $user2->standard=$request->standard;
                $user2->achievement_id=$request->id;
                $query1=$user2->save();
            }
            $userlifeachievement=user_achievements::where('user_id','=',$user1->id)->get();
            $userlifestrength=life_strength::all();
            $data6=categories::all();
            $htmltext= (string)View('student/LifeAchievementhtml',
            [
                'Achievement'=>$userlifeachievement,
                'Strengthslist'=>$userlifestrength,
                'Categories'=>$data6
            ]);
            return response()->json(
                [
                    'success' => true,
                    'htmltext' => $htmltext
                ]
            );
        }
    }
    public function addpassion(Request $request)
    {
        if(session()->has('LoggedUser')){
            $user1=users::where('id','=',session('LoggedUser'))->first();
            $validator = Validator::make($request->all(),[
                'passion_title' => 'required',
                'passion_description' => 'required',
                'passion_category' => 'required',
                'passion_strength'=>'required'
            ]);
            if ($validator->fails()){
                $errors = $validator->errors();
                $error_msg = "";
                foreach($errors->all() as $error){
                    if($error_msg == ""){
                    $error_msg = $error;
                    }
                }
                return response()->json(['status' => false,'error' => $error_msg]);
            }
            $user=new user_achievements;
            $user->title=$request->passion_title;
            $user->user_id=$user1->id;
            $user->type=1;
            $user->category_id= $request->passion_category;
            $user->details=$request->passion_description;
            $user->strength=$request->passion_strength;
            $user->media_type=$request->passion_media_type;
            if($user->media_type=='link')
            {
                $user->media=$request->media_link;
            }
            $path='';
            if ($request->hasFile('files')) {
                $extension = $request->file('files')->extension();
                $imageSize = $request->file('files')->getSize();
                if($extension=='jpg'||$extension=='jpeg'||$extension=='png'||$extension=='mp3'||$extension=='mp4'||$extension=='wav'||$extension=='mov'||$extension=='avi')
                {
                    if($imageSize<=5000000)
                    {
                        $file = $request->file('files');
                        $imageName = $file->getClientOriginalName();
                        $url='public/img';
                        $path = $file->storeAs($url,$imageName);
                        $user->media= $imageName;
                        $user->photo_type=$extension;
                    }
                }
            }
            $user->category_id=$request->passion_category;
            $query=$user->save();
            $userlifepassion=user_achievements::where('user_id','=',$user1->id)->get();
            $userlifestrength=life_strength::all();
            $data6=categories::all();
            $htmltext= (string)View('student/LifePassionhtml',
            [
                'Achievement'=>$userlifepassion,
                'Strengthslist'=>$userlifestrength,
                'Categories'=>$data6
            ]);
            return response()->json(
                [
                    'success' => true,
                    'htmltext' => $htmltext
                ]
            );
            if($query)
            {
                return redirect('student/profile');
            }
        }
    }
    public function GetLifePassionhtml(Request $request)
    {
        if(session()->has('LoggedUser')){
            $user1=users::where('id','=',session('LoggedUser'))->first();
            $userlifeevent=user_achievements::where('id','=',$request->id)->first();
            if($userlifeevent->user_id==$user1->id)
            {
                $htmltext= (string)View('student/LifePassionEdit',['item'=>$userlifeevent]);
                return response()->json(
                    [
                        'success'=> true,
                        'htmltext'=>$htmltext
                    ]
                );
            }
            else
            {
                return response()->json(
                    [
                        'status'=> false,
                        'error'=>'access denied'
                    ]
                );
            }
        }
    }
    public function updatelifepassion(Request $request)
    {
        if(session()->has('LoggedUser')){
            $user1=users::where('id','=',session('LoggedUser'))->first();
            $validator = Validator::make($request->all(),[
                'passion_title' => 'required',
                'passion_description' => 'required',
                'passion_category' => 'required',
                'passion_strength'=>'required'
            ]);
            if ($validator->fails()){
                $errors = $validator->errors();
                $error_msg = "";
                foreach($errors->all() as $error){
                    if($error_msg == ""){
                    $error_msg = $error;
                    }
                }
                return response()->json(['status' => false,'error' => $error_msg]);
            }
            $user=user_achievements::where('id','=',$request->id)->first();
            $user->title=$request->passion_title;
            $user->user_id=$user1->id;
            $user->type=1;
            $user->category_id= $request->passion_category;
            $user->details=$request->passion_description;
            $user->strength=$request->passion_strength;
            $user->media_type=$request->passion_media_type;
            if($user->media_type=='link')
            {
                $user->media=$request->media_link;
            }
            $path='';
            if ($request->hasFile('files')) {
                $extension = $request->file('files')->extension();
                $imageSize = $request->file('files')->getSize();
                if($extension=='jpg'||$extension=='jpeg'||$extension=='png'||$extension=='mp3'||$extension=='mp4'||$extension=='wav'||$extension=='mov'||$extension=='avi')
                {
                    if($imageSize<=5000000)
                    {
                        $file = $request->file('files');
                        $imageName = $file->getClientOriginalName();
                        $url='public/img';
                        $path = $file->storeAs($url,$imageName);
                        $user->media= $imageName;
                        $user->photo_type=$extension;
                    }
                }
            }
            $user->category_id=$request->passion_category;
            $query=$user->save();
            $userlifepassion=user_achievements::where('user_id','=',$user1->id)->get();
            $userlifestrength=life_strength::all();
            $data6=categories::all();
            $htmltext= (string)View('student/LifePassionhtml',
            [
                'Achievement'=>$userlifepassion,
                'Strengthslist'=>$userlifestrength,
                'Categories'=>$data6
            ]);
            return response()->json(
                [
                    'success' => true,
                    'htmltext' => $htmltext
                ]
            );
        }
    }
    public function addmoment(Request $request)
    {
        if(session()->has('LoggedUser')){
            $user1=users::where('id','=',session('LoggedUser'))->first();
            DB::table('answers')->where('user_id','=',$user1->id)->delete();
            for ($x = 0; $x <= 19; $x++) {
                if($request->answer[$x]!=null)
                {
                    $user=new answers;
                    $user->user_id=$user1->id;
                    $user->question_id=$request->question_id[$x];
                    $user->answer=$request->answer[$x];
                    $user->privacy=$request->privacy_public[$x+1];
                    $query=$user->save();
                }
            }
            return redirect('student/profile');
        }
    }
    public function addstrength(Request $request)
    {
        if(session()->has('LoggedUser')){
            $user1=users::where('id','=',session('LoggedUser'))->first();
            DB::table('user_life_strengths')->where('user_id','=',$user1->id)->delete();
            for($x=0;$x<sizeof($request->life_str);$x++)
            {
                $user=new user_life_strengths;
                $user->user_id=$user1->id;
                $user->strengths=$request->life_str[$x];
                $query=$user->save();
            }
            return redirect('student/profile');
        }
    }
    public function userRegistrationPost4(Request $request)
    {
        if(session()->has('LoggedUser')){
            $user_id=users::where('id','=',session('LoggedUser'))->first();
            $validator = Validator::make($request->all(),[
                'life_event' => 'required|unique:user_life_event,life_event,NULL,id,user_id,'.$user_id,
                'standard' => 'required',
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors();
                $error_msg = "";
                foreach($errors->all() as $error){
                    if($error_msg == ""){
                    $error_msg = $error;
                    }
                }
                return response()->json(['status' => false,'error' => $error_msg]);
            }
            $e['user_id'] = $user_id;
            $e['standard'] = $request['standard'];
            $e['life_event'] = $request['life_event'];
            //LifeEvent::create($e);
            $html_text = $this->getLifelineDetails();
            return response()->json(['status' => true,'success' => 'Success', 'htmltext' => $html_text]);
        }
    }
    public function addlifeline(Request $request)
    {
        if(session()->has('LoggedUser')){
            $user1=users::where('id','=',session('LoggedUser'))->first();
            $validator = Validator::make($request->all(),[
                'life_event' => 'required|unique:user_life_event,life_event,NULL,id,user_id,'.$user1->id,
                'standard' => 'required',
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors();
                $error_msg = "";
                foreach($errors->all() as $error){
                    if($error_msg == ""){
                    $error_msg = $error;
                    }
                }
                return response()->json(['status' => false,'error' => $error_msg]);
            }
            $user2=new user_life_event;
            $user2->user_id=$user1->id;
            $user2->life_event=$request->life_event;
            $user2->standard=$request->standard;
            $query=$user2->save();
            $userlifeevent=user_life_event::where('user_id','=',$user1->id)->get();
            $htmltext= (string)View('student/LifeLinehtml',['Lifeline'=>$userlifeevent]);
            return response()->json(
                [
                    'success' => true,
                    'htmltext' => $htmltext
                ]
            );
        }
    }
    public function GetLifeLinehtml(Request $request)
    {
        if(session()->has('LoggedUser')){
            $user1=users::where('id','=',session('LoggedUser'))->first();
            $userlifeevent=user_life_event::where('id','=',$request->id)->first();
            if($userlifeevent->user_id==$user1->id)
            {
                $htmltext= (string)View('student/LifeLineEdit',['Lifeline'=>$userlifeevent]);
                return response()->json(
                    [
                        'success'=> true,
                        'htmltext'=>$htmltext
                    ]
                );
            }
            else
            {
                return response()->json(
                    [
                        'status'=> false,
                        'error'=>'access denied'
                    ]
                );
            }
        }
    }
    public function updatelifeline(Request $request)
    {
        if(session()->has('LoggedUser')){
            $user1=users::where('id','=',session('LoggedUser'))->first();
            $validator = Validator::make($request->all(),[
                'life_event' => 'required|unique:user_life_event,life_event,NULL,id,user_id,'.$user1->id,
                'standard' => 'required',
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors();
                $error_msg = "";
                foreach($errors->all() as $error){
                    if($error_msg == ""){
                    $error_msg = $error;
                    }
                }
                return response()->json(['status' => false,'error' => $error_msg]);
            }
            $data=user_life_event::where('id','=',$request->life_event_id)->first();
            $data->life_event=$request->life_event;
            $data->standard=$request->standard;
            $data->save();
            $userlifeevent=user_life_event::where('user_id','=',$user1->id)->get();
            $htmltext= (string)View('student/LifeLinehtml',['Lifeline'=>$userlifeevent]);
            return response()->json(
                [
                    'success' => true,
                    'htmltext' => $htmltext
                ]
            );
        }
    }
    public function deleteachievement($id)
    {
        if(session()->has('LoggedUser')){
            $user1=users::where('id','=',session('LoggedUser'))->first();
            $user2=user_achievements::where('id','=',$id)->first();
            $user2->delete();
            $user3=user_life_event::where('achievement_id','=',$id)->first();
            if($user3)
            {
                $user3->delete();
            }
            return redirect('student/profile');
        }
    }
    public function deletepassion($id)
    {
        if(session()->has('LoggedUser')){
            $user1=users::where('id','=',session('LoggedUser'))->first();
            $user2=user_achievements::where('id','=',$id)->first();
            $user2->delete();
            return redirect('student/profile');
        }
    }
    public function deletelifeline($id)
    {
        if(session()->has('LoggedUser')){
            $user1=users::where('id','=',session('LoggedUser'))->first();
            $user3=user_life_event::where('id','=',$id)->first();
            $user3->delete();
            return redirect('student/profile');
        }
    }
}
