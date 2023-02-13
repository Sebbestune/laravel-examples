<h1>All books</h1>
<p>Listing</p>

<ul>
@forelse ($books as $book)
    <li>{{ $book->title }}</li>
@empty
    <p>No books</p>
@endforelse
</ul>