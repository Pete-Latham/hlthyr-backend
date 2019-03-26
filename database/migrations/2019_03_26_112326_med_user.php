<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MedUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("med_user", function (Blueprint $table) {
            $table->increments("id");
            $table->integer("med_id")->unsigned();
            $table->foreign("med_id")->references("id")->on("meds")->onDelete("cascade");
            $table->integer("user_id")->unsigned();
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->integer("stock");
            $table->string("medColour");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('med_user');
    }
}
