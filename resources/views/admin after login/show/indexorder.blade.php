
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
<h1>orders Table </h1>

  <div class="tbl-header">
 
    <table cellpadding="0" cellspacing="0" border="0">
        <thead>
            <tr>
                <th>id</th>
                <th>price</th>
             
            </tr>
        </thead>

        <tbody>
            @foreach ($orders as $order )
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->price}}</td>
                <td>
                   <form action="{{route('showorder',$order->id)}}" >
                    <button type="submit">show</button>
                   </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    
</div>

</body>
</html>