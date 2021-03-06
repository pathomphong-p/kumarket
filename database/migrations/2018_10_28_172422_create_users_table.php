<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('personal_id')->unique();    //เลขบัตร
            $table->string('password');                 //พาส
            $table->string('name');                     //ชื่อเจ้าของ
            $table->string('store_name');               //ชื่อร้าน
            $table->string('tel');                      //เบอร์
            $table->string('ban');                      // YES = ban
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
