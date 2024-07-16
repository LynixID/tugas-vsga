<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('book', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('book_title', 200)->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('author', 100)->nullable();
            $table->string('book_pub', 100)->nullable();
            $table->string('publisher_name', 100)->nullable();
            $table->string('isbn', 20)->nullable();
            $table->year('copyright_year')->nullable();
            $table->date('date_receive')->nullable();
            $table->date('date_added')->nullable();
            $table->integer('book_copies')->nullable();
            $table->string('status', 20)->nullable();
            $table->string('no_rak', 20)->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('category_id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};
