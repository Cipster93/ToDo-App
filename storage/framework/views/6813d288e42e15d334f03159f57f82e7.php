

<h1>New Task</h1>

<?php $__env->startSection('content'); ?>

<div class="newTask">
    <form action="<?php echo e(route('store.page')); ?>" method="post">
        <?php echo csrf_field(); ?>
        New Task:<br>
        <input type="text" name="task"> <br><br>
        Description:<br>
        <textarea name="description"></textarea> <br><br>
        <button type="submit" class="btn btn-primary">Create Task</button>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ToDoApp\resources\views/newTask.blade.php ENDPATH**/ ?>