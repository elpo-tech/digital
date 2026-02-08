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
        Schema::create('gadgets', function (Blueprint $table) {
            $table->id();
            $table->string('fname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('serial')->nullable();
            $table->string('color')->nullable();
            $table->string('pro')->nullable();
            $table->string('ram')->nullable();
            $table->string('tsto')->nullable();
            $table->string('sto')->nullable();
            $table->string('os')->nullable();
            $table->string('screen')->nullable();
            $table->string('keyb')->nullable();
            $table->string('touch')->nullable();
            $table->string('port')->nullable();
            $table->longText('cdes')->nullable();
            $table->longText('access')->nullable();
            $table->longText('shw')->nullable();
            $table->longText('ssw')->nullable();
            $table->longText('sdes')->nullable();
            $table->string('status')->nullable();
            $table->longText('descr')->nullable();
            $table->string('rec')->default('1');
            $table->string('hw')->default('0');
            $table->string('sw')->default('0');
            $table->string('pos')->nullable();
            $table->string('amnt')->default('0');
            $table->string('bal')->default('0');
            $table->string('tid')->nullable();
            $table->string('trec')->nullable();
            $table->string('thw')->nullable();
            $table->string('tsw')->nullable();
            $table->string('foth1')->nullable();
            $table->string('foth2')->nullable();
            $table->string('foth3')->nullable();
            $table->string('foth4')->nullable();
            $table->string('foth5')->nullable();
            $table->string('foth6')->nullable();
            $table->string('foth7')->nullable();
            $table->string('foth8')->nullable();
            $table->string('foth9')->nullable();
            $table->string('foth10')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gadgets');
    }
};
