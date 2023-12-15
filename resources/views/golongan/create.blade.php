@extends('layouts.app')

@section('content')
    <div class="card col-8 m-auto mt-3 shadow-sm p-3 mb-5 bg-body-tertiary rounded">
        <div class="header text-center">
            <h4>Input Data Golongan</h4>
            <hr>
        </div>
        <div class="card-body">
            <form class="row g-3" action="{{ route('gol_store') }}" method="POST">
                @csrf
                <div class="col-12">
                    <label for="gol_kode" class="form-label">Kode Golongan</label>
                    <input type="text" class="form-control" id="gol_kode" name="gol_kode" required>
                    {{-- @error('gol_kode')
                        <small>{{ $message }}</small>
                    @enderror --}}
                </div>
                <div class="col-12">
                    <label for="gol_nama" class="form-label">Nama Golongan</label>
                    <input type="text" class="form-control" id="gol_nama" name="gol_nama" required>
                    {{-- @error('gol_nama')
                        <small>{{ $message }}</small>
                    @enderror --}}
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
