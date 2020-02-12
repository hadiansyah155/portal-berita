@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Siswa</div>
                <div class="card-body">
                        <div class="form-group">
                            <label for="">Masukkan Nama Siswa</label>
                            <input type="text" class="form-control" value="{{$siswa->nama}}" name="nama" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Masukkan Kelas</label>
                            <input type="text" class="form-control" value="{{$siswa->kelas}}" name="kelas" readonly>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
