<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">

<link rel="stylesheet" href="<?php echo e(asset('css/login admin.css')); ?>">
</head>
<body>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
  
        <form class="create" action="<?php echo e(route('edit',$product->id)); ?>" method="post"  enctype="multipart/form-data" >
        <?php echo method_field('PUT'); ?>
      <?php echo csrf_field(); ?>
      <label for="product_name">Product Name</label>
    <input type="text" name="product_name" id="product_name" value="<?php echo e($product->name); ?>">
    <span style="color: gray;"class="text-danger"><?php $__errorArgs = ['product_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>

    <label for="product_price">Product Price</label>
    <input type="number" name="product_price" id="product_price" value="<?php echo e($product->price); ?>" >
<span style="color: gray;"class="text-danger"><?php $__errorArgs = ['product_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>

    <label for="product_availability">product availability</label>
    <select name="product_availability" id="product_availability" placeholder="availability" >
        <option ></option>
        <option value="available" <?php echo e(old('product_availability') == 'available' ? 'selected' : ''); ?>>Available</option>
        <option value="unavailable" <?php echo e(old('product_availability') == 'unavailable' ? 'selected' : ''); ?>>Unavailable</option>
    </select>
    <span style="color: gray;"class="text-danger"><?php $__errorArgs = ['product_availability'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
 

    <label for="category_id">Category ID</label>
    <input type="number" name="category_id" id="category_id" value="<?php echo e($product->category_id); ?>" >
    <span style="color: gray;"class="text-danger"><?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
    <label for="photo">image</label>
     <input type="file" name="photo" >
     <span style="color: gray;"class="text-danger"><?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        <button  class="btn btn-success">update</button>
  
    </form>
</body>
</html>


<?php /**PATH C:\Users\dell\Desktop\iti_project\example\resources\views/update.blade.php ENDPATH**/ ?>