@extends('layouts.main')

@foreach($errors->all() as $error)
    <p>{{$error}}</p>
@endforeach

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" action="/classifieds" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label col-sm-2">Title:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Category:</label>
                    <div class="col-sm-10">
                        <select name="category_id" class="form-control">
                            <option value="1">Desktops</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Description:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="Description" name="description"
                                  placeholder="Enter Description"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Price:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Price" name="price" placeholder="Enter Price">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Title:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="condition">
                            <option value="New">New</option>
                            <option value="Like New">Like New</option>
                            <option value="Used">Used</option>
                            <option value="Bad">Bad</option>
                            <option value="Broken">Broken</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Image:</label>
                    <div class="col-sm-10">
                        <input type="file" class="btn btn-default" id="Image" name="main_image"
                               placeholder="Enter Image">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Location:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Location" name="location" placeholder="Enter Location">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="Email" name="email" placeholder="Enter Email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Phone:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="Phone" name="phone" placeholder="Enter Phone">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
