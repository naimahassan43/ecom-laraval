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
            $table->increments('id');
            $table->string('title')->unique();
            $table->text('sdescription');
            $table->text('description');
            $table->string('slug');
            $table->integer('brand_id');
            $table->integer('category_id');
            $table->integer('quantity')->default(1);
            $table->integer('price');
            $table->integer('offer_price')->nullable();
            $table->integer('featured')->default(0)->comment('1 for Hot Sale, 0 for Normal');
            $table->string('tags')->nullable();
            $table->integer('status')->default(0);
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
