@extends('layouts.app')
@section('title', 'Ivan | Book Data')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Data Buku</h2>
                    </div>
                </div>
            </div>

            <div class="row g-3 m-t-10">
                <div class="col-auto">
                    <form class="form-inline" action="{{ route('books.index') }}" method="GET ">
                        <div class="form-group mb-2">
                            <input type="search" name="search" class="form-control" placeholder="Search" aria-describedby="password">
                        </div>
                    </form>
                </div>
                <div class="row justify-content-md-end">
                    <div class="col-md-auto">
                        <a href="{{ route('export') }}">
                            <button class="btn btn-success">Download Data Excel</button>
                        </a>
                    </div>
                    <div class="col-md-auto">
                        <a href="{{ route('exportpdf') }}">
                            <button class="btn btn-danger">Download Data PDF</button>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row m-t-20">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Pengarang</th>
                                    <th>Gambar</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>Jumlah Halaman</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $index => $book)
                                <tr>
                                    <td>{{ $index + 1}}</td>
                                    <td>{{ $book->judul}}</td>
                                    <td>{{ $book->pengarang}}</td>
                                    {{-- <td>{{ $book->gambar}}</td> --}}
                                    <td><img src="{{ asset('uploads/' . $book->gambar) }}" width="80"></td>
                                    <td>{{ $book->penerbit}}</td>
                                    <td>{{ $book->thn_terbit}}</td>
                                    <td>{{ $book->jml_halaman}}</td>
                                    <td>
                                        <a href="{{ route('books.edit', $book->id)}}"><i class="fas fa-edit"></i></a>
                                        |
                                        <a href="{{ route('books.destroy', $book->id)}}"><i class="fas fa-trash" style="color:red;"></i></a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $books->links() }}
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection