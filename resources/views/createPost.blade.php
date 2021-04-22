@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <br><br><br>
                <div class="card-header">Загрузив резюме, вы воспользуетесь возможностью получения фидбэка от нашего эксперта</div>

                <div class="card-body">
                    <form method="post" action="/resume-upload" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">ФИО</label>
                            <input type="text" name="title" class="form-control" value="{{Request::old('title')}}">
                            @if($errors->has('title'))
                            <span class="help-block text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="title">Резюме</label>
                            <input type="file" name="images[]" class="form-control" multiple="">
                            @if($errors->has('images'))
                            <span class="help-block text-danger">{{ $errors->first('images') }}</span>
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