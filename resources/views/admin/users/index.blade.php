@extends('layouts.masterPages.admin')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <div class="callout callout-info bg-white">لیست کاربران
        </div>
        <div class="car"></div>
        <div class="card mb-4">
            <div class="card-header">{{$titleCard ?? ''}}</div>
            <div class="card-body">
                <table class="table">
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
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->mobile}}</td>

                            <td>
                                <a href="/admin/users/{{$item->id}}" class="btn btn-outline-success" type="button" style="padding: 3px">نمایش</a>
                                <a href="/admin/users/{{$item->id}}/edit" class="btn btn-outline-warning" type="button" style="padding: 3px">ویرایش</a>

                                <form action="/admin/users/{{$item->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger" type="submit" style="padding: 3px">حذف</button>
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
