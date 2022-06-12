<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategorieIdToVotings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('votings', function (Blueprint $table) {
            $table->unsignedBigInteger("categorie_id")->unsigned();

            //references
            $table->foreign("categorie_id")->references("id")->on("categories");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('votings', function (Blueprint $table) {
            $table->drop("categorie_id");
            $table->dropColumn("categorie_id");
        });
    }
}
