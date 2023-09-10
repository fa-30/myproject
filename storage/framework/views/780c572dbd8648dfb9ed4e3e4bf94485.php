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
<h1>products Table </h1>
<a href="<?php echo e(route('create')); ?>">Add Product</a>
<form method="get"action="/search">
      <input type="text" placeholder="Search.." name="search">
      <button class="sar" type="submit">Submit</button>
    </form>
  <div class="tbl-header">
 
    <table cellpadding="0" cellspacing="0" border="0">
        <thead>
            <tr>
            <th>Product Name</th>
                <th>Product price</th>
                <th>Product availablity</th>
                <th>category</th>
                <th>photo</th>
        


            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->price); ?></td>
                <td><?php echo e($product->availability); ?></td>
                <td><?php echo e($product->category_id); ?></td>
             
                <td><img src="<?php echo e(asset('images/'.$product->photo)); ?>" alt="Product Photo" style="height: 50px;"></td>
                 <td>
                   <form action="<?php echo e(route('destroy',$product->id)); ?>" method="POST">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button type="submit">Delete</button>
                   </form>
                   </td>
                   <td>
                   <form action="<?php echo e(route('update',$product->id)); ?>" >
                    <button type="submit">Update</button>
                   </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
</div>

</body>
</html><?php /**PATH C:\Users\dell\Desktop\iti_project\example\resources\views/admin after login/show/index.blade.php ENDPATH**/ ?>