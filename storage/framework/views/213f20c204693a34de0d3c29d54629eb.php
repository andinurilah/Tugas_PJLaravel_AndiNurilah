
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pegawai</h1>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Data Pegawai
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <form action="<?php echo e(route('pegawai.index')); ?>" method="GET" class="mb-3 d-flex">
                                <input type="text" name="search" class="form-control me-2"
                                    placeholder="Cari Nama / Pangkat / Alamat" value="<?php echo e(request('search')); ?>">
                                <button type="submit" class="btn btn-outline-primary">Cari</button>
                            </form>


                            <a href="<?php echo e(route('pegawai.create')); ?>" class="btn btn-success">Tambah Data</a>
                        </div>
                        <table id="pegawaiTable" class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Pangkat</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $__empty_1 = true; $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($data->nama); ?></td>
                                        <td><?php echo e($data->pangkat); ?></td>
                                        <td><?php echo e($data->alamat); ?></td>
                                        <td class="d-flex gap-1">
                                            <a href="<?php echo e(route('pegawai.edit', $data->id)); ?>"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="<?php echo e(route('pegawai.destroy', $data->id)); ?>" method="POST"
                                                onsubmit="return confirm('Apakah Anda Yakin Ingin Hapus Data Ini ?')">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="5" class="text-center">Tidak ada data ditemukan.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\LARAVEL9\toko\resources\views/pegawai/index.blade.php ENDPATH**/ ?>