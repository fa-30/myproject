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
    <form  action="<?php echo e(route('storecategory')); ?>"method="post" enctype="multipart/form-data" >
    <?php echo csrf_field(); ?>
        <h3>add category</h3>

        <label for="ame">category Name</label>
    <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>" placeholder="name">
    <span style="color: gray;"class="text-danger"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>

        <button  class="btn btn-success">submet</button>
    
    </form>
</body>
</html><?php /**PATH C:\Users\dell\Desktop\iti_project\example\resources\views/createcategory.blade.php ENDPATH**/ ?>