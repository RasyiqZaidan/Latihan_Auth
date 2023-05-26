

<?php $__env->startPush('style'); ?>
<link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 py-4">Management Data Post</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    
    <div class="card-body">
        <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary mb-3 px-4"><i class="fas fa-plus pr-2"></i>Buat Post</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Body</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
               <tbody>
                <?php
                    $no = 1;
                ?>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($no++); ?></td>
                    <td><?php echo e($post->title); ?></td>
                    <td><?php echo e($post->slug); ?></td>
                    <td><?php echo e($post->body); ?></td>
                    <td><?php echo e($post->user->name); ?></td>
                    <td><?php echo e($post->category->name); ?></td>
                    <td>
                    <div class="dropdown">
                        <i class="fa fa-ellipsis-v" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/dashboard/post/edit/<?php echo e($post->id); ?>"><i class="fas fa-edit pr-1 text-primary"></i>Edit</a>
                            <a class="dropdown-item" href="/dashboard/post/delete/<?php echo e($post->id); ?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini ?')">
                            <i class="fas fa-trash-alt pr-2 text-danger"></i>Delete</a>
                        </div>
                    </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<!-- Page level plugins -->
<script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/datatables-demo.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\latihan-auth\resources\views/posts/index.blade.php ENDPATH**/ ?>