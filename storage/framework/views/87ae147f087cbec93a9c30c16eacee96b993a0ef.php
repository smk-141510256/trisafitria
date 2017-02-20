<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Jabatan</div>
        <div class="panel-body">
        <a class="btn btn-success" href="<?php echo e(url('jabatan/create')); ?>">Tambah Data</a><br><br>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-primary">
                        <th>No</th>
                        <th>Kode Jabatan</th>
                        <th>Nama Jabatan</th>
                        <th>Besaran Uang</th>
                        <th colspan="3"><center>Opsi</th>
                    </tr>
                </thead>

                <?php $id=1; ?>
                <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tbody>
                    <tr> 
                        <td> <?php echo e($id++); ?> </td>
                        <td> <?php echo e($data->kode_jabatan); ?> </td>
                        <td> <?php echo e($data->nama_jabatan); ?></td>
                        <td> Rp.<?php echo e($data->besaran_uang); ?></td>
                        <td><a href="<?php echo e(route('jabatan.edit',$data->id)); ?>" class="btn btn-warning">Edit</a></td>
                        <td><a data-toggle="modals" href="#delete<?php echo e($data->id); ?>" class="btn btn-danger" title="Delete" data-toggle="tooltip">Hapus</a>
                        <?php echo $__env->make('modals.delet',['url'=>route('jabatan.destroy',$data->id),'model'=>$data], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></td>
          
                    
                    </tr>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>