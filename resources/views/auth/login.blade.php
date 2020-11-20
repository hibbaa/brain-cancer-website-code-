@extends('layouts.app')
    <meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')
<div class="container ">
    <div class="row  ">
        <div class="col-md-8 col-md-offset-2 ">
            <div class="panel panel-default  ">
                <div class=" textmiddle ">تسجيل دخول</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                                  
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email"  class="labellogin">الايميل</label>

                            <div class="col-md-8  inputlogin ">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="labellogin">كلمة السر</label>

                            <div class="col-md-8   inputlogin ">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                   
                                <button type="submit" class=" setbutton">
                                     تسجيل دخول      
                                 </button>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
