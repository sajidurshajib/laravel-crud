@extends('layout')

@section('content')
<x-message />

<h2>{{$heading}}</h2>
@foreach ($news as $item)
    <p>{{$item['heading']}}</p>
    <a href="{{$item['link']}}">{{$item['link']}}</a>
@endforeach

@endsection