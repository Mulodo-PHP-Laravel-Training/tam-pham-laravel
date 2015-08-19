@extends('layouts.main')
@section('content')
<section>
    <ul>
        @foreach ($category as $v)
        <li><a href="/category/{{ $v->id }}/edit">{{ $v->name }}</a></li>
        @endforeach
        </ul>
</section>
@endsection