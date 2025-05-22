@extends('layout.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="card-title">
                            Form Edit Data
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
                            @csrf
                            @method('PUT') <!-- Wajib untuk method update -->

                            <div class="form-group">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ old('nama', $pegawai->nama) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="pangkat" class="form-label">Pangkat</label>
                                <select name="pangkat" id="pangkat" class="form-control">
                                    <option value="juru" {{ $pegawai->pangkat == 'juru' ? 'selected' : '' }}>Juru</option>
                                    <option value="pengatur" {{ $pegawai->pangkat == 'pengatur' ? 'selected' : '' }}>
                                        Pengatur</option>
                                    <option value="penata" {{ $pegawai->pangkat == 'penata' ? 'selected' : '' }}>Penata
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10">{{ old('alamat', $pegawai->alamat) }}</textarea>
                            </div>

                            <button class="btn btn-success btn-sm mt-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
