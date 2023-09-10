<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">

</head>
<body>

     
<?php $__env->startSection('content'); ?>
      
<div class="row">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xs-18 col-sm-6 col-md-4" style="margin-top:10px;">
            <div class="img_thumbnail productlist">
                <img src="<?php echo e(asset('images/'.$product->photo)); ?>" class="img-fluid">
                <div class="caption">
                    <h4><?php echo e($product->name); ?></h4>
                    <p><strong>Price: </strong> $<?php echo e($product->price); ?></p>
                    <p class="btn-holder"><a href="<?php echo e(route('add_to_cart', $product->id)); ?>" class="btn btn-primary btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
      
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\Desktop\iti_project\example\resources\views/cart/products.blade.php ENDPATH**/ ?>