<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperTypeWrappingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper_type_wrapping', function (Blueprint $table) {
            $table->bigInteger('size_id');
            $table->bigInteger('paper_type_id');
            $table->bigInteger('wrapping_id');
            $table->unique(['paper_type_id', 'wrapping_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paper_type_wrapping');
    }
}
