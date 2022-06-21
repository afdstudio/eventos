<?php namespace AfonsoStudio\EventsSchedule\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAfonsostudioEventsschedule3 extends Migration
{
    public function up()
    {
        Schema::table('afonsostudio_eventsschedule_', function($table)
        {
            $table->timestamp('deleted_at');
        });
    }
    
    public function down()
    {
        Schema::table('afonsostudio_eventsschedule_', function($table)
        {
            $table->dropColumn('deleted_at');
        });
    }
}
