@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Tabungan</div>
                <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Siswa</label>
                            <input type="text" class="form-control" value="{{$tabungan->siswa->nama}}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah Uang</label>
                            <input type="text" class="form-control" value="{{$tabungan->jumlah_uang}}" name="jumlah_uang" readonly>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
