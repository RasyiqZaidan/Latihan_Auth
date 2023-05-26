

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="title">
        <h3><?php echo e($post->title ?? ''); ?></h3>
    </div>
    <div class="body">
        <p><?php echo $post->body; ?></p>
    </div>
    <span>Author: <?php echo e($post->user->name); ?></span>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\latihan-auth\resources\views/blog.blade.php ENDPATH**/ ?>