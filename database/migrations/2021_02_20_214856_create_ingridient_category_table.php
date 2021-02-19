<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngridientCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_ingridient', function (Blueprint $table) {
            $table->unsignedInteger('ingridient_id');
            $table->unsignedInteger('category_id');

            $table->primary(array('ingridient_id', 'category_id'));

            $table->foreign('ingridient_id')
                ->references('id')
                ->on('ingridients')
                ->onDelete('cascade');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingridient_category');
    }
}
