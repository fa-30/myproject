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

        <h1>products</h1>
        <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                    <th>
                    product name
                    </th>
                    <th>
                        product price
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($product->name); ?></td>
                        <td><?php echo e($product->price); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
</div>
</body>
</html>
                   
       

 
<?php /**PATH C:\Users\dell\Desktop\iti_project\example\resources\views/admin after login/show/showproductcategory.blade.php ENDPATH**/ ?>