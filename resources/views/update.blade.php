@extends('layouts.app')

@section('title-page')
    Update
@endsection

@section('content')
    <h4>You can update your ticket</h4>

    <form action="{{route('ticket-update-submit', $data->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $data->name }}"  placeholder="Enter name" />
        </div>

        <div class="form-group">
            <label for="email" >Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $data->email }}" placeholder="Enter email" />
        </div>

        <div class="form-group">
            <label for="subject" >Subject</label>
            <input type="text" name="subject" id="subject" class="form-control" value="{{ $data->subject }}" placeholder="Enter subject" />
        </div>

        <div class="form-group">
            <label for="message" >Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Enter message">{{ $data->message }}</textarea>
        </div>

        <button type="submit" name="submit" class="btn btn-success">Update</button>
    </form>

@endsection
