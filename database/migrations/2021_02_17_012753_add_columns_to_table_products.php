<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('name')->nullable($value= false)->after('id');
            $table->text('description')->nullable($value = false)->after('name');
            $table->integer('value')->nullable($value = false)->after('description');
            $table->integer('quantity')->nullable($value = false)->after('value');            
            $table->string('image')->nullable()->after('quantity');
            $table->enum('status', ['activo','inactivo'])->after('image');
            $table->string('seller')->nullable($value = false)->after('status');
            $table->string('category')->nullable($value = false)->after('seller');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
