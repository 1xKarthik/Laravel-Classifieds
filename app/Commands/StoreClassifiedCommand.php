<?php
namespace App\Commands;

use App\Commands\Command;
use App\Classified;

class StoreClassifiedCommand extends Command
{
    public $title;
    public $category_id;
    public $description;
    public $price;
    public $condition;
    public $main_image;
    public $location;
    public $email;
    public $phone;
    public $owner_id;

    public function __construct($title, $category_id, $description, $price, $condition, $main_image, $location, $email, $phone, $owner_id)
    {
        $this->title = $title;
        $this->category_id = $category_id;
        $this->description = $description;
        $this->price = $price;
        $this->condition = $condition;
        $this->main_image = $main_image;
        $this->location = $location;
        $this->email = $email;
        $this->phone = $phone;
        $this->owner_id = $owner_id;
    }

    public
    function handle()
    {
        return Classified::create([
            'title' => $this->title,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'price' => $this->price,
            'condition' => $this->condition,
            'main_image' => $this->main_image,
            'location' => $this->location,
            'email' => $this->email,
            'phone' => $this->phone,
            'owner_id' => $this->owner_id,
        ]);
    }
}