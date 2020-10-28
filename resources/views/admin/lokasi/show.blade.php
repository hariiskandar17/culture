<form class="form-horizontal">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Email" value="{{ $model->name }}">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Email" value="{{ $model->alamat }}">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Provinsi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Email"
                value="{{ Prov($model->provinsi) }}">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Kabupaten</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Email"
                value="{{ Kab($model->provinsi,$model->kabupaten) }}">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Kecamatan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Email"
                value="{{ Kec($model->kabupaten,$model->kecamatan) }}">
        </div>
    </div>
    <div class="form-group text-center">
        <img src="{{ asset('deskripsi/'.$deskripsi->gambar)}}" alt="..." class="img-thumbnail">
    </div>
</form>