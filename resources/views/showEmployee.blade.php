@foreach ($employees as $e)
Name: {{ $e->name }}<br>
Description: {{ $e->description }}<br>
@endforeach

