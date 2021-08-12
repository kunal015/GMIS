<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
</style>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
  <body>
  @extends('master')
  @section('content')
    <div class="container custom-file">
        <form method='post' action="{{route('uploadfile')}}" enctype='multipart/form-data' >
            @csrf
            <br/><br/>
            <label for="school">Choose A School:</label>
            <select name="school" id="school" style="margin-right:10px;padding-left:20px;" placeholder="Select the school" required>
            <option value="GMIS">Global Mission International School</option>
            <option value="SKV">Scindia Kanya Vidyalaya</option>
            <option value="None">Shri Ram Global School</option>
            <option value="audi">None Of The Above</option>
            </select>
            <input type="file" name="file" class="custom-file-input" id="customFileLang" lang="en" >
            <input type='submit' name='submit' value='Import' class="btn btn-success">
        </form>
    </div>
    @endsection('content')
  </body>
</html>
