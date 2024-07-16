@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="book_title">Title</label>
            <input type="text" class="form-control" id="book_title" name="book_title" value="{{ $book->book_title }}" required>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" required>
        </div>
        <div class="form-group">
            <label for="publisher_name">Publisher</label>
            <input type="text" class="form-control" id="publisher_name" name="publisher_name" value="{{ $book->publisher_name }}" required>
        </div>
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $book->isbn }}" required>
        </div>
        <div class="form-group">
            <label for="copyright_year">Year</label>
            <input type="number" class="form-control" id="copyright_year" name="copyright_year" value="{{ $book->copyright_year }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Book</button>
    </form>
</div>
@endsection
