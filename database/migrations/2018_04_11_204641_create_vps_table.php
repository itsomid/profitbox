<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('droplet_id')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title');
            $table->json('bot_details')->nullable();
            $table->integer('period')->default('1');
            $table->date('expire_date');
            $table->float('monthly_price');
            $table->integer('price')->default(0);
            $table->enum('status', ['off', 'active', 'pending','new','disable'])->default('pending');
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
        Schema::dropIfExists('vps');
        Schema::table('vps', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
    }
}
