<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('name')->nullable();
            $table->string('username')->nullable();
            $table->string('contact')->nullable();
            $table->string('gender')->nullable();
            $table->string('looking_for')->nullable();
            $table->text('dob')->nullable();
            $table->unsignedInteger('age')->nullable();            
            $table->double('height')->nullable();
            $table->text('occupation')->nullable();
            $table->text('details')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->boolean('status')->default(1);
            $table->string('latit')->nullable();
            $table->string('longi')->nullable();
            $table->string('last_login')->nullable();
            $table->string('issuper')->nullable()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
