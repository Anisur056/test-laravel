<h1>This is header page</h1>

@forelse ($fruit_names as $key => $value)
    <p> {{ $key }} -fruid is- {{ $value }} </p>
@empty
    <p>No value found.</p>    
@endforelse