@extends('layouts.app')

@section('title', 'Data Pegawai')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="fw-bold text-dark">Data Pegawai</h2>
            <a href="{{ url('/pegawai/create') }}" class="btn btn-primary shadow-sm">
                <i class="fas fa-plus"></i> Tambah Pegawai
            </a>
        </div>

        <!-- Tabel Data Pegawai -->
        <div class="card shadow-sm p-3">
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Jenis Kelamin</th>
                            <th>Jabatan</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($pegawai as $index => $pegawai)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $pegawai->nama }}</td>
                                <td>{{ $pegawai->nip }}</td>
                                <td>{{ $pegawai->jenis_kelamin }}</td>
                                <td>{{ $pegawai->jabatan }}</td>
                                <td>{{ $pegawai->email }}</td>
                                <td>{{ $pegawai->telepon }}</td>
                                <td>
                                    <span class="badge {{ $pegawai->status ? 'bg-success' : 'bg-danger' }}">
                                        {{ $pegawai->status ? 'Aktif' : 'Nonaktif' }}
                                    </span>
                                </td>
                                <td>{{ $pegawai->keterangan ?? '-' }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('pegawai.edit', $pegawai) }}" class="btn btn-warning text-white">
                                            <img src="{{ asset('images/pencil.png') }}" alt="Edit" width="15">
                                        </a>
                                        <a href="#" class="btn btn-danger">
                                            <img src="{{ asset('images/trash-bin.png') }}" alt="Hapus" width="15">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
