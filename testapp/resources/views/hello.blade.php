


<p>Hello {{ $name }}</p>

The users are:

@foreach ($users as $user)
    <p>User {{$user->id}}: {{ $user->name }} -- {{$user->email}}</p>
@endforeach

The books are: 

@foreach ($books as $book)
    <p>User {{$book->id}}: {{ $book->title }} -- {{$book->cost}}</p>
@endforeach