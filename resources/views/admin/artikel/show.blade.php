<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Slug</th>
        <th>Status</th>
    </tr>
    <tr>
        <td>{{ $model->id }}</td>
        <td>{{ $model->title }}</td>
        <td>{{ $model->slug }}</td>
        <td>{{ $model->status }}</td>
    </tr>
</table>
