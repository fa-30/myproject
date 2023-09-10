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

        <h1>products</h1>
        <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                    <th>
                    product name
                    </th>
                    <th>
                        product price
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $category->products as $product )
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
</body>
</html>
                   
       

 
