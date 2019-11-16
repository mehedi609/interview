@extends('layouts.app')
@section('content')
    <div class="container-fluid app-body app-home">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover social-accounts">
                    <thead>
                    <tr>
                        <th> Group Name</th>
                        <th> Group Type</th>
                        <th class="text-center">Account Name</th>
                        <th>Post Text</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $list)
{{--                        {{dd($list)}}--}}
                        <tr>
                            <td>{{$list->groupInfo->name}}</td>
                            <td>{{$list->groupInfo->type}}</td>
                            <td class="text-center">
                                <img width="50" class="media-object img-circle" src="{{$list->accountInfo->avatar}}" alt="">
                            </td>
                            <td>{{$list->post_text}}</td>
                            <td>
                                {{$list->sent_at}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

            <div class="row text-center">
                {{$data->links()}}
            </div>
        </div>
    </div>
@endsection