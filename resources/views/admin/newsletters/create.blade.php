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
                <form action="/admin/newsletters" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="title">متن پیام</label>
                            <br>
                            <textarea name="body" id="title" cols="90%" rows="5" value="{{old('body') ?? ''}}"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary active">ایجاد پیام</button>
                    </div>
                </form>
            </div>
            <div class="card mb-4">
                <div class="card-header">{{$titleCard ?? ''}}</div>
                <div class="card-body">
                    <table class="table"

                    >
                        <thead>
                        <tr>
                            @foreach($th as $title)
                                <th scope="col">{{$title}}</th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->body}}</td>
                                <td>
                                    <form action="/admin/newsletters/sendMail" method="get">
                                        @csrf
                                            <button type="submit" class="btn btn-outline-success">ارسال پیام</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
