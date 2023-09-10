<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/table.css')); ?>">
    <title>Document</title>

</head>
<body>
<h1>users Table </h1>
<form method="get"action="<?php echo e(route('searchuser')); ?>">
      <input type="text" placeholder="Search.." name="searchuser">
      <button class="sar" type="submit">Submit</button>
    </form>
  <div class="tbl-header">
 
    <table cellpadding="0" cellspacing="0" border="0">
        <thead>
            <tr>
            <th>Name</th>
                <th>email</th>
                <th>pasword</th>
                <th></th>
                <th>photo</th>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->password); ?></td>
                <td></td>
                <td><img src="<?php echo e(asset('images/'.$user->photo)); ?>" alt="Product Photo" style="height: 50px;"></td>
                 <td>
                   <form action="<?php echo e(route('destroyuser',$user->id)); ?>" method="POST">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button type="submit">Delete</button>
                   </form>
                   </td>
                  
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
</div>

</body>
</html><?php /**PATH C:\Users\dell\Desktop\iti_project\example\resources\views/admin after login/show/indexuser.blade.php ENDPATH**/ ?>