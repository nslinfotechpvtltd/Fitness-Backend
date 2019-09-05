<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            if (\App::VERSION() >= '5.8') {
                $table->bigIncrements('id');
            } else {
                $table->increments('id');
            }
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->text('profile_image')->nullable();
            $table->string('location')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->integer('business_hour')->nullable();
            $table->text('bio')->nullable();
            $table->text('service_ids')->nullable();
            $table->float('expertise_years')->nullable();
            $table->integer('hourly_rate')->nullable();
            $table->text('portfolio_image')->nullable();
            
            
            $table->rememberToken();
            \App\Helpers\DbExtender::defaultParams($table);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users');
    }

}
