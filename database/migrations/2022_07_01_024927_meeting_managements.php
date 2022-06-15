<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MeetingManagements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('meeting_managements', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('type_sp_id')->unsigned();
            $table->date('date');
            $table->bigInteger('max_qty')->unsigned();
            $table->bigInteger('remaining_qty')->unsigned();
            $table->timestamps();
            $table->foreign('type_sp_id')->references('id')->on('types_support')->onUpdate('cascade')->onDelete('cascade');
  
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
