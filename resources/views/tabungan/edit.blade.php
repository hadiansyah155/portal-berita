@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Dashboard
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tabungan.update', $tabungan->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Pilih Nama Siswa</label>
                                <select name="siswa_id" class="form-control">
                                    @foreach ($siswa as $item)
                                        <option value=" {{$item->id}} "
                                            {{ $item->id == $tabungan->siswa_id ? 'selected' : '' }}>
                                            {{ $item->nama }} - {{ $item->kelas }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Masukkan Jumlah Uang</label>
                                <input type="number" name="jumlah_uang" value="{{ $tabungan->jumlah_uang }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <button class="btn btn-warning" type="reset">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
