@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">

            {{--            <div class="callout callout-info bg-white">اطلاعات پیج</div>--}}
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$cardTitle ?? ''}}</div>
                @include('layouts.partials.auth.alert')

                <form action="/admin/cases/{{$item->id}}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="title">عنوان</label>
                            <input class="form-control" id="title" type="text" placeholder="title" name="title" value="{{$item->title}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">تعداد اتاق</label>
                            <input class="form-control" id="title" type="number" placeholder="title" name="room_number" value="{{$item->room_number}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">تعداد پارکینگ</label>
                            <input class="form-control" id="title" type="number" placeholder="title" name="parking_number" value="{{$item->parking_number}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">تعداد سرویس بهداشتی</label>
                            <input class="form-control" id="title" type="number" placeholder="title" name="bath_number" value="{{$item->bath_number}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">قیمت</label>
                            <input class="form-control" id="title" type="number" placeholder="title" name="price" value="{{$item->}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">رهن</label>
                            <input class="form-control" id="title" type="number" placeholder="title" name="rent" value="{{$item->rent}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">اجاره</label>
                            <input class="form-control" id="title" type="number" placeholder="title" name="deposit" value="{{$item->deposit}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">وضعیت</label>
                            <input class="form-control" id="title" type="" placeholder="title" name="contract" value="{{$item->contract}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">آدرس</label>
                            <input class="form-control" id="title" type="text" placeholder="title" name="address" value="{{$item->address}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">نوع ملک</label>
                            <input class="form-control" id="title" type="" placeholder="title" name="type" value="{{$item->type}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">کیس vip</label>
                            <input class="form-control" id="title" type="" placeholder="title" name="is_vip" value="{{$item->is_vip}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">توضیحات</label>
                            <input class="form-control" id="title" type="text" placeholder="title" name="description" value="{{$item->description}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">اپلود تصویر</label>
                            <input class="form-control" id="title" type="file" placeholder="title" name="avarat_path" value="{{$item->avarat_path}}">
                        </div>

                        <button type="submit">ویرایش</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
