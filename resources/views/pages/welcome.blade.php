@extends('layouts.masterPages.landmark')
@section('content')
    @include('layouts.partials.auth.alert')
    <div id="main">
      <x-hero-component></x-hero-component>
        <x-search-case-component></x-search-case-component>
        <x-best-service-component></x-best-service-component>
        <x-last-case-component></x-last-case-component>
        <x-services-component></x-services-component>
        <x-latest-component></x-latest-component>
         <x-AgentComponent></x-AgentComponent>
        <x-section3></x-section3>
        <x-section4></x-section4>
{{--        <x-partner-component></x-partner-component>--}}
        <x-news-letter-component></x-news-letter-component>

    </div>
@endsection
