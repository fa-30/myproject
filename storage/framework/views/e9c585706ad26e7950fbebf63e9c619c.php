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
    <form  action="<?php echo e(route('storeadmin')); ?>"method="post" enctype="multipart/form-data" >
    <?php echo csrf_field(); ?>
        <h3>add Admin</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" name="email"value="<?php echo e(old('email')); ?>" id="email">
        <span style="color: gray;"class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" id="password">
        <span style="color: gray;" class="text-danger"><?php $__errorArgs = ['password'];
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
        <button  class="btn btn-success">submet</button>
    
    </form>
</body>
</html><?php /**PATH C:\Users\dell\Desktop\iti_project\example\resources\views/createadmin.blade.php ENDPATH**/ ?>