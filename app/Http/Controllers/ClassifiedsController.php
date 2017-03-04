<?php

namespace App\Http\Controllers;

use App\Commands\DestroyClassifiedCommand;
use App\Commands\UpdateClassifiedCommand;
use App\Http\Requests\StoreClassifiedRequest;
use App\Http\Requests\UpdateClassifiedRequest;
use Auth;
use App\Classified;
use App\Commands\StoreClassifiedCommand;
use Debugbar;

class ClassifiedsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classifieds = Classified::all();
        return view('index', compact('classifieds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassifiedRequest $request)
    {
        $title = $request->input('title');
        $category_id = $request->input('category_id');
        $description = $request->input('description');
        $price = $request->input('price');
        $condition = $request->input('condition');
        $main_image = $request->file('main_image');
        $location = $request->input('location');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $owner_id = Auth::user()->id;

        if ($main_image) {
            $main_image_filename = $main_image->getClientOriginalName();
            $main_image->move(public_path('images'), $main_image_filename);
        } else {
            $main_image_filename = 'noimage.jpg';
        }

        $command = new StoreClassifiedCommand($title, $category_id, $description, $price, $condition, $main_image_filename, $location, $email, $phone, $owner_id);
        Debugbar::info($command);
        $this->dispatch($command);

        return \Redirect::route('classifieds.index')->with('message', 'Listing Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classified = Classified::find($id);
        return view('show', compact('classified'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classified = Classified::find($id);
        return view('edit', compact('classified'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassifiedRequest $request, $id)
    {
        $title = $request->input('title');
        $category_id = $request->input('category_id');
        $description = $request->input('description');
        $price = $request->input('price');
        $condition = $request->input('condition');
        $main_image = $request->file('main_image');
        $location = $request->input('location');
        $email = $request->input('email');
        $phone = $request->input('phone');

        $current_image_filename = Classified::find($id)->main_image;

        if ($main_image) {
            $main_image_filename = $main_image->getClientOriginalName();
            $main_image->move(public_path('images'), $main_image_filename);
        } else {
            $main_image_filename = $current_image_filename;
        }

        $command = new UpdateClassifiedCommand($id, $title, $category_id, $description, $price, $condition, $main_image_filename, $location, $email, $phone);
        Debugbar::info($command);
        $this->dispatch($command);

        return \Redirect::route('classifieds.index')->with('message', 'Listing Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $command = new DestroyClassifiedCommand($id);
        $this->dispatch($command);
        return \Redirect::route('classifieds.index')->with('message', 'Listing Removed');
    }
}
