<?php $__env->startSection('content'); ?>
<!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                                    <a class="breadcrumb-item" href="admin/tournament/list">Giải đấu</a>
                                    <span class="breadcrumb-item active">Danh sách</span>
                                </nav>
                            </div>
                             <div class="add-tittle"><h2>DANH SÁCH GIẢI ĐẤU</h2></div>
                            <div class="add-items">
                                <a href="admin/tournament/add">+ Thêm mới</a>
                            </div>
                        </div>  
                            
                        <div class="card">
                            <div class="card-body">
                                <div class="table-overflow">
                                    <?php if(session('notifi')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('notifi')); ?>

                        </div>
                    <?php endif; ?>
                                    <table id="dt-opt" class="table table-hover table-xl fix-table">
                                            
                                        <thead>
                                            <tr>
                                                <th>Giải đấu</th>
                                                <th>Năm</th>
                                                <th class="text-center">Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $tournament; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($key -> name); ?></td>
                                                <td><?php echo e($key -> year); ?></td>
                                                <td class="text-center font-size-18">
                                                    <a href="admin/tournament/edit/<?php echo e($key->id); ?>" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                                    <a href="admin/tournament/delete/<?php echo e($key->id); ?>" class="text-gray"><i class="ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        

                <!-- Footer START -->
              <!--   <footer class="content-footer">
                    <div class="footer">
                        <div class="copyright">
                            <span>Copyright © 2018 <b class="text-dark">Theme_Nate</b>. All rights reserved.</span>
                            <span class="go-right">
                                <a href="#" class="text-gray m-r-15">Term &amp; Conditions</a>
                                <a href="#" class="text-gray">Privacy &amp; Policy</a>
                            </span>
                        </div>
                    </div>
                </footer> -->
                <!-- Footer END -->

            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>