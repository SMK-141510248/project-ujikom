<?php $__env->startSection('content'); ?>
 <h1><center>Lembur Pegawai</h1></center>

    <form class="form-horizontal">
        <div class="form-group">
            <label for="Kode_lembur" class="col-sm-2 control-label">Kode Lembur</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Kode_lembur" placeholder="<?php echo e($lembur_pegawais->kategori_lembur->Kode_lembur); ?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="Nip" class="col-sm-2 control-label">Kode Pegawai</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Nip" placeholder="<?php echo e($lembur_pegawais->Pegawai->Nip); ?>" readonly>
            </div>
        </div>
       
         <div class="form-group">
            <label for="user_id" class="col-sm-2 control-label">Nama Pegawai</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="user_id" placeholder="<?php echo e($pegawais->User->name); ?>" readonly>
            </div>
        </div>
         
         <div class="form-group">
            <label for="Jumlah_jam" class="col-sm-2 control-label">Jumlah Jam</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="Jumlah_jam" placeholder="<?php echo e($lembur_pegawais->Jumlah_jam); ?>" readonly>
            </div>
        </div>
        
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <a href="<?php echo e(url('lembur_pegawais')); ?>" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>