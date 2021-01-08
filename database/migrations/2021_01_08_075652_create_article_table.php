<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('manufacturer')->nullable();
            $table->text('description')->nullable();
            $table->string('internal_number')->nullable();
            $table->string('barcode')->nullable();
            $table->string('isbn')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('min_stock')->nullable();
            $table->boolean('discontinued_item')->nullable();
            $table->integer('storage_id')->nullable();
            $table->string('stock_shelf')->nullable();
            $table->text('notes')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
