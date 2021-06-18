{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'マイプロフィール')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Myプロファイル作成</h2>
                {{-- 課題Laravel13ここから --}}
                 <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
                     <div class="form-group row">
                        <label class="col-md-2">氏名(Name)</label>
                            <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            </div>
                        <label class="col-md-2">性別(Gender)</label>
                            <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            </div>
                        <label class="col-md-2">趣味(Hobby)</label>
                            <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            </div>
                     </div>
                    <div class="form-group row">
                        <label class="col-md-2">自己紹介(Introduction)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Profile</title>
    </head>
    <body>
        <h1>Myプロファイル作成画面</h1>
    </body>
</html>