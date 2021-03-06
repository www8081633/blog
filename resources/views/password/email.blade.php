@extends('layouts.default')
@section('content')
    <form action="{{route('findPasswordSend')}}" method="post">
        @csrf
    <div class="card">
        <div class="card-header">
            找回密码
        </div>
        <div class="card-body">
            <div class="form-group">
                <label >邮箱</label>
                <input type="text" name="email" id="" class="form-control">
                <small id="helpId" class="text-muted">请输入注册时的邮箱</small>
            </div>
        </div>
        <div class="card-footer text-muted">
            <button type="submit" class="btn btn-success">发送</button>
        </div>
    </div>
    </form>
@endsection