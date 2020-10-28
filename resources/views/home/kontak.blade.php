@extends('home.layout.master')

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
                   <form action="{{ route('send-email')}}" method="POST">
                    @csrf
                       <div class="form-row">
                           <div class="form-group col-md-6">
                               <label for="name">Nama</label>
                               <input required type="text" name="nama" class="form-control" id="name">
                           </div>
                           <div class="form-group col-md-6">
                               <label for="inputEmail4">Email</label>
                               <input required type="email" name="email" class="form-control" id="inputEmail4">
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="subject">Judul</label>
                           <input required type="text" name="judul" class="form-control" id="subject">
                       </div>
                       <div class="form-group">
                           <label for="pesan">Pesan</label>
                           <textarea required class="form-control" name="pesan" id="pesan" rows="5"></textarea>
                       </div>
                      <button type="submit" class="btn btn-primary section-btn btn-block">Kirim</button>
                   </form>
               </div>
               <div class="col-md-4">
                   <div class="panel rounded shadow">
                       <div class="panel-body">
                           <div class="inner-all">
                               <ul class="list-unstyled border-0">
                                   <li>
                                       <h5 class="my-1 text-center">
                                           Hubungi Kami
                                       </h5>
                                   </li>
                                   <li>
                                       <table id="info" class="table-responsive">
                                           <tr>
                                               <td>
                                                   <i class="fa fa-envelope pull-left mr-4"></i>
                                               </td>
                                               <td>
                                                   <small>culture@gmail.com</small>
                                               </td>
                                           </tr>
                                           <tr>
                                               <td>
                                                   <i class="fa fa-phone pull-left mr-4"></i>
                                               </td>
                                               <td>
                                                   <small>0898-2831-4928</small>
                                               </td>
                                           </tr>
                                           <tr>
                                               <td>
                                                   <i class="fa fa-map-pin pull-left mr-4"></i>
                                               </td>
                                               <td>
                                                   <small>SMK Negeri 1 Ciamis</small>
                                               </td>
                                           </tr>
                                       </table>
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
