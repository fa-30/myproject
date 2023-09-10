<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">

<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:10%">Product</th>
            <th style="width:10%">name</th>
            <th style="width:10%">Price</th>
            <th style="width:10%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
    @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="col-sm-3 hidden-xs"><img src="{{ asset('images/'.$details['photo'])}}" width="100" height="100" class="img-responsive"/></div>
                    </td>
                    <td data-th="name">{{ $details['name'] }}</td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Quantity">{{ $details['quantity'] }}</td>
                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <form method="POST" action="{{ route('cart.delete', ['id' => $id]) }}">
                            @csrf
                            @method('DELETE')
                           <button type="submit" class="btn btn-danger btn-sm cart_remove">Delete</button>
                        </form>
                   </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
         <tr>
            <td colspan="6" style="text-align:center;">
                <form action="{{route('storecart')}}" method="POST">
                @csrf
                  <strong>total $</strong><input class="in" name="total" value=" {{ $total }}"></input>
                    <button class="btn btn-success" id="checkout-live-button"> <i class="fa fa-money"></i> confirm</button>
                </form>
            </td>
         </tr>
         <tr>
            <td colspan="6" style="text-align:center;">
                <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
            </td>
        </tr>
    </tfoot>
</table>    
</div>
</div>
</br>
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
</div>
</body>
</html>