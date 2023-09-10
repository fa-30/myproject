<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/dashboord.css')); ?>">
    <title>Document</title>
</head>
<body>
<div class="header-container">
       
   <img src="<?php echo e(asset('images/'.$data->photo)); ?>" alt="admin Photo" style="height: 150px;">
   <h1 class="m-t-10 m-b-5">welcome!</h1>
   <p class="m-b-10"> <?php echo e($data->email); ?></p>
   <a href="logout">Logout</a>

</div>
<div class="main">
  <div class="main1">
    <div class="mai">
        <a href="admins" target="blank">
            <img src="https://blogimage.vantagefit.io/vfitimages/2023/05/employee-morale-and-wellbeing.png">
            <div class="mainspan">
              <span>admins</span>
            </div>
         </a>
    </div>
    <div class="mai">
        <a href="users" target="blank" >
            <img src="https://resources.workable.com/wp-content/uploads/2023/06/USED_-Employee-engagement-ideas.jpg">
            <div class="mainspan">
              <span>users</span>
            </div>
         </a>
    </div>
</div>
<div class="main2">
    <div class="mai" >
        <a href="products" target="blank" >
            <img src="https://img.freepik.com/premium-vector/supermarket-store-interior-with-goods-big-shopping-mall-interior-store-inside-checkout-counter-grocery-drinks-food-fruits-dairy-products-vector-illustration-flat-style_169241-4555.jpg?w=2000">
            <div class="mainspan">
              <span>products</span>
            </div>
         </a>
    </div>
    <div class="mai">
        <a href="categoryies" target="blank" >
            <img src="https://media.istockphoto.com/id/1306860966/vector/supermarket-shelves-with-food-products-grocery-store-shelf-with-assortment-pasta-diary-flour.jpg?s=170667a&w=0&k=20&c=lBg2rsFYlzAzPPQBUi2jAeetVpyklhfaxCSRZabQ4Uw=">
            <div class="mainspan">
              <span>category</span>
            </div>
         </a>
    </div>
</div>
<div class="main3">
    <div class="mai" >
        <a href="orders" target="blank" >
            <img src="https://img.freepik.com/premium-photo/dollars-cash-currency-pink-background_94008-151.jpg?w=2000">
            <div class="mainspan">
              <span>orders</span>
            </div>
         </a>
    </div>
</div>
    </div>                  
</body>
</html><?php /**PATH C:\Users\dell\Desktop\iti_project\example\resources\views/dashboord.blade.php ENDPATH**/ ?>