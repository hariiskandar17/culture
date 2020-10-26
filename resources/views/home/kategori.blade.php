@extends('home.layout.master')

@section('content')
<!-- Search Bar -->
    <section class="search-bar">
        <h4>
            Cari Cagar Budaya dan Kebudayaan disini
        </h4>
        <p class="text-muted">
            Jelajahi untuk mengetahuinya lebih luas lagi
        </p>
        <br>
        <br>
        <div class="input-group mx-auto">
            <div class="input-group-prepend">
                <div class="input-group-text bg-white" id="btnGroupAddon2"><i class="fa fa-search"></i></div>
            </div>
            <input class="form-control" type="search" id="search" placeholder="Cari tempat">
            <button class="btn section-btn">Cari</button>
        </div>
    </section>
    <!-- End Seach Bar-->

    <!-- Item -->
    <section class="item">
        <div class="container">
            <h5>
                - Berdasarkan Provinsi
            </h5>
            <div class="row">
               @foreach ($provinsi as $prov)
                <div class="col-md-2">
                    <a href="{{route('kategori.show', $prov->id)}}" class="link-detail">
                        <div class="card">
                            <img src="{{asset('assets/img/user/main.jpg')}}" alt="" class="card-img-top">
                            <div class="img__description_layer">
                                <div class="img__description my-auto">
                                    <h5>{{$prov->name}}</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Item -->
    <script type="text/javascript">
      $('#search').autocomplete({
       source:function(request,response){
           let cs = '{{ csrf_token() }}';
           $.ajax({
                   url:'{{ url('/car-sej') }}',
                   method:'post',
                   data:{
                       val:request.term,
                       _token:cs
                   },
                   success:(r => {
                       response(r)
                   })
               })
           },
           select: function (event, ui) {
           // Set selection
               $('#search').val(ui.item.label); // display the selected text
               const regex = /sw/gi;
               const str = '{{ url("/detail", ["id" => "sw"]) }}';
               var link = str.replace(regex, ui.item.ket) ;
               document.location.href = link;
               return false;
           }
       })
    </script>
@endsection
