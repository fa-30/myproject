<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
    <title>Document</title>

</head>
<body>
<h1>products Table </h1>
<a href="{{route('create')}}">Add Product</a>
<form method="get"action="/search">
      <input type="text" placeholder="Search.." name="search">
      <button class="sar" type="submit">Submit</button>
    </form>
  <div class="tbl-header">
 
    <table cellpadding="0" cellspacing="0" border="0">
        <thead>
            <tr>
            <th>Product Name</th>
                <th>Product price</th>
                <th>Product availablity</th>
                <th>category</th>
                <th>photo</th>
        


            </tr>
        </thead>

        <tbody>
            @foreach ($products as $product )
            <tr>
            <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->availability}}</td>
                <td>{{$product->category_id}}</td>
             
                <td><img src="{{ asset('images/'.$product->photo) }}" alt="Product Photo" style="height: 50px;"></td>
                 <td>
                   <form action="{{route('destroy',$product->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                   </form>
                   </td>
                   <td>
                   <form action="{{route('update',$product->id)}}" >
                    <button type="submit">Update</button>
                   </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

</body>
</html>