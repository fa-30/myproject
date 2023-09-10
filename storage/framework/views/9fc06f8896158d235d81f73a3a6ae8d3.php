<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">

<link rel="stylesheet" href="<?php echo e(asset('css/test.css')); ?>">
</head>
<body>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
   
  <div class="login-box">
    <div class="login-snip">
    
    <a class="tab">login for user</a>
      <div class="login-space">
      
      <!--login starts here-->

        <form action= "<?php echo e(route('registrationform')); ?>" method="post" class="login">
				<?php echo csrf_field(); ?>

          <div class="group">
            <br><br>
            <label for="email" class="label">email</label>
            <input name="email" type="text" class="input"  value="<?php echo e(old('email')); ?>" placeholder="Enter your email">
            <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            <br><br>
          </div>
          <div class="group">
            <label for="password" class="label">Password</label>
            <input name="password" type="password" class="input" data-type="password" placeholder="Enter your password">
            <span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            <br><br>
            <?php if(Session::has('fail')): ?>
					<span class="text-danger"><?php echo e(Session::get('fail')); ?></span>
                    <?php endif; ?>
          </div>
        
          <div class="group">
            <input type="submit" class="button" name="log" value="Login">
          </div>
      
        </form>

      
</div>
</div>
</div>

</body>
</html>

<?php /**PATH C:\Users\dell\Desktop\iti_project\example\resources\views/registarlog.blade.php ENDPATH**/ ?>