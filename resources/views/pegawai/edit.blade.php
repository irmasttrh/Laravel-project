@extends('layouts.app')

@section('title', 'Edit Pegawai')

@section('content')
    <div class="container">
        <h2 class="fw-bold text-dark">Edit Pegawai</h2>

        <form action="{{ url('/pegawai/' . $pegawai->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="{{ $pegawai->nama }}" required>
            </div>

            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control" name="nip" value="{{ $pegawai->nip }}" required>
            </div>

            <div class="mb-3">
                <label for="jabatan" class="form-label fw-semibold">Jabatan</label>
                <input type="text" class="form-control shadow-sm" id="jabatan" name="jabatan"
                    placeholder="Masukkan Jabatan" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" class="form-control shadow-sm" id="email" name="email"
                    placeholder="Masukkan Email" required>
            </div>

            <div class="mb-3">
                <label for="telepon" class="form-label fw-semibold">Telepon</label>
                <input type="text" class="form-control shadow-sm" id="telepon" name="telepon"
                    placeholder="Masukkan Nomor Telepon" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Status</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="aktif" value="1" required>
                    <label class="form-check-label" for="aktif">Aktif</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="tidak" value="0" required>
                    <label class="form-check-label" for="tidak">Tidak Aktif</label>
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
