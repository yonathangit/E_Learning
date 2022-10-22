<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('cateory_id');
            $table->string('title');
            $table->longText('description');
            $table->longText('about_instructor');
            $table->integer('view_count')->default(0);
            $table->integer('subscriber_count')->default(0);
            $table->string('status')->default(0);
            $table->softDeletes();
            $table->foreign('cateory_id') ->references('id') ->on('cateory') ->onDelete('cascade');
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
        Schema::dropIfExists('courses');
    }
};
