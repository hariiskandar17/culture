@extends('home.layout.master')
@section('content')
<section class="detail" id="web">
      <div class="container">
          <p class="title text-muted">
              <i class="fa fa-list"></i> Cagar Budaya
          </p>
          <h1 class="mb-0">
              {{ $judul->name }}
          </h1>
          <small class="text-muted"><i class="fa fa-map-pin"></i> Wonosobo, Jawa Tengah</small>
          <hr>
          <div class="row">
              <div class="col-md-6">
                  <img src="{{ asset('deskripsi/'.$data->gambar) }}" width="540" height="300" class="img-fluid" srcset="" style="object-fit: cover;">
              </div>
              <div class="col-md-6">
                  <p class="text-justify">
                    {!! $data->deskripsi !!}
                  </p>
              </div>
          </div>
      </div>
  </section>
  <!-- End Detail Web -->

  <!-- Detail Media -->
  <section class="detail" id="media">
      <div class="container">
          <div class="col-md-12">
              <p class="text-muted">
                  <i class="fa fa-list"></i> Kategori : Cagar Budaya
              </p>
              <h1 class="mb-0">
                  Gunung Prau
              </h1>
              <small class="text-muted"><i class="fa fa-map-pin"></i> Wonosobo, Jawa Tengah</small>
              <hr>
              <div class="text-center">
                  <img src="{{ asset('deskripsi/'.$data->gambar) }}" width="800" height="300" alt="" srcset="" class="img-fluid" style="object-fit: cover;">

              </div>
              <p class="text-justify">
                  &nbsp;&nbsp;{!! $data->deskripsi !!}
              </p>
          </div>
      </div>
  </section>
  <!-- End Detail Media-->

  <hr>

  <!-- Reply -->
  <section class="reply">
      <div class="container">
          <div class="title mb-3">
              <div class="row">
                  <div class="col pull-left">
                      <h4 class="mb-0">
                          - <i class="fa fa-reply-all"></i> Ulasan
                      </h4>
                      <small class="text-muted mt-0 mb-3">
                          <i class="fa fa-users"></i> : 23 Ulasan
                      </small>
                  </div>
                  <div class="col">
                      <!-- Button Modal -->
                      <a class="btn btn-sm pull-right section-btn" data-toggle="modal" data-target="#exampleModal">
                          <i class="fa fa-plus"></i> Tambah Ulasan
                      </a>
                      <!-- - -->
                  </div>
              </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Ulasan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <div class="container-fluid">
                              <form>
                                  <div class="form-group">
                                      <label for="name">Nama</label>
                                      <input type="text" class="form-control it" id="name">
                                  </div>
                                  <div class="form-group">
                                      <label for="inputEmail4">Email</label>
                                      <input type="email" class="form-control it" id="inputEmail4">
                                  </div>
                                  <div class="form-group">
                                      <label for="pesan">Ulasan</label>
                                      <textarea class="form-control it" id="pesan" rows="5"></textarea>
                                  </div>
                                  <button type="submit" class="btn section-btn btn-block">Kirim</button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- End Modal -->

          <div class="media">
              <img src="main.jpg" class="mr-3" alt="...">
              <div class="media-body">
                  <h5 class="mt-0 font-weight-bold">Udin Suradin</h5>
                  <p>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                  </p>
              </div>
          </div>
          <hr>
          <div class="media">
              <img src="main.jpg" class="mr-3" alt="...">
              <div class="media-body">
                  <h5 class="mt-0 font-weight-bold">Udin Suradin</h5>
                  <p>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                  </p>
              </div>
          </div>
          <div class="look text-center mt-4">
              <a href="" class="mt-3 mb-4 text-decoration-none">
                  <p style="font-size: 14px;">
                      Lihat semua ulasan(6)
                  </p>
              </a>
          </div>
      </div>
  </section>
  @endsection
