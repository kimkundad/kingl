@extends('layouts.template')


@section('title')
kingbarlaos ສູດບາທີ່ດີທີ່ສຸດ ແລະ ຖືກສຸດໃນປະເທດໄທ ອັນດັບ 1
@stop

@section('stylesheet')

@stop('stylesheet')


@section('content')

<div class="container-fluid bg" style="margin: 0px">
    <div id="content" style="height: 100vh">
        <div class="d-none d-md-block">
            <div class="row p-0 m-0" style="height: 100vh">
                <div class="login-container h-100">
                    <div class="row p-0 m-0 h-100">
                        <div class="col-4 my-auto"></div>
                        <div class="col-4 my-auto">
                            <div class="text-center">
                                <img class="w-100 login-logo animate__animated animate__bounceInLeft" style="animation-delay: 0.2s;" src="{{ url('img/logo_website.png') }}" alt="Logo">
                            </div>
                            <div class="login-form" style="min-height: 450px;">
                                <form class="new_user" id="new_user" action="{{ route('login') }}" method="post">
                                {{ csrf_field() }}
                                <div>
                                    <input autofocus="autofocus" class="login-input-1" type="text" name="username" value="{{ old('username') }}" required id="user_username">
                                </div>
                                <div>
                                    <input autocomplete="off" class="login-input-2" type="password" name="password" required id="user_password">
                                </div>
                                    <input type="submit" name="commit" value="" class="login-button" data-disable-with="">
                                </form> 
                                @error('username')
                                <div class="row error-message" style="margin-top: 130px">
                                    <div class="col my-auto text-center">ไม่พบยูสเซอร์เนมหรือพาสเวิร์ดผิด</div>
                                </div>
                                @enderror
                                @if ($message = Session::get('expired'))
                                <div class="d-flex justify-content-center" style="margin-top: 130px">
                                    <div class="alert alert-warning" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                                        <span class="mx-2">อายุใช้งานของคุณหมด กรุณาติดต่อเจ้าหน้าที่</span>
                                    </div>
                                </div>
                                @endif
                            </div>
                            
                            
                        </div>
                        <div class="col-4 my-auto"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-block d-md-none">
            <div class="row p-0 m-0" style="height: 100vh">
            <div class="login-container h-100">
                <div class="row h-100">
                    <div class="col-1 my-auto"></div>
                    <div class="col-10 my-auto">
                        <div class="text-center">
                            <img class="w-100 login-logo animate__animated animate__bounceInLeft" style="animation-delay: 0.2s;" src="{{ url('img/logo_website.png') }}" alt="Logo">
                        </div>
                        <div class="login-form">
                            <form class="new_user" id="new_user" action="{{ route('login') }}" accept-charset="UTF-8" method="post">
                                {{ csrf_field() }}
                                <div>
                                    <input autofocus="autofocus" class="login-input-1" type="text" name="username" value="{{ old('username') }}" id="user_username">
                                </div>
                                <div>
                                    <input autocomplete="off" class="login-input-2" type="password" name="password" id="user_password">
                                </div>
                                <input type="submit" name="commit" value="" class="login-button" data-disable-with="">
                            </form> 
                            @error('username')
                                <div class="row error-message" style="margin-top: 130px">
                                    <div class="col my-auto text-center">ไม่พบยูสเซอร์เนมหรือพาสเวิร์ดผิด</div>
                                </div>
                                @enderror
                                @if ($message = Session::get('expired'))
                                <div class="d-flex justify-content-center" style="margin-top: 130px">
                                    <div class="alert alert-warning" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                                        <span class="mx-2">อายุใช้งานของคุณหมด กรุณาติดต่อเจ้าหน้าที่</span>
                                    </div>
                                </div>
                                @endif
                        </div>
                        <div class="row error-message">
                            <div class="col my-auto text-center"></div>
                        </div>
                    </div>
                    <div class="col-1 my-auto"></div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')

    <script>
        function myFunction() {
            document.getElementById("myForm").submit();
        }
</script>

@stop('scripts')