<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVotingIdToVotingDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('voting_details', function (Blueprint $table) {
            $table->unsignedBigInteger("voting_id");

            // refences
            $table->foreign("voting_id")->references("id")->on("votings")->onDelete("CASCADE");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('voting_details', function (Blueprint $table) {
            $table->dropForeign("voting_id");
            $table->dropColumn("voting_id");
        });
    }
}
