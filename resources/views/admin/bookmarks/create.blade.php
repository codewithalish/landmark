@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="callout callout-info bg-white">create bookmark
            </div>

            {{--            <div class="callout callout-info bg-white">اطلاعات پیج</div>--}}
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$cardTitle ?? ''}}</div>

                @include('layouts.partials.auth.alert')

                <form action="/admin/bookmarks" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="user_id">user_id</label>
                            <input class="form-control" id="user_id" type="number" placeholder="user_id" name="user_id">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bookmarkable_id">bookmarkable_id</label>
                            <input class="form-control" id="bookmarkable_id" type="number" placeholder="bookmarkable_id" name="bookmarkable_id">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bookmarkable_type"> bookmarkable_type</label>
                            <input class="form-control" id="bookmarkable_type" type="text" placeholder="bookmarkable_type" name="bookmarkable_type">
                        </div>

                        <button type="submit" class="btn btn-primary active" type="button">Send</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
