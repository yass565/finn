<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('entreprise_id')->nullable(); 
            $table->foreign('entreprise_id')
                ->references('id')
                ->on('entreprise')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('profile')->default("miavatar.png");
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->integer('pin_code')->nullable();
            $table->date('date_birth')->nullable();
            $table->string('gender')->nullable();
            $table->enum('status', array('Active', 'Deactive', 'Delete'));
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}