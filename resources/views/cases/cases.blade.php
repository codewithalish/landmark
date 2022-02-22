@extends('layouts.masterPages.landmark')
@section('content')
    <div id="main">
        <div class="section pt-7 pb-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            @foreach($items as $item)
                               @include('sections.case')
                            @endforeach

                        </div>
                        <span class="pagination-loop" style="padding: 0 20%">
								 {{$items->links()}}
								</span>

                    </div>
                    <div class="col-md-3">
                        <div class="sidebar">
                            @include('widgets.case_search')
                            @include('widgets.agent_vip')
                            @include('widgets.last_cases')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
