@extends('layouts.main')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">{{$classified->title}}</div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="/images/{{$classified->main_image}}">
                </div>
                <div class="col-md-8">
                    <h3>Item Description</h3>
                    <p>{{$classified->description}}</p>
                    <h3>Item Details</h3>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>Price: </strong> {{$classified->price}}
                        </li>
                        <li class="list-group-item">
                            <strong>Condition: </strong> {{$classified->condition}}
                        </li>
                    </ul>

                    <h3>Seller Details</h3>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>Location: </strong> {{$classified->location}}
                        </li>
                        <li class="list-group-item">
                            <strong>Email: </strong> {{$classified->email}}
                        </li>
                        <li class="list-group-item">
                            <strong>Phone: </strong> {{$classified->phone}}
                        </li>
                    </ul>
                </div>
            </div>
            @if(!Auth::guest())
                @if(Auth::user()->id == $classified->owner_id)
                    <div class="pull-right classified-controls">
                        <a href="/classifieds/{{$classified->id}}/edit" class="btn btn-default">Edit</a>
                        <form action="/classifieds/{{$classified->id}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input class="btn btn-danger" value="Delete" type="submit"/>
                        </form>
                    </div>
                @endif
            @endif
        </div>
    </div>
@stop
