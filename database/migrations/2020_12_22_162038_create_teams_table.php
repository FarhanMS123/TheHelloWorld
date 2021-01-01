<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->string("type"); // binusian | non-binusian | admin
            $table->string("password");
            $table->string("payment")->nullable();
            $table->timestamp("paid_at")->nullable();
            $table->tinyInteger("status")->nullable(); // NULL | 0 | 1 -> unverified | rejected | approve
            $table->timestamp('verified_at')->nullable();
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
        Schema::dropIfExists('teams');
    }
}
