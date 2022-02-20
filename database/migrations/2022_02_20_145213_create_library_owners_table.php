<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibraryOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library_owners', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->dateTime('start')->nullable();
            $table->dateTime('end')->nullable();
            $table->boolean('available')->default(false);
            $table->integer('rating')->default(0);
            $table->text('extra_options')->nullable();
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
        Schema::dropIfExists('library_owners');
    }
}
