@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">

            {{--            <div class="callout callout-info bg-white">اطلاعات پیج</div>--}}
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$cardTitle ?? ''}}</div>
                @include('layouts.partials.auth.alert')

                <form action="/admin/agents/{{$item->id}}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="name">role</label>
                            <select name="" id="">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="name">permission</label>
                            <select name="" id="">
                                <option value="">agent</option>
                                <option value="">user</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary active" type="button">ویرایش</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
