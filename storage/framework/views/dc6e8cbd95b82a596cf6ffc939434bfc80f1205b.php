
<?php $__env->startSection('content'); ?>

        <div class="text-success fs-3 mt-3 mb-3">Edit ShoppingCard</div>
        <form action="<?php echo e(route('shopping.update', $shopping->id)); ?>" method="POST" class="card p-5">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
           
            <div class="form-group">
                <label for="customer_id">Customer Name:</label>
                <select name="customer_id" class="form-control" required>
                    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($customer->id); ?>" <?php echo e($shopping->customer_id == $customer->id ? 'selected' : ''); ?>><?php echo e($customer->customer_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="product_id">Product Name:</label>
                <select name="product_id" class="form-control" required>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($product->id); ?>" <?php echo e($shopping->product_id == $product->id ? 'selected' : ''); ?>><?php echo e($product->product_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity :</label>
                <input type="text" name="quantity" class="form-control" value="<?php echo e($shopping->quantity); ?>" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?php echo e(route('shopping.index')); ?>" class="btn btn-info">Back</a>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\testdb\example-app\resources\views/shopping/edit.blade.php ENDPATH**/ ?>