<?php $__env->startSection('content'); ?>
<!-- Page Container START -->
            <div class="page-container">
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Trang chủ</a>
                                    <span class="breadcrumb-item active">Danh sách</span>
                                </nav>
                            </div>
                            <div class="add-tittle"><h2>DANH SÁCH CÂU LẠC BỘ</h2></div>
                            <div class="add-items">
                                <a href="admin/club/add">+ Thêm mới</a>
                            </div>
                        </div>  
                        <?php if(session('notifi')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('notifi')); ?>

                        </div>

                    <?php endif; ?>
                     <div id="rs-blog" class="rs-blog sec-spacer">
            <div class="container">
                <div class="row"> 
                    <?php $__currentLoopData = $club; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 col-sm-12 col-xs-12" style="height: 350px;">
                        <div class="single-blog-slide ">
                            <div class="images fix-images2">
                            <td><img width="80px" height="80px" src="upload/news/<?php echo e($key->logo); ?>"
                                                    <?php echo e($key -> logo); ?>/>
                            </td>                  
                            </div>
                            <div class="blog-details">
                                <h3><a href="admin/club/edit/<?php echo e($key->id); ?>"><?php echo $key->name; ?> </a></h3>
                            </div>
                            <div class="read-moree">
                                    <a href="admin/club/edit/<?php echo e($key->id); ?>">Sửa CLB</a>
                                </div>
                                <div class="read-moree">
                                    <a href="admin/club/delete/<?php echo e($key->id); ?>">Xóa CLB</a>
                                </div>
                        </div> 
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            </div>
         </div>
    </div>
                
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>