<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNimsTable extends Migration
{
    public function up()
{
    Schema::create('nims', function (Blueprint $table) {
        $table->id();
        $table->string('nim')->unique();
        $table->timestamps();
    });
}


    public function down(): void
    {
        Schema::dropIfExists('nims');
    }
}