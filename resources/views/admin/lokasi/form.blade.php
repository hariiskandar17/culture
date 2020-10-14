{!! Form::model($model, [
    'route' => $model->exists ? ['lokasi.update', $model->id] : 'lokasi.store',
    'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

    <div class="form-group">
        <label for="" class="control-label">Name</label>
        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">Alamat</label>
        {!! Form::text('alamat', null, ['class' => 'form-control', 'id' => 'alamat']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">Latitude</label>
        {!! Form::number('latitude', null, ['class' => 'form-control', 'id' => 'latitude']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">Longitude</label>
        {!! Form::number('longitude', null, ['class' => 'form-control', 'id' => 'longitude']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">Deskripsi</label>
        {!! Form::textarea('deskripsi', null, ['class' => 'form-control', 'id' => 'deskripsi']) !!}
    </div>

{!! Form::close() !!}
