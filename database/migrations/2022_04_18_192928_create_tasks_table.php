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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->uuid("uuid");
            $table->string("task_name");
            $table->dateTimeTz("start_date");
            $table->dateTimeTz("finish_date");
            $table->string("priority");
            $table->string("status");
            $table->string("description");
            $table->unsignedBigInteger("user_id");
            $table->timestamps();
            $table->softDeletes();

            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
