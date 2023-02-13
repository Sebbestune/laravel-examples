<h1>All users</h1>

@foreach ($users as $user)
    <p>This is user {{ $user->name }} and has role {{ $user->role == 0 ? "admin" : "user"}}</p>
@endforeach