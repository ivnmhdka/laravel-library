@extends('layouts.app')
@section('title', 'Ivan | Books Data')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Form Tambah</strong> Buku
                        </div>
                        <div class="card-body card-block">
                            <form action="{{ route('books.store')}}" enctype="multipart/form-data" method="post" class="">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="inputjudul" class=" form-control-label">Judul</label>
                                    <input type="text" name="judul" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputpengarang" class=" form-control-label">Pengarang</label>
                                    <input type="text" name="pengarang" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputpenerbit" class=" form-control-label">Penerbit</label>
                                    <input name="penerbit" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputthnterbit">Tahun Terbit</label>
                                    <input type="date" class="form-control" id="thn_terbit" name="thn_terbit">
                                </div>
                                <div class="form-group">
                                    <label for="inputjmlhalaman" class=" form-control-label">Jumlah Halaman</label>
                                    <input name="jml_halaman" class="form-control">
                                </div>
                                {{-- <div class="form-group">
                                    <label for="inputgambar" class=" form-control-label">Gambar</label><br>
                                    <input type="file" name="gambar">
                                </div> --}}
                                <div class="mb-3">
                                    <label for="inputgambar" class="form-label">Pilih Gambar</label>
                                    <input class="form-control" type="file" name="gambar" multiple>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Create
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
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