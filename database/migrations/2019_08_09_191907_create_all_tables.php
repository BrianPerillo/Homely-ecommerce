<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->char("name",50);
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->char("name",50);
        });

        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->char("name",50);
            $table->decimal("price",9,2);
            $table->unsignedBigInteger("color_id");
            $table->foreign('color_id')->references('id')->on('colors');
            $table->char("dimension",50);
            $table->char("description",200);
            $table->char("photo",255);
        });



        Schema::create('category_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger("category_id");
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger("product_id");
            $table->foreign("product_id")->references('id')->on('products');
        });

        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger("user_id");
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('cart_product', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->timestamps();
          $table->unsignedBigInteger("product_id");
          $table->foreign('product_id')->references('id')->on('products');
          $table->unsignedBigInteger("cart_id");
          $table->foreign('cart_id')->references('id')->on('carts');
          $table->integer('quantity');
          $table->decimal("total_price",9,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      // Schema::table('cart_product', function (Blueprint $table) {
      //   $table->dropForeign('product_id');
      //   $table->dropForeign('cart_id');
      // });
      //
      // Schema::table('carts', function (Blueprint $table) {
      //   $table->dropForeign('user_id');
      // });
      //
      // Schema::table('category_product', function (Blueprint $table) {
      //   $table->dropForeign('category_id');
      //   $table->dropForeign('product_id');
      // });
      //
      // Schema::table('products', function (Blueprint $table) {
      //   $table->dropForeign('color_id');
      // });

        Schema::dropIfExists('cart_product');
        Schema::dropIfExists('carts');
        Schema::dropIfExists('category_product');
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('colors');
    }
}
