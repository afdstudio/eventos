<?php namespace AfonsoStudio\EventsSchedule\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAfonsostudioEventsschedule extends Migration
{
    public function up()
    {
        Schema::table('afonsostudio_eventsschedule_', function($table)
        {
            $table->date('date_start')->nullable();
            $table->date('date_end')->nullable();
            $table->time('hour_start')->nullable();
            $table->time('hour_end')->nullable();
            $table->text('url')->nullable();
            $table->text('lacation_name')->nullable();
            $table->text('location_address')->nullable();
            $table->text('email_contact')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('afonsostudio_eventsschedule_', function($table)
        {
            $table->dropColumn('date_start');
            $table->dropColumn('date_end');
            $table->dropColumn('hour_start');
            $table->dropColumn('hour_end');
            $table->dropColumn('url');
            $table->dropColumn('lacation_name');
            $table->dropColumn('location_address');
            $table->dropColumn('email_contact');
        });
    }
}
