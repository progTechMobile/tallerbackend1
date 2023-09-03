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
        Schema::create('Products',function (Blueprint $table){
            $table->id();
            $table->bigInteger("category_id")->unsigned();
            $table->foreign("category_id")->references("id")->on("Categories");           
            $table->string("nombre");
            $table->float("precio");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
