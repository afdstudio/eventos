<?php namespace AfonsoStudio\EventsSchedule\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAfonsostudioEventsschedule4 extends Migration
{
    public function up()
    {
        Schema::table('afonsostudio_eventsschedule_', function($table)
        {
            $table->renameColumn('lacation_name', 'location_name');
        });
    }
    
    public function down()
    {
        Schema::table('afonsostudio_eventsschedule_', function($table)
        {
            $table->renameColumn('location_name', 'lacation_name');
        });
    }
}
