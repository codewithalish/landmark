@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">

            {{--            <div class="callout callout-info bg-white">اطلاعات پیج</div>--}}
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$cardTitle ?? ''}}</div>
                @include('layouts.partials.auth.alert')

                <form action="/admin/variables/{{$item->id}}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="key">key</label>
                            <input class="form-control" id="key" type="text" placeholder="key" name="key" value="{{$item->key}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="value">value</label>
                            <input class="form-control" id="value" type="text" placeholder="value" name="value" value="{{$item->value}}">
                        </div>

                        <button type="submit" class="btn btn-primary active">ویرایش</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
