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
                            <label class="form-label" for="name">نام کاربری</label>
                            <input class="form-control" id="name" type="text" placeholder="name" name="name" value="{{$item->name}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">ایمیل</label>
                            <input class="form-control" id="email" type="email" placeholder="email" name="email" value="{{$item->email}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="monile">شماره همراه</label>
                            <input class="form-control" id="monile" type="number" placeholder="monile" name="monile" value="{{$item->monile}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password">رمز عبور</label>
                            <input class="form-control" id="password" type="text" placeholder="password" name="password" value="{{$item->password}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="address">آدرس </label>
                            <input class="form-control" id="address" type="text" placeholder="address" name="address" value="{{$item->address}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for=" avater_path">آپلود تصویر</label>
                            <input class="form-control" id=" avater_path" type="file" placeholder=" avater_path" name=" avater_path" value="{{$item->avarat_path}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="body">توضیحات</label>
                            <input class="form-control" id="body" type="text" placeholder="body" name="body" value="{{$item->body}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="telegram">ادرس تلگرامی</label>
                            <input class="form-control" id="telegram" type="text" placeholder="telegram" name="telegram" value="{{$item->telegram}}telegram">
                        </div>   <div class="mb-3">
                            <label class="form-label" for="whatsapp">ادرس واتساپ</label>
                            <input class="form-control" id="whatsapp" type="text" placeholder="whatsapp" name="whatsapp" value="{{$item->whatsapp}}">
                        </div>
                        <button type="submit">ویرایش</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
