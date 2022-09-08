<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration
{
    public function up()
    {
        Schema::create('failed', function (Blueprint $table) {
            $table->string('value');
        });
    }

    public function down()
    {
        Schema::dropIfExists('failed');
    }
};
