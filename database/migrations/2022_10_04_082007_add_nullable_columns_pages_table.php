<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNullableColumnsPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->text('description')->nullable()->change();
            $table->integer('field_group')->nullable()->change();
            $table->string('template')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->text('description')->nullable(false)->change();
            $table->integer('field_group')->nullable(false)->change();
            $table->string('template')->nullable(false)->change();
        });
    }
}
