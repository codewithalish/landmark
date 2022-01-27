<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('address');
            $table->foreignId('user_id')->nullable()->constrained();
            $table->integer('room_number')->default(0);
            $table->integer('area');
            $table->integer('parking_number');
            $table->integer('bath_number');
            $table->bigInteger('price');
            $table->bigInteger('deposit');
            $table->bigInteger('rent');
            $table->enum('type',['FIELD','APARTMENT','VILLA']);
            $table->string('avatar_path')->nullable();
            $table->string('video_path')->nullable();
            $table->enum('contract',['FOR_SALE','FOR_RENT']);
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
        Schema::dropIfExists('cases');
    }
}
