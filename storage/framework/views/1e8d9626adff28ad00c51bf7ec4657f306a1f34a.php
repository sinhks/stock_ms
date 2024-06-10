
<?php $__env->startSection('content'); ?>


    <div class="text-success fs-3 mt-3 mb-3">Create New Customer</div>

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

<form action="<?php echo e(route('customers.store')); ?>" method="POST" class="card p-5">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="name">Customer Name:</label>
        <input type="text" class="form-control" id="customer_name" name="customer_name" value="<?php echo e(old('customer_name')); ?>">
    </div>
    <div class="form-group">
        <label for="name">Contact Name:</label>
        <input type="text" class="form-control" id="contact_name" name="contact_name" value="<?php echo e(old('contact_name')); ?>">
    </div>
    <div class="form-group">
        <label for="name">Contact title:</label>
        <input type="text" class="form-control" id="contact_title" name="contact_title" value="<?php echo e(old('contact_title')); ?>">
    </div>
   
    <div class="form-group">
        <label for="address">Address:</label>
        <textarea class="form-control" id="address" name="address"><?php echo e(old('address')); ?></textarea>
    </div>
    <div class="form-group">
        <label for="name">City:</label>
        <input type="text" class="form-control" id="city" name="city" value="<?php echo e(old('city')); ?>">
    </div>
    <div class="form-group">
        <label for="region">Region:</label>
        <input type="text" class="form-control" id="region" name="region" value="<?php echo e(old('region')); ?>">
    </div>
    <div class="form-group">
        <label for="postal_code">postal code:</label>
        <input type="number" class="form-control" id="postal_code" name="postal_code" value="<?php echo e(old('postal_code')); ?>">
    </div>
    <div class="form-group">
        <label for="country">Country:</label>
        <input type="text" class="form-control" id="country" name="country" value="<?php echo e(old('country')); ?>">
    </div>
    <div class="form-group">
        <label for="phone">phone:</label>
        <input type="number" class="form-control" id="phone" name="phone" value="<?php echo e(old('phone')); ?>">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="<?php echo e(route('customers.index')); ?>" class="btn btn-info mt-2">Show Customer</a>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\testdb\example-app\resources\views/customers/create.blade.php ENDPATH**/ ?>