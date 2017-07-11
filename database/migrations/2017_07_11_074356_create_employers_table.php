<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Kalnoy\Nestedset\NestedSet;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->date('date_beg_work');
            $table->integer('position_id')->unsigned();
            $table->foreign('position_id')
                ->references('id')
                ->on('positions');
            $table->integer('boss_id')
                ->unsigned()
                ->nullable();
            $table->foreign('boss_id')
                ->references('id')
                ->on('employers');
            NestedSet::columns($table);
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
        Schema::dropIfExists('employers');
    }
}
