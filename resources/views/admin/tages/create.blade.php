@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="callout callout-info bg-white">create role
            </div>

            {{--            <div class="callout callout-info bg-white">اطلاعات پیج</div>--}}
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$cardTitle ?? ''}}</div>

                @include('layouts.partials.auth.alert')

                <form action="/admin/tages" method="post">
                    @csrf
                    <div class="card-body">

                        <div class="mb-3">
                            <label class="form-label" for="title">title</label>
                            <input class="form-control" id="title" type="text" placeholder="title" name="title">
                        </div>

                        <button type="submit">Send</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
