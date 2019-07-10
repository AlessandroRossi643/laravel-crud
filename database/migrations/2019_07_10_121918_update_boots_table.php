<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBootsTable extends Migration
{

    public function up()
    {
        Schema::table('boots', function (Blueprint $table) {
          $table->dropColumn('price');
        });
    }

    public function down()
    {
        Schema::table('boots', function (Blueprint $table) {
          $table->float('price',6,2);
        });
    }
}
