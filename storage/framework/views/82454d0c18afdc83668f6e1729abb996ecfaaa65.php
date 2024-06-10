
<?php $__env->startSection('content'); ?>


        <div class="text-success fs-3 mt-3 mb-3 float-start"> <i class="fa-solid fa-cart-shopping nav-icon"></i> Shopping Card</div>
        <div class="float-end mt-2 mb-4">
            <a href="<?php echo e(route('shopping.create')); ?>" class="btn btn-success">Create New ShoppingCard</a>
        </div><br><br><br>
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <table class="table table-striped  text-center">
        <thead>
        <tr>
            <th>ID</th>
            <th>Customer Name</th>
            <th>Product_Name</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $shoppings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shopping): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($shopping->id); ?></td>
                    <td><?php echo e($shopping->customer_id); ?></td>
                    <td><?php echo e($shopping->product_id); ?></td>
                    <td><?php echo e($shopping->quantity); ?></td>
                    
                    <td>
                    <form action="<?php echo e(route('shopping.destroy',$shopping->id)); ?>" method="POST">
                            
                            <a href="<?php echo e(route('shopping.edit',$shopping->id)); ?>" class="btn btn-info">Edit</a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\testdb\example-app\resources\views/shopping/index.blade.php ENDPATH**/ ?>