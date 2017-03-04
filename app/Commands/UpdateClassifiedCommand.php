<?php
namespace App\Commands;

use App\Commands\Command;
use App\Classified;

class UpdateClassifiedCommand extends Command
{
    public $id;
    public $title;
    public $category_id;
    public $description;
    public $price;
    public $condition;
    public $main_image;
    public $location;
    public $email;
    public $phone;

    public function __construct($id, $title, $category_id, $description, $price, $condition, $main_image, $location, $email, $phone)
    {
        $this->id = $id;
        $this->title = $title;
        $this->category_id = $category_id;
        $this->description = $description;
        $this->price = $price;
        $this->condition = $condition;
        $this->main_image = $main_image;
        $this->location = $location;
        $this->email = $email;
        $this->phone = $phone;
    }

    public
    function handle()
    {
        return Classified::where('id', $this->id)->update([
            'title' => $this->title,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'price' => $this->price,
            'condition' => $this->condition,
            'main_image' => $this->main_image,
            'location' => $this->location,
            'email' => $this->email,
            'phone' => $this->phone
        ]);
    }
}