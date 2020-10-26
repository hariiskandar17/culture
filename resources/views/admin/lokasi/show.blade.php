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
        <input type="text" class="form-control" id="inputEmail3" placeholder="Email" value="{{ Prov($model->provinsi) }}">
      </div>
  </div>
  <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3" placeholder="Email" value="{{ $model->alamat }}">
      </div>
  </div>
  <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3" placeholder="Email" value="{{ $model->alamat }}">
      </div>
  </div>
  <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3" placeholder="Email" value="{{ $model->latitude }}">
      </div>
  </div>
  <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3" placeholder="Email" value="{{ $model->longitude }}">
      </div>
  </div>
</form>
