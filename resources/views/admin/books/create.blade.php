@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Book</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="book_title">Title</label>
            <input type="text" class="form-control" id="book_title" name="book_title" required>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <div class="form-group">
            <label for="publisher_name">Publisher</label>
            <input type="text" class="form-control" id="publisher_name" name="publisher_name" required>
        </div>
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" required>
        </div>
        <div class="form-group">
            <label for="copyright_year">Year</label>
            <input type="number" class="form-control" id="copyright_year" name="copyright_year" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Book</button>
    </form>
</div>
@endsection
