
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <div class="card mt-5">
                    <div class="card-header">

                        <div class="card-title">
                            Form Tambah Data
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('pegawai.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="Masukan Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="pangkat" class="form-label">Pangkat</label>
                                <select name="pangkat" id="pangkat" class="form-control">
                                    <option value="juru">Juru</option>
                                    <option value="pengatur">Pengatur</option>
                                    <option value="penata">Penata</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10"></textarea>
                            </div>
                            <button class="btn btn-primary btn-sm mt-2">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\LARAVEL9\toko\resources\views/pegawai/create.blade.php ENDPATH**/ ?>