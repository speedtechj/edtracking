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
        Schema::create('trackstatedetails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trackstatus_id');  
            $table->string('reference');
            $table->string('description');
            $table->date('date');
            $table->string('addinfo');
            $table->string('location');
            $table->string('transinv');
            $table->string('batch');
            $table->string('encoder');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trackstatedetails');
    }
};
