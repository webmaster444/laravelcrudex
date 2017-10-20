<?php

namespace crudapp\Listeners;

use crudapp\Events\StudentAdded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class StudentAddedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Handle the event.
     *
     * @param  StudentAdded  $event
     * @return void
     */
    public function handle(StudentAdded $event)
    {
      $this->name = $event->name;
      echo "<br>New Student added in database with name: ".$this->name;
    }
}
