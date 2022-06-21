<?php namespace AfonsoStudio\EventsSchedule\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAfonsostudioEventsschedule5 extends Migration
{
    public function up()
    {
        Schema::table('afonsostudio_eventsschedule_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('afonsostudio_eventsschedule_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
