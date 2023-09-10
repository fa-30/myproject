<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">

<link rel="stylesheet" href="{{asset('css/login admin.css')}}">
</head>
<body>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form  action="{{route('editadmin',$admin->id)}}"method="post" enctype="multipart/form-data" >
    @method('PUT')
    @csrf
        <h3>update admin</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" name="email"value="{{$admin->email}}" id="email">
        <span style="color: gray;"class="text-danger">@error('email'){{$message}} @enderror</span>
        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" id="password">
        <span style="color: gray;" class="text-danger">@error('password'){{$message}} @enderror</span>
        <label for="photo">image</label>
     <input type="file" name="photo" >
     <span style="color: gray;"class="text-danger">@error('photo'){{$message}} @enderror</span>
        <button  class="btn btn-success">submet</button>
    
    </form>
</body>
</html>