
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
<h1>categorys Table </h1>
<a href="<?php echo e(route('createcategory')); ?>">Add </a>
  <div class="tbl-header">
 
    <table cellpadding="0" cellspacing="0" border="0">
    <thead>
            <tr>
            <th>id</th>
                <th>Name</th>
              
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($category->id); ?></td>
                <td><?php echo e($category->name); ?></td>
               
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
</div>

</body>
</html><?php /**PATH C:\Users\dell\Desktop\iti_project\example\resources\views/indexcategory.blade.php ENDPATH**/ ?>