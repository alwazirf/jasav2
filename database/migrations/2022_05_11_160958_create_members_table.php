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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('member_no');
            $table->string('name');
            $table->enum('gender', ['Pria', 'Wanita']);
            $table->string('place_of_born');
            $table->date('date_of_born');
            $table->foreignId('district_id');
            $table->text('address');
            $table->integer('number_child');
            $table->integer('number_of_sibling');
            $table->string('status');
            $table->string('last_education');
            $table->string('jobs');
            $table->string('skill');
            $table->string('phone');
            $table->string('email');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('image')->nullable();
            $table->string('father_name');
            $table->string('father_enc');
            $table->text('father_address');
            $table->string('father_place_of_born');
            $table->date('father_date_of_born');
            $table->string('father_place_of_death');
            $table->date('father_date_of_death');
            $table->string('mother_name');
            $table->text('mother_address');
            $table->string('mother_place_of_born');
            $table->date('mother_date_of_born');
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
        Schema::dropIfExists('members');
    }
};
