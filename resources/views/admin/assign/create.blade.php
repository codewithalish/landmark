@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="callout callout-info bg-white">تخصیص دسترسی به نقش(assign)
            </div>

            {{--            <div class="callout callout-info bg-white">اطلاعات پیج</div>--}}
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$cardTitle ?? ''}}</div>

                @include('layouts.partials.auth.alert')

                <form action="/admin/agents" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="name">کاربر</label>
                            <select name="" id="">
                                @foreach(\App\Models\User::all(['id','name']) as $item)
                                <option value="{{$item->id}}">{{$item->id}}-{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="name">نقش</label>
                            <select name="" id="">
                                <option value="admin">admin</option>
                                <option value="agent">agent</option>
                                <option value="user">user</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary active" >Send</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
