
<?php $__env->startSection('title','General Setting Manage'); ?>

<?php $__env->startSection('css'); ?>
<style>
    .product-manage-card, .dashboard-panel {
        background: #fff; border-radius: 18px; padding: 24px; box-shadow: 0 12px 35px rgba(0,0,0,0.05);
    }
    .dashboard-panel-title {
        display: flex; justify-content: space-between; align-items: center; gap: 16px; margin-bottom: 20px; flex-wrap: wrap;
    }
    .dashboard-panel-title h3 {
        margin: 0; font-size: 20px; color: #222;
    }
    .dashboard-table {
        width: 100%; border-collapse: collapse; font-size: 14px;
    }
    .dashboard-table th, .dashboard-table td {
        padding: 14px 12px; text-align: left; border-bottom: 1px solid #f0f0f0; vertical-align: middle;
    }
    .dashboard-table thead th {
        background: #fff5f5; color: #555; font-weight: 700;
    }
    .dashboard-table tbody tr:last-child td {
        border-bottom: none;
    }
    .dashboard-table th img, .dashboard-table td img {
        max-width: 60px; border-radius: 8px;
    }
    .dashboard-tag {
        display: inline-flex; align-items: center; background: #e8f5e9; color: #2e7d32; border-radius: 999px; padding: 6px 12px; font-size: 12px;
    }
    .dashboard-tag.inactive {
        background: #fdecea; color: #c00000;
    }
    .custom-btn-list a, .custom-btn-list button {
        width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center; border: 1px solid #c00000; color: #c00000; background: #fff; border-radius: 8px; transition: all .2s ease;
    }
    .custom-btn-list a:hover, .custom-btn-list button:hover {
        background: #c00000; border-color: #c00000; color: #fff;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid" style="padding-top: 50px">
    <div class="row">
        <div class="col-12">
            <div class="dashboard-panel">
                <div class="dashboard-panel-title">
                    <h3>General Setting Manage</h3>
                </div>
                <table class="dashboard-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>White Logo</th>
                            <th>Dark Logo</th>
                            <th>Favicon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $show_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($value->name); ?></td>
                            <td><img src="<?php echo e(asset($value->white_logo)); ?>" alt="" style="max-width: 60px; border-radius: 8px;"></td>
                            <td><img src="<?php echo e(asset($value->dark_logo)); ?>" alt="" style="max-width: 60px; border-radius: 8px;"></td>
                            <td><img src="<?php echo e(asset($value->favicon)); ?>" alt="" style="max-width: 60px; border-radius: 8px;"></td>
                            <td>
                                <div class="custom-btn-list">
                                    <a href="<?php echo e(route('settings.edit', $value->id)); ?>" title="Edit"><i class="fe-edit-1"></i></a>
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



<?php echo $__env->make('backEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\orvionshop3\resources\views/backEnd/settings/index.blade.php ENDPATH**/ ?>