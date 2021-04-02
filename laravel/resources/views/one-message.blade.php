@extends('layouts.app')

@section('title',$data->subject)

@section('content')

    <h2>
        {{$data->subject}}
    </h2>

        <div class="alert alert-info">
            <p>
                {{$data->email}}
            </p>
            <p>
                {{$data->message}}
            </p>
            <p>
                <small>
                {{$data->created_at}}
                </small>
            </p>
            <a href="{{route('contact-update',['id' =>$data->id])}}">
                <button class="btn btn-warning">Update</button>
            </a>
            <a href="{{route('contact-delete',['id' =>$data->id])}}">
                <button class="btn btn-danger">Delete</button>
            </a>
        </div>


@endsection('content')


