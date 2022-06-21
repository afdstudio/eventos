<?php namespace AfonsoStudio\EventsSchedule\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAfonsostudioEventsschedule2 extends Migration
{
    public function up()
    {
        Schema::create('afonsostudio_eventsschedule_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
            $table->text('details')->nullable();
            $table->date('date_start')->nullable();
            $table->date('date_end')->nullable();
            $table->time('hour_start')->nullable();
            $table->time('hour_end')->nullable();
            $table->text('url')->nullable();
            $table->text('location_name')->nullable();
            $table->text('location_address')->nullable();
            $table->text('email_contact')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('afonsostudio_eventsschedule_');
    }
}
