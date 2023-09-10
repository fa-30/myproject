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
       
   <img src="<?php echo e(asset('images/'.$data->photo)); ?>" alt="user Photo" style="height: 150px;">
   <h1>welcome!</h1>
   <p > <?php echo e($data->name); ?></p>
   <p class="name"> email : <?php echo e($data->email); ?></p>
   <a href="logoutuser">Logout</a>
   <a class="up" href="updateuser">edite profile</a>

</div>
<div class="main">
  <div class="mainn3">
    <div class="mai">
        <a href="/" target="blank">
            <img src="https://as2.ftcdn.net/v2/jpg/01/05/59/47/1000_F_105594718_QxMtoxQ7dNVVEUCtfm9SRUbzviJbFSCW.jpg" style="width: 1100px; height: 500px;">
            <div class="mainspann">
              <span>shop now</span>
            </div>
         </a>
    </div>
</div>
  <div class="mainn3">
    <div class="mai">
        <a href="showuser" target="blank" >
            <img src="https://png.pngtree.com/thumb_back/fh260/background/20230616/pngtree-3d-render-of-a-row-of-pink-shopping-bags-image_3624092.jpg"style="width: 1100px; height: 500px;">
            <div class="mainspann">
              <span>my orders</span>
            </div>
         </a>
    </div>
</div>

    </div>                  
</body>
</html>
                
</body>
</html><?php /**PATH C:\Users\dell\Desktop\iti_project\example\resources\views/dashboarduser.blade.php ENDPATH**/ ?>