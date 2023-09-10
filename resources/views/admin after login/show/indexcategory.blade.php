
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
<h1>categorys Table </h1>
<a href="{{route('createcategory')}}">Add </a>
  <div class="tbl-header">
 
    <table cellpadding="0" cellspacing="0" border="0">
    <thead>
            <tr>
            <th>id</th>
                <th>Name</th>
              
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $category )
            <tr>
            <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>
                   <form action="{{route('categoryiesproduct',$category->id)}}" >
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