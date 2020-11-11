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
            $table->string('name_product','45');
            $table->string('description','45');
            $table->string('price','45');
            /*
             * foreing
             */
            $table->bigInteger('company_id')->unsigned();
            $table->bigInteger('product_type_id')->unsigned();
            /*
             * union
             */
            $table->foreign('company_id')->references('id')->on('companies')->onUpdate('cascade');
            $table->foreign('product_type_id')->references('id')->on('product_types')->onUpdate('cascade');
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
