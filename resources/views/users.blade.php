
@foreach ($user as $id => $u)
    <span>{{ $u['name'] }}</span><a href="{{ route('single-user',$id) }}">Profile</a><br>
@endforeach