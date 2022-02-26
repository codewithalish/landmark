@extends('layouts.masterPages.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="callout callout-info bg-white">ارسال ایمیل
            </div>

            {{--            <div class="callout callout-info bg-white">اطلاعات پیج</div>--}}
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$cardTitle ?? ''}}</div>

                @include('layouts.partials.auth.alert')

                <form action="/admin/newsletters/create" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="title">متن پیام</label>
                            <br>
                            <textarea name="title" id="title" cols="90%" rows="5" value="{{old('title') ?? ''}}"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary active">Send</button>

                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
