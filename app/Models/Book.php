<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'book';

    protected $primaryKey = 'book_id';

    protected $fillable = [
        'book_title',
        'category_id',
        'author',
        'book_pub',
        'publisher_name',
        'isbn',
        'copyright_year',
        'date_receive',
        'date_added',
        'book_copies',
        'status',
        'no_rak'
    ];
}
