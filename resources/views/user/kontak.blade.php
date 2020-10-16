@extends('layout.master')

@section('content')

<!-- Form Contact -->

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-center">
                    Kontak
                </h1>
                <p class="text-center">
                    Silahkan hubungi kami untuk keperluan privasi
                </p>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Judul</label>
                        <input type="text" class="form-control" id="subject">
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary section-btn btn-block">Kirim</button>
                </form>
            </div>
            <div class="col-md-4">
                <div class="panel rounded shadow">
                    <div class="panel-body px-3 py-1">
                        <div class="inner-all">
                            <ul class="list-unstyled border-0">
                                <li>
                                    <h5 class="my-1 text-center">
                                        Hubungi Kami
                                    </h5>
                                </li>
                                <li>
                                    <div class="list-group mt-3">
                                        <a href="#" class="list-group-item list-group-item-action border-0">
                                            <i class="fa fa-envelope pull-left mt-1 mr-3"></i> <small>culture@gmail.com</small>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action border-0">
                                            <i class="fa fa-phone pull-left mt-1 mr-4"></i> <small>0898-2831-4928</small>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action border-0">
                                            <i class="fa fa-map-pin pull-left mt-1 mr-4"></i> <small>SMK Negeri 1 Ciamis</small>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- End Form Contact -->

@endsection
