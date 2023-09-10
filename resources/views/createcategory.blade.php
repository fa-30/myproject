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
    <form  action="{{route('storecategory')}}"method="post" enctype="multipart/form-data" >
    @csrf
        <h3>add category</h3>

        <label for="ame">category Name</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="name">
    <span style="color: gray;"class="text-danger">@error('name'){{$message}} @enderror</span>

        <button  class="btn btn-success">submet</button>
    
    </form>
</body>
</html>