<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTableContactus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contactus', function (Blueprint $table) {
            $table->string('name')->nullable($value= false)->after('id');
            $table->string('email')->nullable($value= false)->after('name');
            $table->text('celular')->nullable($value = true)->after('email');
            $table->text('description')->nullable($value = false)->after('celular');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contactus', function (Blueprint $table) {
            //
        });
    }
}
