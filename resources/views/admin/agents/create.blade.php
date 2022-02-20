@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="callout callout-info bg-white">ایجاد کاربر جدید
            </div>

            {{--            <div class="callout callout-info bg-white">اطلاعات پیج</div>--}}
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$cardTitle ?? ''}}</div>

                @include('layouts.partials.auth.alert')

                <form action="/admin/agents" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="name">نام کاربری</label>
                            <input class="form-control" id="name" type="text" placeholder="name" name="name" value="{{old('name') ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">ایمیل</label>
                            <input class="form-control" id="email" type="email" placeholder="email" name="email" value="{{old('email') ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="mobile">شماره همراه</label>
                            <input class="form-control" id="mobile" type="number" placeholder="mobile" name="mobile" value="{{old('mobile') ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password">رمز عبور</label>
                            <input class="form-control" id="password" type="text" placeholder="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="address">آدرس </label>
                            <input class="form-control" id="address" type="text" placeholder="address" name="address" value="{{old('address') ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for=" avatar_path">آپلود تصویر</label>
                            <input class="form-control" id=" avatar_path" type="file" placeholder=" avatar_path" name=" avatar_path" value="{{old('avatar_path') ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="body">توضیحات</label>
                            <input class="form-control" id="body" type="text" placeholder="body" name="body" value="{{old('body') ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="telegram">ادرس تلگرامی</label>
                            <input class="form-control" id="telegram" type="text" placeholder="telegram" name="telegram" value="{{old('telegram') ?? ''}}">
                        </div>   <div class="mb-3">
                            <label class="form-label" for="whatsapp">ادرس واتساپ</label>
                            <input class="form-control" id="whatsapp" type="text" placeholder="whatsapp" name="whatsapp" value="{{old('whatsapp') ?? ''}}">
                        </div>
                        <button type="submit" class="btn btn-primary active" type="button">Send</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
