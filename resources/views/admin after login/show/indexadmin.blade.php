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
<h1>Admins Table </h1>
<a href="{{route('createadmin')}}">Add </a>
  <div class="tbl-header">
 
    <table cellpadding="0" cellspacing="0" border="0">
        <thead>
            <tr>
            <th>email</th>
                <th>password</th>
                <th></th>
                <th>image</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($admins as $admin )
            <tr>
            <td>{{$admin->email}}</td>
                <td>{{$admin->getPasswordWithoutHash()}}</td>
                <td></td>
                <td><img src="{{ asset('images/'.$admin->photo) }}" alt="admin Photo" style="height: 50px;"></td>
                 <td>
                   <form action="{{route('destroyadmin',$admin->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                   </form>
                   </td>
                   <td>
                   <form action="{{route('updateadmin',$admin->id)}}" >
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