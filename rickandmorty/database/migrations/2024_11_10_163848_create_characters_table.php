<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('characters', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Certifique-se de que esta linha existe
        $table->string('species');
        $table->string('image');
        $table->string('url');
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
