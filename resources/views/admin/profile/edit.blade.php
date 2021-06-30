@extends('layouts.profile')
@section('title', 'プロファイルの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロファイルの編集</h2>
                <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
                     @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                     <div class="form-group row">
                        <label class="col-md-2">氏名(Name)</label>
                            <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                     </div> 
                     <div class="form-group row">
                        <label class="col-md-2">性別(Gender)</label>
                            <div class="col-md-10">
                            <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">趣味(Hobby)</label>
                            <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
                            </div>
                     </div>
                    <div class="form-group row">
                        <label class="col-md-2">自己紹介(Introduction)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20">{{ old('introduction') }}</textarea>
                        </div>
                    </div>
                     {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="作成">
                </form>
                <div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        <h2>編集履歴</h2>
                        <ul class="list-group">
                            @if ($profile_form->histories != NULL)
                                @foreach ($profile_form->histories as $history)
                                    <li class="list-group-item">{{ $history->edited_at }}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection