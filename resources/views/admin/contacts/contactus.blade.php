@extends('layouts.app')
@section('title', 'Ivan | Data Contacts')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Contacts Us</h2>
                    </div>
                </div>
            </div>

            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <form method="POST" action="{{route('contacts.store')}}">
                        {{csrf_field()}}
                        <div class="form-floating mb-3">
                            <label for="inputnama">Nama</label>
                            <input type="text" class="form-control" id="inputname" aria-describedby="Name" name="nama">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="inputemail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputemail" aria-describedby="Email" name="email">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="floatingTextarea2">Pesan</label>
                            <textarea class="form-control" placeholder="Tinggalkan pesan disini" id="floatingTextarea2" style="height: 100px" name="pesan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
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