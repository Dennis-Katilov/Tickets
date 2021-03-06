@extends('layouts.app')

@section('title-page')
    All tickets
@endsection

@section('content')
@foreach($contact as $item)
    <div class="alert alert-info">
        <h3>{{ $item->subject }}</h3>
        <p>E-mail:{{ $item->email }}</p>
        <p><small>Date:{{ $item->created_at }}</small></p>
        <a href="{{route('ticket-detail', $item->id)}}"><button class="btn btn-warning">Details</button></a>
    </div>
@endforeach
{{ $contact->links() }}
@endsection

