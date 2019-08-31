@extends('layouts.app')
@section('content')

    <div class="container">

        <div class="row">
        @foreach($links as $link)

        <li>
            <a href="{{ $link->url }}" >{{ $link->title }}</a>
        </li>

        @endforeach

        </div>

        <div>

        <a href="/links/create">Add new link</a>

        </div>

    </div>
@endsection