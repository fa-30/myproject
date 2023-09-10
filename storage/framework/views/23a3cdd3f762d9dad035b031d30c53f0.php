<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">

<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:10%">Product</th>
            <th style="width:10%">name</th>
            <th style="width:10%">Price</th>
            <th style="width:10%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
    <?php $total = 0 ?>
        <?php if(session('cart')): ?>
            <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $total += $details['price'] * $details['quantity'] ?>
                <tr data-id="<?php echo e($id); ?>">
                    <td data-th="Product">
                        <div class="col-sm-3 hidden-xs"><img src="<?php echo e(asset('images/'.$details['photo'])); ?>" width="100" height="100" class="img-responsive"/></div>
                    </td>
                    <td data-th="name"><?php echo e($details['name']); ?></td>
                    <td data-th="Price">$<?php echo e($details['price']); ?></td>
                    <td data-th="Quantity"><?php echo e($details['quantity']); ?></td>
                    <td data-th="Subtotal" class="text-center">$<?php echo e($details['price'] * $details['quantity']); ?></td>
                    <td class="actions" data-th="">
                        <form method="POST" action="<?php echo e(route('cart.delete', ['id' => $id])); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                           <button type="submit" class="btn btn-danger btn-sm cart_remove">Delete</button>
                        </form>
                   </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
    <tfoot>
         <tr>
            <td colspan="6" style="text-align:center;">
                <form action="<?php echo e(route('storecart')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                  <strong>total $</strong><input class="in" name="total" value=" <?php echo e($total); ?>"></input>
                    <button class="btn btn-success" id="checkout-live-button"> <i class="fa fa-money"></i> confirm</button>
                </form>
            </td>
         </tr>
         <tr>
            <td colspan="6" style="text-align:center;">
                <a href="<?php echo e(url('/')); ?>" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
            </td>
        </tr>
    </tfoot>
</table>    
</div>
</div>
</br>
<div class="container">
    
    <?php if(session('success')): ?>
        <div class="alert alert-success">
          <?php echo e(session('success')); ?>

        </div> 
    <?php endif; ?>
</div>
</body>
</html><?php /**PATH C:\Users\dell\Desktop\iti_project\example\resources\views/cart.blade.php ENDPATH**/ ?>