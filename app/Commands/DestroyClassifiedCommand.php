<?php
namespace App\Commands;

use App\Commands\Command;
use App\Classified;

class DestroyClassifiedCommand extends Command
{
    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public
    function handle()
    {
        return Classified::where('id', $this->id)->delete();
    }
}