<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTableSellersN extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sellers', function (Blueprint $table) {
            $table->string('name')->nullable($value= false)->after('id');
            $table->text('direction')->nullable($value = false)->after('name');
            $table->enum('status', ['activo','inactivo'])->after('direction');
            $table->integer('mobile')->nullable()->after('status');
            $table->enum('sex', ['masculino','femenino'])->after('mobile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sellers', function (Blueprint $table) {
            //
        });
    }
}
