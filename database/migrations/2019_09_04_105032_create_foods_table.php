<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->decimal('price');
            $table->string('image');
            $table->float('calo');
            $table->float('protein');
            $table->float('dietary_fiber');
            $table->float('carbohydrate');
            $table->float('total_fat');
            $table->string('vitamins');
            $table->string('minerals');
            $table->longText('created_at')->default(\Carbon\Carbon::now()->valueOf());
            $table->longText('updated_at')->nullable();
            $table->integer('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
