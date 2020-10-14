{!! Form::model($model, [
    'route' => $model->exists ? ['culture.update', $model->id] : 'culture.store',
    'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

    <div class="form-group">
        <label for="" class="control-label">Nama</label>
        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">Alamat</label>
        {!! Form::text('alamat', null, ['class' => 'form-control', 'id' => 'alamat']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">Latitude</label>
        {!! Form::text('latitude', null, ['class' => 'form-control', 'id' => 'latitude']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">Longitude</label>
        {!! Form::text('longitude', null, ['class' => 'form-control', 'id' => 'longitude']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">Deskripsi</label>
        {!! Form::text('deskripsi', null, ['class' => 'form-control', 'id' => 'deskripsi']) !!}
    </div>


{!! Form::close() !!}
