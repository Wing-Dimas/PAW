<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToUserVotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_votes', function (Blueprint $table) {
            $table->unsignedBigInteger("user_id");

            // references
            $table->foreign("user_id")->references("id")->on("users")->onDelete("CASCADE");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_votes', function (Blueprint $table) {
            $table->dropForeign("user_id");
            $table->dropColumn("user_id");
        });
    }
}
