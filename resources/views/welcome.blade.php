@extends('layouts.app')

@section('title-page')
    Welcome
@endsection

@section('content')
    <h4>Welcome!</h4>
    <p>This is a small demo of a technical service site where you can leave a request (ticket).</p>
    <p>Laravel 6, MySQL, Bootstrap </p>
@endsection

@section('aside')
    @parent
{{--    <p>Additional text</p>--}}
@endsection
