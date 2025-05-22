@extends('layout.index')
@section('content')
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
                            <form action="{{ route('pegawai.index') }}" method="GET" class="mb-3 d-flex">
                                <input type="text" name="search" class="form-control me-2"
                                    placeholder="Cari Nama / Pangkat / Alamat" value="{{ request('search') }}">
                                <button type="submit" class="btn btn-outline-primary">Cari</button>
                            </form>


                            <a href="{{ route('pegawai.create') }}" class="btn btn-success">Tambah Data</a>
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

                                @forelse ($pegawai as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->pangkat }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td class="d-flex gap-1">
                                            <a href="{{ route('pegawai.edit', $data->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('pegawai.destroy', $data->id) }}" method="POST"
                                                onsubmit="return confirm('Apakah Anda Yakin Ingin Hapus Data Ini ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Tidak ada data ditemukan.</td>
                                    </tr>
                                @endforelse
                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
