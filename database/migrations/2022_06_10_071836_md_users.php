<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MdUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('md_users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->length(55);
            $table->string('password')->length(150);
            $table->enum('user_type', ['A','E','U']);
            $table->string('user_name')->length(150);
            $table->tinyInteger('user_status')->length(1);
            $table->string('project_id',255);
            $table->string('created_by')->length(55);
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
        //
    }
}
