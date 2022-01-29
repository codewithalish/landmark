@extends('layouts.masterPages.landmark')
@section('content')

    <div id="main">
{{--      <x-section1 :item="$item"></x-section1>--}}
        <x-search-case-component></x-search-case-component>
        <x-best-service-component></x-best-service-component>
        <x-last-case-component></x-last-case-component>
        <x-services-component></x-services-component>
{{--        <x-section2></x-section2>--}}
         <x-AgentComponent></x-AgentComponent>
{{--        <x-section3></x-section3>--}}
        <x-section4></x-section4>
        <x-partner-component></x-partner-component>
        <x-news-letter-component></x-news-letter-component>

    </div>
@endsection
