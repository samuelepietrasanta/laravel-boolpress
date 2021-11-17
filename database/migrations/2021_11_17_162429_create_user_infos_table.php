<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('address');
            $table->string('country');
            $table->string('phone');
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')->onDelete('set null');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('user_infos', function(Blueprint $table){
            $table->dropForeign('user_infos_user_id_foreign');
        });

        Schema::dropIfExists('user_infos');
    }
}
