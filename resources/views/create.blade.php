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
  
        <form class="create" action="{{route('store')}}" method="post"  enctype="multipart/form-data" >
      @csrf
      <label for="product_name">Product Name</label>
    <input type="text" name="product_name" id="product_name" value="{{ old('product_name') }}" placeholder="name">
    <span style="color: gray;"class="text-danger">@error('product_name'){{$message}} @enderror</span>

    <label for="product_price">Product Price</label>
    <input type="number" name="product_price" id="product_price" value="{{ old('product_price') }}"placeholder="price" >
<span style="color: gray;"class="text-danger">@error('product_price'){{$message}} @enderror</span>

    <label for="product_availability">product availability</label>
    <select name="product_availability" id="product_availability" placeholder="availability" >
        <option ></option>
        <option value="available" {{ old('product_availability') == 'available' ? 'selected' : '' }}>Available</option>
        <option value="unavailable" {{ old('product_availability') == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
    </select>
    <span style="color: gray;"class="text-danger">@error('product_availability'){{$message}} @enderror</span>
 

    <label for="category_id">Category ID</label>
    <input type="number" name="category_id" id="category_id" value="{{ old('category_id') }}" placeholder="catigory" >
    <span style="color: gray;"class="text-danger">@error('category_id'){{$message}} @enderror</span>
    <label for="photo">image</label>
     <input type="file" name="photo" >
     <span style="color: gray;"class="text-danger">@error('photo'){{$message}} @enderror</span>
        <button  class="btn btn-success">submet</button>
  
    </form>
</body>
</html>