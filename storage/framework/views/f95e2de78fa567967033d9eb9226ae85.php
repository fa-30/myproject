<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border=1 >
        <thead>
            <tr>
            <th>ProductId</th>
               
                <th>Product price</th>
                <th>Product availablity</th>
                <th>Actions</th>


            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $produc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($product->product_id); ?></td>
                <td><?php echo e($product->product_price); ?></td>
                <td><?php echo e($product->product_availability); ?></td>
                <td><button onclick="location='/products/<?php echo e($product->product_id); ?>'">show</button></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>

</body>
</html><?php /**PATH C:\Users\dell\Desktop\com\example\resources\views/produc.blade.php ENDPATH**/ ?>