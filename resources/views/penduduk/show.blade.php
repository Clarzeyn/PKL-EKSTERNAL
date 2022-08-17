
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Siswa
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nomor Induk Keluarga</label>
                            <input type="text" class="form-control " name="nik" value="{{ $data->nik }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control " name="nama" value="{{ $data->nama }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control " name="jenis_kelamin" value="{{ $data->jenis_kelamin }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Agama</label>
                            <input type="text" class="form-control " name="agama" value="{{ $data->agama }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="text" class="form-control" name="tgl_lahir" value="{{ $data->tgl_lahir }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" readonly>{{ $data->alamat }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <input type="text" class="form-control " name="status" value="{{ $data->status }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Rt dan Rw</label>
                            <input type="text" class="form-control" name="nama" value="{{ $data->Rts->nama }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('penduduk.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection