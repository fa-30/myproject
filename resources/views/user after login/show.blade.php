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
    <h1 style=" margin-left: 8%;">my orders </h1>
        <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
        <table>
            <thead>
                <tr>
                    <th>
                       order id
                    </th>
                    <th>
                       order price
                    </th>
                    <th>
                        DATE
                    </th>
                </tr>
            </thead>
            <tbody>
                {{-- @dd($category->products) --}}
                @foreach ( $user->orders as $order )
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->created_at}}</td>
                   
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
</body>
</html>