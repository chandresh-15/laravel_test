<form action="{{ route('employee.update',[$employees->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $employees->name }}"><br><br>
    <textarea name="description">{{ $employees->description }}</textarea><br><br>
    <input type="submit" name="submit" value="submit">
</form>
