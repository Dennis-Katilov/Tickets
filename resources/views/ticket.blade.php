@extends('layouts.app')

@section('title-page')
    Create
@endsection

@section('content')
    <h4>You can leave a request by filling in the required fields.</h4>


    <form action="{{route('ticket-form')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" />
        </div>

        <div class="form-group">
            <label for="email" >Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" />
        </div>

        <div class="form-group">
            <label for="subject" >Subject</label>
            <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter subject" />
        </div>

        <div class="form-group">
            <label for="message" >Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Enter message"></textarea>
        </div>

        <button type="submit" name="submit" class="btn btn-success">Send</button>
    </form>

@endsection
