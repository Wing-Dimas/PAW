<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVotingIdToUserVotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_votes', function (Blueprint $table) {
            $table->unsignedBigInteger("voting_id");

            // references
            $table->foreign("voting_id")->references("id")->on("votings");
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
            $table->dropForeign("voting_id");
            $table->dropColumn("voting_id");
        });
    }
}
