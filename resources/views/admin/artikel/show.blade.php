<table class="table table-hover">

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="" class="control-label">Title</label>
        <input type="text" class="form-control" value="{{ $model->title }}">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="" class="control-label">Status</label>
        <input type="text" class="form-control" value="{{ $model->status }}">
      </div>
    </div>
    <div class="col-md-12 text-center">
      <label for="" class="control-label">Deskripsi</label>
      <!-- {!! Form::textarea('body', $model->body, null, ['class' => 'form-control', 'id' => 'body']) !!} -->
      <textarea  rows="8" value="" class="form-control" id="body">{{ $model->body }}</textarea>
    </div>
  </div>
</table>
