<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1px ">
        <tr>
            <td>Name</td>
            <td>Description</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        @foreach ($emp  as $employee)
        <tr>
                <td>{{ $employee->name}}</td>
                <td>{{ $employee->description}}</td>
                <td><button><a href="{{ route('employee.edit', [$employee->id]) }}">edit</a></button></td>
                <form action="{{ route('employee.destroy', [$employee->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                <td><button type="submit" name="submit">Delete</button></td>
                </form>
            </tr>
        @endforeach
    </table>
</body>
</html>
