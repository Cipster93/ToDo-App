

<?php $__env->startSection('content'); ?>

<h1>Update page</h1>

<form action="<?php echo e(route('update.record', $record->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    New Task:<br>
    <input type="text" name="task" value="<?php echo e(old('task', $record->task)); ?>"> <br><br>
    Description:<br>
    <textarea name="description" value="<?php echo e(old('description', $record->description)); ?>"></textarea> <br><br>

    <button type="submit" class="btn btn-success">Update Task</button>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ToDoApp\resources\views/update.blade.php ENDPATH**/ ?>