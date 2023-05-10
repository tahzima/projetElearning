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
        Schema::table('sections', function (Blueprint $table) {
            $table->integer('formation_id')->unsigned();
            $table->foreign('formation_id')->references('id')->on('formations');
        });
        Schema::table('inscriptions', function (Blueprint $table) {
            $table->integer('formation_id')->unsigned();
            $table->foreign('formation_id')->references('id')->on('formations');
        });
        Schema::table('commentaires', function (Blueprint $table) {
            $table->integer('formation_id')->unsigned();
            $table->foreign('formation_id')->references('id')->on('formations');
        });
        Schema::table('favoris', function (Blueprint $table) {
            $table->integer('formation_id')->unsigned();
            $table->foreign('formation_id')->references('id')->on('formations');
        });
        Schema::table('likes', function (Blueprint $table) {
            $table->integer('formation_id')->unsigned();
            $table->foreign('formation_id')->references('id')->on('formations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sections', function (Blueprint $table) {
            $table->integer('formation_id')->unsigned();
            $table->foreign('formation_id')->references('id')->on('formations');
        });
        Schema::table('inscriptions', function (Blueprint $table) {
            $table->integer('formation_id')->unsigned();
            $table->foreign('formation_id')->references('id')->on('formations');
        });
        Schema::table('commentaires', function (Blueprint $table) {
            $table->integer('formation_id')->unsigned();
            $table->foreign('formation_id')->references('id')->on('formations');
        });
        Schema::table('favoris', function (Blueprint $table) {
            $table->integer('formation_id')->unsigned();
            $table->foreign('formation_id')->references('id')->on('formations');
        });
        Schema::table('likes', function (Blueprint $table) {
            $table->integer('formation_id')->unsigned();
            $table->foreign('formation_id')->references('id')->on('formations');
        });
    }
};
