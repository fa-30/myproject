<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/dashboord.css')}}">
    <title>Document</title>
</head>
<body>
<div class="header-container">
       
   <img src="{{ asset('images/'.$data->photo) }}" alt="admin Photo" style="height: 150px;">
   <h1 class="m-t-10 m-b-5">welcome!</h1>
   <p class="m-b-10"> {{$data->email}}</p>
   <a href="logout">Logout</a>

</div>
<div class="main">
  <div class="main1">
    <div class="mai">
        <a href="admins" target="../blank">
            <img src="imgout/employee-morale-and-wellbeing.png">
            <div class="mainspan">
              <span>admins</span>
            </div>
         </a>
    </div>
    <div class="mai">
        <a href="users" target="../blank" >
            <img src="imgout/USED_-Employee-engagement-ideas.jpg">
            <div class="mainspan">
              <span>users</span>
            </div>
         </a>
    </div>
</div>
<div class="main2">
    <div class="mai" >
        <a href="products" target="../blank" >
            <img src="imgout/supermarket-store.avif">
            <div class="mainspan">
              <span>products</span>
            </div>
         </a>
    </div>
    <div class="mai">
        <a href="categoryies" target="../blank" >
            <img src="imgout/istockphoto-1306860966-170667a.jpg">
            <div class="mainspan">
              <span>category</span>
            </div>
         </a>
    </div>
</div>
<div class="main3">
    <div class="mai" >
        <a href="orders" target="../blank" >
            <img src="imgout/dollars-cash-currency-pink-background_94008-151.avif">
            <div class="mainspan">
              <span>orders</span>
            </div>
         </a>
    </div>
</div>
    </div>                  
</body>
</html>