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
        Schema:: create('Products',function (Blueprint $table){
            $table->id();
            $table->bigInterger("Category_id")->unsigned();
            $table_>foreign("category_id")->references("id")->on("categories");           
            $table->string("Nombre");
            $table->float("Precio");
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
