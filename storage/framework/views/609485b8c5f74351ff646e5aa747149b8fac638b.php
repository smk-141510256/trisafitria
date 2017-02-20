<?php $__env->startSection('content'); ?>
	
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">Tambah Data Lembur Pegawai</div>
		<div class="panel-body">
			<form method="POST" action="<?php echo e(url('lemburpegawai')); ?>">
			 	<?php echo e(csrf_field()); ?>


			 	<div class="form-group">
					<label>Id Kode Lembur</label>	
					<div class="controls">
				  <select class="form-control" name="kode_lembur_id">
                                <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <option value="<?php echo e($data->id); ?>"><?php echo e($data->kode_lembur); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
				</div>
      
                    <div class="control-group">
                        <label class="control-label">Id Pegawai</label>
                        <div class="controls">
                            <select class="span11" name="id_pegawai">
                                <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <option value="<?php echo e($data->id); ?>"><?php echo e($data->User->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Jumlah Jam</label>
                        <input class="form-control" type="text" name="jumlah_jam" placeholder="Masukkan Jumlah Jam">
                           
                        </div>
                 

				<div class="form-group">
					<input class="btn btn-success" type="submit" name="submit" value="Tambah">
				</div>
			</form>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>