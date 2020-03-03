<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player', function (Blueprint $table) {
            $table->integer('id')->nullable();
            $table->string("chance_of_playing_next_round")->nullable();	
            $table->string("chance_of_playing_this_round")->nullable();	
            $table->string("code")->nullable();	
            $table->string("cost_change_event")->nullable();	
            $table->string("cost_change_start")->nullable();	
            $table->string("cost_change_start_fall")->nullable();	
            $table->string("dreamteam_count")->nullable();	
            $table->string("element_type")->nullable();	
            $table->string("ep_next")->nullable();	
            $table->string("ep_this")->nullable();	
            $table->string("event_points")->nullable();	
            $table->string("first_name")->nullable();	
            $table->string("form")->nullable();	
            $table->string("in_dreamteam")->nullable();	
            $table->string("news")->nullable();	
            $table->string("news_added")->nullable();	
            $table->string("now_cost")->nullable();	
            $table->string("photo")->nullable();	
            $table->string("points_per_game")->nullable();	
            $table->string("second_name")->nullable();	
            $table->string("selected_by_percent")->nullable();	
            $table->string("special")->nullable();	
            $table->string("squad_number")->nullable();	
            $table->string("status")->nullable();	
            $table->string("team")->nullable();	
            $table->string("team_code")->nullable();	
            $table->string("total_points")->nullable();	
            $table->string("transfers_in")->nullable();	
            $table->string("transfers_in_event")->nullable();	
            $table->string("transfers_out")->nullable();	
            $table->string("transfers_out_event")->nullable();	
            $table->string("value_form")->nullable();	
            $table->string("value_season")->nullable();	
            $table->string("web_name")->nullable();	
            $table->string("minutes")->nullable();	
            $table->string("goals_scored")->nullable();	
            $table->string("assists")->nullable();	
            $table->string("clean_sheets")->nullable();	
            $table->string("goals_conceded")->nullable();	
            $table->string("own_goals")->nullable();	
            $table->string("penalties_saved")->nullable();	
            $table->string("penalties_missed")->nullable();	
            $table->string("yellow_cards")->nullable();	
            $table->string("red_cards")->nullable();	
            $table->string("saves")->nullable();	
            $table->string("bonus")->nullable();	
            $table->string("bps")->nullable();	
            $table->string("influence")->nullable();	
            $table->string("creativity")->nullable();	
            $table->string("threat")->nullable();	
            $table->string("ict_index")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player');
    }
}
