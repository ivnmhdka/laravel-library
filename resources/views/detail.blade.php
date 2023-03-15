@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-4 mt-3 mb-3">
            <img src="{{ asset('uploads/' . $books->gambar) }}" width="400" class="card-img-top" alt="...">
        </div>
        <div class="col-md-8 mt-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $books->judul }}</h5>
                    <h6 class="card-subtitle mb-2">{{ $books->pengarang }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Detail :</h6>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Penerbit : {{ $books->penerbit }}</li>
                        <li class="list-group-item">Tahun Terbit : {{ $books->thn_terbit }}</li>
                        <li class="list-group-item">Jumlah Halaman : {{ $books->jml_halaman }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection