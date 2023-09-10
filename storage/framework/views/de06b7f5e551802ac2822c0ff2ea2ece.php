<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>
<body>
<div class="container">
  <div class="row">
       <div class="col-lg-12 col-sm-12 col-12">
          <div class="dropdown">
                <a href="<?php echo e(route('cart')); ?>" id="dLabel"  class="btn btn-primary">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge bg-danger"><?php echo e(count((array) session('cart'))); ?></span>
               </a>
          </div>
      </div>
   <form method="get"action="/search2">
         <input type="text" placeholder="Search.." name="search">
         <button class="sar" type="submit">Submit</button>
    </form>
    <br> <br>

    <div class="container">
          <?php if(session('success')): ?>
               <div class="alert alert-success"> <?php echo e(session('success')); ?></div> 
          <?php endif; ?>
    </div>
     <br>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div id="box"class="col-xs-18 col-sm-6 col-md-4" style="margin-top:10px;">
            <div class="img_thumbnail productlist">
                <img src="<?php echo e(asset('images/'.$product->photo)); ?>" class="img-fluid"style="width: 398px; height: 258px;">
                <div class="caption">
                    <h4><?php echo e($product->name); ?></h4>
                    <p><strong>Price: </strong> $<?php echo e($product->price); ?></p>
                    <p class="btn-holder"><a href="<?php echo e(route('add_to_cart', $product->id)); ?>" class="buton" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
</body>
</html><?php /**PATH C:\Users\dell\Desktop\iti_project\example\resources\views/products.blade.php ENDPATH**/ ?>