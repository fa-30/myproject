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
   
<h1>ourder </h1>
<div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                    <th>id</th>
                    <th>price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->price}}</td>
                </tr>
            </tbody>
        </table>
 
        </div>
        <h1>user </h1>
        <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                    <th>
                        user Name
                    </th>
                    <th>
                        user email
                    </th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $order->clint->name}}</td>
                        <td>{{ $order->clint->email}}</td>
                    </tr>
            </tbody>
        </table>
</div>
</body>
</html>