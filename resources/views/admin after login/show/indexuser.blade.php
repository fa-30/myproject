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
<h1>users Table </h1>
<form method="get"action="{{route('searchuser')}}">
      <input type="text" placeholder="Search.." name="searchuser">
      <button class="sar" type="submit">Submit</button>
    </form>
  <div class="tbl-header">
 
    <table cellpadding="0" cellspacing="0" border="0">
        <thead>
            <tr>
            <th>Name</th>
                <th>email</th>
                <th>pasword</th>
                <th></th>
                <th>photo</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user )
            <tr>
            <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td></td>
                <td><img src="{{ asset('images/'.$user->photo) }}" alt="Product Photo" style="height: 50px;"></td>
                 <td>
                   <form action="{{route('destroyuser',$user->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                   </form>
                   </td>
                  
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

</body>
</html>