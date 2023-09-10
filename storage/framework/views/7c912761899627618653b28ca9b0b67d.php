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
    <h1 style=" margin-left: 8%;">my orders </h1>
        <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
        <table>
            <thead>
                <tr>
                    <th>
                       order id
                    </th>
                    <th>
                       order price
                    </th>
                    <th>
                        DATE
                    </th>
                </tr>
            </thead>
            <tbody>
                
                <?php $__currentLoopData = $user->orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($order->id); ?></td>
                        <td><?php echo e($order->price); ?></td>
                        <td><?php echo e($order->created_at); ?></td>
                   
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
</div>
</body>
</html><?php /**PATH C:\Users\dell\Desktop\iti_project\example\resources\views/user after login/show.blade.php ENDPATH**/ ?>