@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="callout callout-info bg-white">create comments
            </div>

            {{--            <div class="callout callout-info bg-white">اطلاعات پیج</div>--}}
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$cardTitle ?? ''}}</div>

                @include('layouts.partials.auth.alert')

                <form action="/admin/comments" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="user_id">user_id</label>
                            <input class="form-control" id="user_id" type="number" placeholder="user_id" name="user_id">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="commentable_id">commentable_id</label>
                            <input class="form-control" id="commentable_id" type="number" placeholder="commentable_id" name="commentable_id">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="commentable_type"> commentable_type</label>
                            <input class="form-control" id="commentable_type" type="text" placeholder="commentable_type" name="commentable_type">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="body"> body</label>
                            <input class="form-control" id="body" type="text" placeholder="body" name="body">
                        </div>
                        <button type="submit" class="btn btn-primary active" type="button">Send</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
