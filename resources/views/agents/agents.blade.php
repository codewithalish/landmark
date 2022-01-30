@extends('layouts.masterPages.landmark')
@section('content')
    <div id="main">
        <div class="section pt-7 pb-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        @foreach($items as $item)
                        <div class="row agent-detail style-2">
                            <div class="thumbnail col-md-4">
                                <img src="/landmark/images/team/team_5.png" alt="/agent_detail/{{$item->id}}">
                                <div class="agent-social text-center">
                                    <a class="fa fa-facebook" href="#"></a>
                                    <a class="fa fa-twitter" href="#"></a>
                                    <a class="fa fa-google" href="#"></a>
                                    <a class="fa fa-pinterest" href="#"></a>
                                </div>
                            </div>
                            <div class="info-agent col-md-8">
                                <div class="box-content">
                                    <h3 class="title">
                                        <a href="/agents/{{$item->id}}" title="Kent Pather">{{$item->name}}</a>
                                    </h3>
                                    <div class="box-info">
                                        <div class="item-info">
                                            <span class="position">{{$item->role}}</span>
                                        </div>
                                        <ul class="item-info">
                                            <li class="agent-email">
                                                <a href="mailto:kentpather@landmark.com" target="_top">{{$item->email}}</a>
                                            </li>
                                            <li class="agent-mobile">
                                                <a href="tel:0" target="_top">{{$item->mobile}}</a>
                                            </li>
                                            <li class="agent-address">{{$item->address}}</li>
                                        </ul>
                                        <div class="agent-about">
                                            {{$item->body}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                            <span class="pagination-loop" style="padding: 0 30%">
								 {{$items->links()}}
								</span>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar">
                            @include('widgets.agent_vip')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

