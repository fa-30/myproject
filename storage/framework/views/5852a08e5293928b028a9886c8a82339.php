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
<h1>Admins Table </h1>
<a href="<?php echo e(route('createadmin')); ?>">Add </a>
  <div class="tbl-header">
 
    <table cellpadding="0" cellspacing="0" border="0">
        <thead>
            <tr>
            <th>email</th>
                <th>password</th>
                <th></th>
                <th>image</th>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($admin->email); ?></td>
                <td><?php echo e($admin->getPasswordWithoutHash()); ?></td>
                <td></td>
                <td><img src="<?php echo e(asset('images/'.$admin->photo)); ?>" alt="admin Photo" style="height: 50px;"></td>
                 <td>
                   <form action="<?php echo e(route('destroyadmin',$admin->id)); ?>" method="POST">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button type="submit">Delete</button>
                   </form>
                   </td>
                   <td>
                   <form action="<?php echo e(route('updateadmin',$admin->id)); ?>" >
                    <button type="submit">Update</button>
                   </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
</div>

</body>
</html><?php /**PATH C:\Users\dell\Desktop\iti_project\example\resources\views/admin after login/show/indexadmin.blade.php ENDPATH**/ ?>