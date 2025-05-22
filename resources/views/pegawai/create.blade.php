@extends('layout.index')
@section('content')
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
                        <form action="{{ route('pegawai.store') }}" method="POST">
                            @csrf
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
@endsection
