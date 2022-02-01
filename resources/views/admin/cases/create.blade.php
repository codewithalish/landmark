@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="callout callout-info bg-white">ایجاد پست
            </div>

            {{--            <div class="callout callout-info bg-white">اطلاعات پیج</div>--}}
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$cardTitle ?? ''}}</div>

                @include('layouts.partials.auth.alert')

                <form action="/admin/cases" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="title">عنوان</label>
                            <input class="form-control" id="title" type="text" placeholder="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="room_nimber">تعداد اتاق</label>
                            <input class="form-control" id="room_nimber" type="number" placeholder="room_nimber" name="room_number">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="parking_number">تعداد پارکینگ</label>
                            <input class="form-control" id="parking_number" type="number" placeholder="parking_number" name="parking_number">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bath_number">تعداد سرویس بهداشتی</label>
                            <input class="form-control" id="bath_number" type="number" placeholder="bath_number" name="bath_number">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="price">قیمت</label>
                            <input class="form-control" id="price" type="number" placeholder="price" name="price">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="rent">رهن</label>
                            <input class="form-control" id="rent" type="number" placeholder="rent" name="rent">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="deposit">اجاره</label>
                            <input class="form-control" id="deposit" type="number" placeholder="deposit" name="deposit">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="deposit">وضعیت</label>
                            <input class="form-control" id="deposit" type="select" placeholder="deposit" name="contract">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="address">آدرس</label>
                            <input class="form-control" id="address" type="text" placeholder="address" name="address">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="type">نوع ملک</label>
                            <input class="form-control" id="type" type="" placeholder="type" name="type">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="is_vip">کیس vip</label>
                            <input class="form-control" id="is_vip" type="" placeholder="is_vip" name="is_vip">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="description">توضیحات</label>
                            <input class="form-control" id="description" type="text" placeholder="description" name="description">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="avarat_path">اپلود تصویر</label>
                            <input class="form-control" id="avarat_path" type="file" placeholder="avarat_path" name="avarat_path">
                        </div>
                        <button type="submit">Send</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
