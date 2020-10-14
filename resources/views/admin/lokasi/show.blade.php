<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Alamat</th>
        <th>Latitude</th>
        <th>Longitude</th>
    </tr>
    <tr>
        <td>{{ $model->id }}</td>
        <td>{{ $model->name }}</td>
        <td>{{ $model->alamat }}</td>
        <td>{{ $model->latitude }}</td>
        <td>{{ $model->longitude }}</td>
    </tr>
</table>
