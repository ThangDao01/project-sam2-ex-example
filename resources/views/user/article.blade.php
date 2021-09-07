@extends('layout.user-layout')
<title>E&K - {{$description->title}}</title>
@section('detail')
    <div class="col-8">
        {!! $description->Detail !!}
    </div>
@endsection

{{--@extends('layout.user-layout')--}}
{{--<title>E&K - Article</title>--}}
{{--@section('detail')--}}
{{--    --}}
{{--@endsection--}}

