<?php namespace AfonsoStudio\EventsSchedule\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAfonsostudioEventsschedule extends Migration
{
    public function up()
    {
        Schema::create('afonsostudio_eventsschedule_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
            $table->text('details')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('afonsostudio_eventsschedule_');
    }
}
