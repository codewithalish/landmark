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

                <form action="/admin/services" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="title">عنوان</label>
                            <input class="form-control" id="title" type="text" placeholder="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="url">ادرس</label>
                            <input class="form-control" id="url" type="text" placeholder="url" name="url">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="body">توضیحات</label>
                            <input class="form-control" id="body" type="text" placeholder="body" name="body">
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
