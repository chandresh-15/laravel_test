<form action="{{ route("employee.store") }}" method="POST">
    @csrf
    <label>Name</label>
    <input type="text" name="name"><br><br>
    <label>Description</label>
    <textarea name="description"></textarea><br>
    <input type="submit" name="submit" value="submit">
</form>
