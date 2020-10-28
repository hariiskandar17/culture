<form action="{{route('mail.store')}}" method="post">
    <div class="form-group">
        @csrf
        <label for="kepada">Kepada</label>
        <input type="tel" name="kepada" id="kepada">
    </div>
    <button type="submit">Gasken</button>
</form>