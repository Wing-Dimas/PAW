<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVotingDetailIdToUserVotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_votes', function (Blueprint $table) {
            $table->unsignedBigInteger("voting_detail_id")->nullable();

            // references
            $table->foreign("voting_detail_id")->references("id")->on("voting_details")->onDelete("SET NULL");
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
            $table->drop("voting_detail_id");
            $table->dropColumn("voting_detail_id");
        });
    }
}
