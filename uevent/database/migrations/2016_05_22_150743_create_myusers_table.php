<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myusers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('frst_nm');
            $table->string('lst_nm');
            $table->string('email')->unique();
            $table->string('pwd',60);
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
        Schema::drop('myusers');
    }
}
