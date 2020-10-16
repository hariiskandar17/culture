{!! Form::model($model, [
    'route' => $model->exists ? ['icon.update', $model->id] : 'icon.store',
    'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

    <div class="form-group">
        <label for="" class="control-label">Nama</label>
        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
    </div>
    <div class="form-group">
        <label for="" class="control-label">Icon</label>
        {!! Form::text('icon', null, ['class' => 'form-control', 'id' => 'icon']) !!}
    </div>
{!! Form::close() !!}
