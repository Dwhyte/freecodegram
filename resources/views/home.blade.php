@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle"
                 src="https://instagram.fmia1-1.fna.fbcdn.net/vp/a46bc6c1519233ea56df9cd324659cb4/5DDBFE38/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fmia1-1.fna.fbcdn.net">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img  class="w-100" src="https://instagram.fmia1-1.fna.fbcdn.net/vp/9f99c16652f274d603717edab97d380f/5DEFEF77/t51.2885-15/sh0.08/e35/c2.0.745.745/s640x640/66652936_1155781834606033_3470611866102718174_n.jpg?_nc_ht=instagram.fmia1-1.fna.fbcdn.net">
        </div>
        <div class="col-4">
            <img  class="w-100" src="https://instagram.fmia1-1.fna.fbcdn.net/vp/4eaa40c4e852b63ec4b98aa5a0233f07/5DDEBFA7/t51.2885-15/sh0.08/e35/c3.0.743.743a/s640x640/66820092_492597468195534_1462880213246791019_n.jpg?_nc_ht=instagram.fmia1-1.fna.fbcdn.net">
        </div>
        <div class="col-4">
            <img  class="w-100" src="https://instagram.fmia1-1.fna.fbcdn.net/vp/68aef6bd3634b8c2812ac4abe8aae9c8/5DDB60F3/t51.2885-15/sh0.08/e35/c0.2.751.751a/s640x640/69095403_212234716426916_3447102072665452317_n.jpg?_nc_ht=instagram.fmia1-1.fna.fbcdn.net">
        </div>
    </div>
</div>
@endsection
