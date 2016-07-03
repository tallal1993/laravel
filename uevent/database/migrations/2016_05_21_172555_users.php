<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('frst_nm');
            $table->string('lst_nm');
            $table->string('email');
            $table->string('pwd');
            $table->string('avtr');
            $table->string('work');
            $table->string('rnk_at_wrk');
            $table->string('gndr');
            $table->text('about');
            $table->text('phn');
            $table->text('adrs');
            $table->text('city');
            $table->text('cntry');
            $table->text('edu');
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('Users');
    }
}
