<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->id();
            // $table->string('titulo');
            $table->text('descripcion');
            $table->date('fecha');
            $table->integer('tiempo');
            $table->unsignedBigInteger('user_id'); // Add user_id column
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('actividads', function (Blueprint $table) {
          // Drop foreign key constraint
          $table->dropForeign(['user_id']);
        });

        Schema::dropIfExists('actividads');

    }
};
