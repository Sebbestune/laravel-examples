@foreach ($users as $user)
<p>This is user {{ $user->name }}</p>
<ul>
    @foreach ($user->roles as $role)
        <li>Role: {{$role->name}}</li>
    @endforeach
</ul>
@endforeach