@extends('frontend.master')

@section('body')
<h1>{{ $page->title }}</h1>
    <div>{!! $page->content !!}</div>
@endsection
