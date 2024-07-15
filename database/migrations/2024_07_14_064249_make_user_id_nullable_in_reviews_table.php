<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {
<<<<<<< HEAD
            $table->unsignedBigInteger('user_id')->nullable()->change();
=======
            $table->unsignedBigInteger('id')->nullable()->change();
>>>>>>> d088d7b78a4f170b1d89e47c50295d2c22fc6040
        });
    }
    
    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
<<<<<<< HEAD
            $table->unsignedBigInteger('user_id')->nullable(false)->change();
=======
            $table->unsignedBigInteger('id')->nullable(false)->change();
>>>>>>> d088d7b78a4f170b1d89e47c50295d2c22fc6040
        });
    }
    
};
