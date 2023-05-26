

<?php $__env->startPush('style'); ?>
<link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 py-4">Tambah Category</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
      
   <form action="<?php echo e(route('category.create.store')); ?>" method="post">
           <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" required class="form-control">
            </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
    </div>
</div>

</div>
<!-- Modal -->
<!--<div class="modal fade" id="modal_add_category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Category</h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>-->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<!-- Page level plugins -->
<script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/datatables-demo.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laravel\latihan-auth\resources\views/category/create.blade.php ENDPATH**/ ?>