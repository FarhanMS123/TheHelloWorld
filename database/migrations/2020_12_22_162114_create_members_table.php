<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->foreignId("tid")->constrained("teams");
            $table->string("fullname");
            $table->string("type"); // leader | member
            $table->string("email")->unique();
            $table->string("place_of_birth");
            $table->date("date_of_birth");
            $table->string("lineid")->unique();
            $table->string("whatsapp")->unique();
            $table->string("git_account");
            $table->string("identity");
            $table->string("cv");
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
        Schema::dropIfExists('members');
    }
}
