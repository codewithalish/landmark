@extends('layouts.masterPages.landmark')
@section('content')
<div class="section pt-9 pb-9">
    <div class="container">
        <div class="row">

        </div>
        <div class="row">
            @foreach($my_cases as $item)
                @include('sections.case')
            @endforeach

        </div>
    </div>
</div>
@endsection
