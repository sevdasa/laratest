<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
//            $table->id();
//            $table->string('title');
//            $table->string('content');
//            $table->unsignedBigInteger('author');
//            $table->enum('status',['ok','deleted']);
//            $table->foreign('author')->references('id')->on('users')->onDelete('cascade');
//            $table->timestamps();
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->enum('status',['verified','deleted'])->nullable()->default(null);

            $table->unsignedBigInteger('author');
//          $table->foreignId('author')->constrained('users');
            $table->foreign('author')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
