<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('main_image')->nullable();
            $table->unsignedBigInteger('provider_category_id');
            $table->foreign('provider_category_id')->on('provider_categories')->references('id')->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->tinyInteger('active')->default(1);
            $table->float('price');
            $table->string('currency', 5)->default('UAH');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
