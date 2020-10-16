@extends('layout.masterhome')

@section('content')

<!-- Start Jumbotron -->
 <section class="top-header">
     <div class="jumbotron jumbotron-fluid" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.3) 100%), url({{ asset('assets/img/user/areza-pahlevi-iDfOuU1uDtk-unsplash.jpg') }}) no-repeat center center;">
         <div class="container-full-bg justify-content-center mx-auto text-white">
             <h1 class="display-4" data-aos="fade-down" data-aos-duration="1700" data-aos-delay="300">
                 Cagar Budaya
             </h1>
             <p class="lead" data-aos="fade-left" data-aos-duration="2200" data-aos-delay="700" data-aos-offset="0">
                 Cintai kebudayaan asli Indonesia. Mari kita jelajahi kebudayaan dan cagar budaya di nusantara disini
             </p>
         </div>
         <div class="arrow bounce mx-auto">
             <p class="text-white">Lihat Selengkapnya</p>
             <div id="info"></div>
             <a href="#info">
                 <i class="fa fa-arrow-down"></i>
             </a>
         </div>
     </div>
 </section>
 <!-- End Jumbotron -->

 <!-- Start Info -->
 <section class="info">
     <div class="container">
         <div class="row">
             <div class="col-md-8">
                 <img src="{{ asset('assets/img/user/pexels-dio-hasbi-saniskoro-1009949 3.png') }}" class="img-fluid" alt="" srcset="" />
                 <img src="{{ asset('assets/img/user/pexels-dio-hasbi-saniskoro-1009949 2.png') }}" class="img-fluid" alt="" srcset="" />
                 <img src="{{ asset('assets/img/user/pexels-dio-hasbi-saniskoro-1009949 1.png') }}" class="img-fluid" alt="" srcset="" />
             </div>
             <div class="col-md-4 my-auto">
                 <h4>Apa yang harus di eksplor di Indonesia ?</h4>
                 <p>
                     Disini kalian akan dikenalkan dengan Budaya dan sejarah dari Indonesia. Hal tersebut menambah wawasan kalian dari setiap daerah nya. Dan juga mengenalkan beberapa wisata budaya yang mesti dilestarikan, dijaga dan dirawat yaitu Cagar Budaya Indonesia
                 </p>
             </div>
         </div>
     </div>
 </section>
 <!-- End Info -->

 <!-- Start Description -->
 <section class="description">
     <div class="container">
         <div class="row">
             <div class="col-md-6 my-auto">
                 <h4>Apa itu Cagar Budaya ?</h4>
                 <p>
                     Cagar budaya adalah warisan budaya bersifat kebendaan berupa Benda Cagar Budaya, Bangunan Cagar Budaya, Struktur Cagar Budaya, Situs Cagar Budaya, dan Kawasan Cagar Budaya di darat dan atau di air yang perlu dilestarikan keberadaannya karena memiliki
                     nilai penting bagi sejarah, ilmu pengetahuan, pendidikan, agama, dan atau kebudayaan melalui proses penetapan.
                 </p>
             </div>
             <div class="col-md-6">
                 <img src="{{ asset('assets/img/user/pexels-stijn-dijkstra-2583852.jpg') }}" alt="" srcset="" class="img-fluid" />
             </div>
         </div>
     </div>
 </section>
 <!-- End Description -->

 <!-- Start Map -->
 <section class="map">
     <div class="container">
         <div class="col-md-12 text-center">
             <h4>Mapping</h4>
             <p>
                 Cari destinasi cagar budaya yang menarik dan ingin dikunjungi di map sini
             </p>
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.6973689971724!2d110.20156261479164!3d-7.607873794514214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8cf009a7d697%3A0xdd34334744dc3cb!2sCandi%20Borobudur!5e0!3m2!1sid!2sid!4v1602091456996!5m2!1sid!2sid"
                 width="1092" height="450" frameborder="0" style="border: 0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
         </div>
     </div>
 </section>
 <!-- End Map -->

 <!-- Start Category -->
 <section class="category">
     <div class="container">
         <div class="row">
             <div class="col-md-4 text-white my-auto">
                 <h1>Kategori Eksplor Indonesia</h1>
                 <small>Untuk eksplor lebih lengkap lainnya</small>
                 <br>
                 <a href="" class="btn section-btn btn-sm">
                     Pelajari Selengkapnya
                 </a>
             </div>
             <div class="col-md-4">
                 <a href="" class="detail">
                     <div class="card">
                         <div class="card-body">
                             <h5>- Budaya</h5>
                             <p>
                                 Gaya hidup yang berkembang dalam suatu kelompok atau masyarakat dan diwariskan secara turun temurun
                             </p>
                         </div>
                     </div>
                 </a>
             </div>
             <div class="col-md-4">
                 <a href="" class="detail">
                     <div class="card">
                         <div class="card-body">
                             <h5>- Sejarah</h5>
                             <p>
                                 Suatu peristiwa yang telah terjadi pada masa lalu dan dapat diketahui melalui peninggalan pada masa peristiwa terjadi
                             </p>
                         </div>
                     </div>
                 </a>
             </div>
         </div>
     </div>
 </section>
 <!-- End Category -->

@endsection
