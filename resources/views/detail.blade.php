@extends('layouts.app')

@section('title-page')
    Ticket # {{$data->id}}
@endsection

@section('content')

        <div class="alert alert-info">
            <h3>{{ $data->subject }}</h3>
            <p>{{ $data->email }}</p>
            <p>{{ $data->message }}</p>
            <p><small>{{ $data->created_at }}</small></p>
            <a href="{{route('ticket-update', $data->id)}}"><button class="btn btn-primary">Update</button></a>
            <a href="{{route('ticket-delete', $data->id)}}"><button class="btn btn-danger">Delete</button></a>
        </div>
@endsection

