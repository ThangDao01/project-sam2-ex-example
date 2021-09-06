@extends('layout.user-layout')
<title>E&K - {{$description->title}}</title>
@section('detail')
    <div class="col-8">
        {!! $description !!}
    </div>
@endsection

