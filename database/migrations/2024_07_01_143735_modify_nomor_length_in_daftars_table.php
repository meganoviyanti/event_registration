<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyNomorLengthInDaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('daftars', function (Blueprint $table) {
            $table->string('nomor', 50)->change(); // Adjust the length as needed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('daftars', function (Blueprint $table) {
            $table->string('nomor', 20)->change(); // Revert to the original length
        });
    }
}
