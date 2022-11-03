<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stress', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('flexRadioDefault');
            $table->string('flexRadioDefault1');
            $table->string('flexRadioDefault2');
            $table->string('flexRadioDefault3');
            $table->string('flexRadioDefault4');
            $table->string('flexRadioDefault6');
            $table->string('flexRadioDefault7');
            $table->string('flexRadioDefault8');
            $table->string('flexRadioDefault9');
            $table->string('flexRadioDefault10');
            $table->string('flexRadioDefault11');
            $table->string('flexRadioDefault12');
            $table->string('flexRadioDefault13');
            $table->string('flexRadioDefault14');
            $table->string('flexRadioDefault15');
            $table->string('flexRadioDefault16');
            $table->string('flexRadioDefault17');
            $table->string('flexRadioDefault18');
            $table->string('flexRadioDefault19');
            $table->string('flexRadioDefault20');
            $table->string('flexRadioDefault21');
            $table->string('flexRadioDefault22');
            $table->string('flexRadioDefault23');
            $table->string('flexRadioDefault24');
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
        Schema::dropIfExists('stress');
    }
}
