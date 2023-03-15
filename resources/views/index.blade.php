@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row g-3 align-items-center ">
        <div class="col-auto">
            <form class="form-inline" action="{{ route('books.tampil') }}" method="GET ">
                <div class="form-group mb-2">
                    <input type="search" name="search" class="form-control" placeholder="Search" aria-describedby="password">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach($books as $book)
        <div class="col-md-3 mt-3 mb-3">

            <div class="card">
                <a href="/books/show/{{ $book->id }}">
                    <img src="{{ asset('uploads/' . $book->gambar) }}" height="400" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ $book->judul}}</h5>
                    <a href="/books/show/{{ $book->id }}" class="btn btn-success">Detail</a>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</div>
{{-- <div class="footer p-2 mt-3" style="background-color: grey">
        <div class="container">
            <div class="row">
                <div class="coll-md-4">
                    Footer kiri
                </div>
                <div class="coll-md-4">
                    Footer tengah
                </div>
                <div class="coll-md-4">
                    Footer kanan
                </div>
            </div>
        </div>
    </div> --}}
@endsection