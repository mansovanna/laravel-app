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
        Schema::create('children_image_products', function (Blueprint $table) {
            $table->id();
            $table->string('image_url');
            $table->foreignId('product_id')->constrained();
            $table->timestamps();
            // ->onDelete('cascade') useThe delete all rela..
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children_image_products');
    }
};
