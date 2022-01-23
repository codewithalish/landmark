<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('weight');
            $table->integer('user_id');
            $table->string('size')->default(0);
            $table->string('material');
            $table->string('color');
            $table->enum('guaranty',['YES','NO']);
            $table->bigInteger('price');
            $table->enum('status',['AVAILABLE','UNAVAILABLE']);
            $table->string('avatar_path')->nullable();
            $table->string('video_path')->nullable();
            $table->boolean('is_vip')->default(false);
            $table->text('description')->nullable();
            $table->text('details')->nullable();
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
        Schema::dropIfExists('shops');
    }
}
