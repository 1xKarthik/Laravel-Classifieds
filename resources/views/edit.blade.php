@extends('layouts.main')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" action="/classifieds/{{$classified->id}}" method="POST"
                  enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Title:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$classified->title}}" id="title" name="title"
                               placeholder="Enter title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Category:</label>
                    <div class="col-sm-10">
                        <select name="category_id" class="form-control">
                            <option value="1">Desktops</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Description:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="description"
                                  id="myDescription" placeholder="Enter Description"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Price:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Price" value="{{$classified->price}}" name="price"
                               placeholder="Enter Price">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Condition:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="condition" id='mySelectBox'>
                            <option value="New">New</option>
                            <option value="Like New">Like New</option>
                            <option value="Used">Used</option>
                            <option value="Bad">Bad</option>
                            <option value="Broken">Broken</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Image:</label>
                    <div class="col-sm-10">
                        <input type="file" class="btn btn-default" id="Image" name="main_image"
                               placeholder="Enter Image">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Location:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Location" value="{{$classified->location}}"
                               name="location"
                               placeholder="Enter Location">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="Email" name="email" value="{{$classified->email}}"
                               placeholder="Enter Email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Phone:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="Phone" name="phone" value="{{$classified->phone}}"
                               placeholder="Enter Phone">
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

    <script>
        window.onload = function () {
            document.getElementById("mySelectBox").value = "{{$classified->condition}}";
            document.getElementById("myDescription").value = "{{$classified->description}}";
        }
    </script>
@stop
