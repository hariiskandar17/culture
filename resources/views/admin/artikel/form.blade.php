{!! Form::model($model, [
    'route' => $model->exists ? ['artikel.update', $model->id] : 'artikel.store',
    'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

    <div class="form-group">
        <label for="" class="control-label">Title</label>
        {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">Slug</label>
        {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">status</label>
        {!! Form::text('status', null, ['class' => 'form-control', 'id' => 'status']) !!}
    </div>

{!! Form::close() !!}
