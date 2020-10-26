@extends('home.layout.master')

@section('content')
<!-- Detail Category -->

<section class="detail-category">

     <div class="container">
         <h2 class="mb-0">- Provinsi Aceh</h2>
         <small class="text-muted mt-0 mb-3">
             <i class="fa fa-map-marker"></i> : 23 Tempat
         </small>
         <div class="row">
           <?php foreach ($lokasi as $des): ?>
             <div class="col-md-6">
               <div class="media shadow">
                 <?php foreach (Bisa($des->id) as $isi): ?>
                   <img src="{{asset('deskripsi/'.$isi->gambar)}}" class="align-self-start mr-3" alt="...">
                   <div class="media-body">
                       <h5 class="mt-0 mb-0">{{$des->name}}</h5>
                       <small class="text-muted mt-0">
                           <i class="fa fa-map-pin"></i> {{ Kec($des->kabupaten,$des->kecamatan) }}
                       </small>
                       <span class="truncate mt-2">
                           {!! $isi->deskripsi !!}
                       </span>
                     <?php endforeach; ?>

                       <a href="{{route('detail',$des->id)}}" class="mt-0 text-decoration-none pull-right carry">
                           <p>
                               <i class="fa fa-arrow-right"></i> Selengkapnya
                           </p>
                       </a>
                   </div>
               </div>
             </div>

           <?php endforeach; ?>
         </div>
     </div>
 </section>
    <!-- End Detail Category -->
  @endsection
