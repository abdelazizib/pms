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
            $table->string('name')->unique();
            $table->foreignId('category_id')
            ->constrained('categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->text('description');
            $table->string('image',255);
            $table->float('price');
            $table->string('slug',255)->unique();
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
        Schema::table('products'.function (Blueprint $table){
            $table->dropSoftDeletes();
        	});
	


    }
}
