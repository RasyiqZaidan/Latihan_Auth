
<?php $__env->startPush('style'); ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
<div class="card shadow mb-4 w-75">
<!-- Card Header - Dropdown -->
<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
<h6 class="m-0 font-weight-bold text-primary">Dropdown Card Example</h6>
<div class="dropdown no-arrow">
<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
</a>
<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
<div class="dropdown-header">Dropdown Header:</div>
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</div>
</div>
<!-- Card Body -->
<div class="card-body">
    <form action="<?php echo e(route('posts.edit.update',$post->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>
<div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="title" value="<?php echo e($post->title); ?>" class="form-control form-control-user" placeholder="Belajar Laravel Dasar">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <label for="validationDefault04">Category</label>
                    <select class="custom-select" name="category_id" id="validationDefault04" required>
                        <option selected value="<?php echo e($post->category_id); ?>"><?php echo e($post->category->name ?? ''); ?></option>
                        <option selected disabled value="">Choose...</option>
                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>     
    </div>
    <div class="row">
        <textarea name="body" rows="5" class="summernote"><?php echo e($post->body); ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
</div>
</div>


<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
$('.summernote').summernote({
        height:200
    })
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\latihan-auth\resources\views/posts/edit.blade.php ENDPATH**/ ?>