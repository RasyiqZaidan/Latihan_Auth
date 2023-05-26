<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row d-flex">
        <form action="/" method="get">
            <select class="form-control" name="category" id="">
                <option selected disebled value="">Pilih</option>
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <button class="btn btn-primary" type="submit">Cari</button>
        </form>
    </div>
    <div class="row">
        <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 100%; height: 100%">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($item->title); ?></h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo e($item->user->name); ?> <?php echo e($item->created_at->format('m/d/Y')); ?></h6>
                        <p class="card-text"><?php echo $item->body; ?></p>
                        <a href="/blog/<?php echo e($item->slug); ?>" class="card-link">Selengkapnya...</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\latihan-auth\resources\views/welcome.blade.php ENDPATH**/ ?>