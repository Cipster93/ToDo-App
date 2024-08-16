

<h1>ToDo App</h1>

<?php $__env->startSection('content'); ?>

<div class="cont-table">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Number</th>
        <th scope="col">Task</th>
        <th scope="col" class="description">Description</th>
        <th scope="col">Edit Task</th>
        <th scope="col">Delete Task</th>
        <th scope="col">Complete Task</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="<?php echo e($record->completed ? 'completed' : ''); ?>">
        <th scope="row"><?php echo e($record->id); ?></th>
        <td><?php echo e($record->task); ?></td>
        <td class="description"><?php echo e($record->description); ?></td>
        <td>
            <?php if(!$record->completed): ?>
            <form action="<?php echo e(route('edit.page', $record->id)); ?>" method="get">
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
            <?php endif; ?>
        </td>
        <td>
            <form action="<?php echo e(route('destroy.record', $record->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
        <td>
            <?php if(!$record->completed): ?>
            <form action="<?php echo e(route('complete.task', $record->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <button type="submit" class="btn btn-success">Complete</button>
            </form>
            <?php endif; ?>
        </td>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ToDoApp\resources\views/home.blade.php ENDPATH**/ ?>