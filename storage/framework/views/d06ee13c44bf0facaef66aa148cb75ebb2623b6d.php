<?php $__env->startSection('content'); ?>
            <div class="page-container">
                <div class="main-content">
                    <div class="container-fluid">
                    <div class="page-header">
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Trang chủ</a>
                                    <a class="breadcrumb-item" href="admin/news/list">Tin tức</a>
                                    <span class="breadcrumb-item active">Danh sách</span>
                                </nav>
                            </div>
                            <div class="add-tittle"><h2>BẢNG XẾP HẠNG</h2></div>
                            <div class="add-items">
                                <a href="admin/rank/add">+ Thêm mới</a>
                            </div>
                        </div>  
                        <?php if(session('notifi')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('notifi')); ?>

                        </div>
                        <?php endif; ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-overflow">
                                    <table id="dt-opt" class="table table-hover table-xl fix-table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>CLub</th>
                                                <th>Match</th>
                                                <th>W</th>
                                                <th>L</th>
                                                <th>D</th>
                                                <th>GF</th>
                                                <th>GA</th>
                                                <th>GD</th>
                                                <th>Point</th>
                                               <th class="text-center">Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $rank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($key -> id); ?></td>
                                                <td><?php echo e($key ->clubs->name); ?></td>
                                                <td><?php echo e($key -> number_match); ?></td>
                                                <td><?php echo e($key -> won); ?></td>
                                                <td><?php echo e($key -> draw); ?></td>
                                                <td><?php echo e($key -> lost); ?></td>
                                                <td><?php echo e($key -> goals_for); ?></td>
                                                <td><?php echo e($key -> goals_against); ?></td>
                                                <td><?php echo e($key -> goals_difference); ?></td>
                                                <td><?php echo e($key -> point); ?></td>
                                                <td class="text-center font-size-18">
                                                    <a href="admin/rank/edit/<?php echo e($key->id); ?>" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                                    <a href="admin/rank/delete/<?php echo e($key->id); ?>" class="text-gray"><i class="ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>