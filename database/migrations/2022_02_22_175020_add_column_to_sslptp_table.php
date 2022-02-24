<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToSslptpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('side_size_layouts_paper_type_wrapping', function (Blueprint $table) {
            $table->double('price_black_white');
            $table->double('price_color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('side_size_layouts_paper_type_wrapping', function (Blueprint $table) {
            $table->dropColumn(['price_black_white','price_color']);
        });
    }
}
