@extends('layouts.app')
@section('titleb'){{ __("Резюме") }}@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Загрузив резюме, вы воспользуетесь возможностью получения фидбэка от нашего эксперта</div>

                <div class="card-body">
                    <form method="post" action="/resume-upload" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">ФИО</label>
                            <input type="text" name="name" class="form-control" value="{{Request::old('name')}}">
                            @if($errors->has('name'))
                            <span class="help-block text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="title">Резюме</label>
                            <input type="file" name="resumes[]" class="form-control" multiple="">
                            @if($errors->has('resumes'))
                            <span class="help-block text-danger">{{ $errors->first('resumes') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="title">Сообщение</label>
                            <textarea name="body" class="form-control">{{Request::old('body')}}</textarea>
                            @if($errors->has('body'))
                            <span class="help-block text-danger">{{ $errors->first('body') }}</span>
                            @endif
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary">Загрузить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection