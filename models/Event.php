<?php namespace AfonsoStudio\EventsSchedule\Models;

use Model;

/**
 * Model
 */
class Event extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'afonsostudio_eventsschedule_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    /**
     * @var array Attributes that support translation, if available.
     */
    public $translatable = [
        'title',
        'details'
    ];
    // Relations
    public $attachOne = [
    	'event_image' => 'System\Models\File'
    ];
}
