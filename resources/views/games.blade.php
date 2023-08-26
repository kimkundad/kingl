@extends('layouts.template')


@section('title')
kingbarlaos ສູດບາທີ່ດີທີ່ສຸດ ແລະ ຖືກສຸດໃນປະເທດໄທ ອັນດັບ 1
@stop

@section('stylesheet')

<style>
    .parent-flex {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding: 40px calc((100% - (355px * 3)) / 2);
}

.flex-item {
   flex: 0 0 300px;
   margin-bottom: 5px;
}
</style>

@stop('stylesheet')

@section('content')



<div class="container-fluid bg-casino m-0">
    <div id="content" style="height: 100vh">
    <div class="d-none d-md-block white">
    <div class="d-flex justify-content-center flex-column" style="height: 100vh">
    <div class="row" style="margin-top: -80px">
    <div class="col-0"></div>
    <div class="col-12">
    <div class="banner text-center">
    <img style="width: 50%" class="animate__animated animate__zoomIn" src="{{ url('img/select-casino.png') }}" alt="Select casino">
    </div>
    </div>
    <div class="col-0"></div>
    </div>
    <div class="parent-flex">
        @php
        $s = 1;
        @endphp
        @if(isset($objs))
            @foreach($objs as $u)

                <div class="flex-item p-0">
                    <a href="{{ url('rooms?casino='.$u->game_name_short) }}">
                        <img id="sa" 
                        class="img-fluid w-100 animate__animated animate__slideInLeft" 
                        src="{{ url('images/game/game/'.$u->game_image) }}" 
                        alt="{{$u->game_name}}">
                    </a>
                </div>
                @if($s == 3)
                <div class="col-0"></div>
                @endif
        @php
        $s++;
        @endphp
            @endforeach
        @endif

    </div>
    
   
    <div class="row">
    <div class="col text-center mt-5">
    <a class="btn btn-danger btn-lg text-large animate__animated animate__slideInLeft" href="{{ url('/logout') }}">ອອກ​ຈາກ​ລະ​ບົບ</a>
    @if(Auth::user()->roles[0]['name'] === 'superadmin')
    <a class="btn btn-primary btn-lg text-large " style="margin-left: 20px" href="{{ url('/admin/dashboard') }}">เข้าเมนูหลังบ้าน</a>
    @endif
    @if(Auth::user()->roles[0]['name'] === 'admin')
    <a class="btn btn-primary btn-lg text-large " style="margin-left: 20px" href="{{ url('/admin/dashboard') }}">เข้าเมนูหลังบ้าน</a>
    @endif
    </div>
    </div>
    </div>
    </div>
    <div class="d-block d-md-none white">
    <div class="row justify-content-center">
    <div class="col-0 col-sm-0 col-md-1"></div>
    <div class="col-12 col-sm-12 col-md-10 p-0 m-0">
    <div class="banner text-center">
    <img style="width: 80%" class="animate__animated animate__zoomIn" src="{{ url('img/select-casino.png') }}" alt="Select casino">
    </div>
    </div>
    <div class="col-0 col-sm-0 col-md-1"></div>
    </div>
    <div class="row justify-content-center align-items-center" style="margin-top: 8px;">
    <div class="col-1"></div>
    <div class="col-10 p-0 m-0">
    <div class="image-container">

        @if(isset($objs))
            @foreach($objs as $u)
    <div class="image-wrapper">
    <a href="{{ url('rooms?casino='.$u->game_name_short) }}">
        <img id="{{ $u->game_name_short }}" 
        class="img-fluid w-100 animate__animated animate__slideInLeft" 
        style="animation-delay: 0.1s;" 
        src="{{ url('images/game/game/'.$u->game_image) }}" 
        alt="{{ $u->game_name }}"></a>
    </div>
    @endforeach
        @endif

       

    <div class="text-center mt-5">
    <a class="btn btn-danger btn-lg text-large animate__animated animate__slideInLeft" href="{{ url('/logout') }}">ອອກ​ຈາກ​ລະ​ບົບ</a>
    @if(Auth::user()->roles[0]['name'] === 'superadmin')
    <a class="btn btn-primary btn-lg text-large " style="margin-left: 20px" href="{{ url('/admin/dashboard') }}">เข้าเมนูหลังบ้าน</a>
    @endif
    @if(Auth::user()->roles[0]['name'] === 'admin')
    <a class="btn btn-primary btn-lg text-large " style="margin-left: 20px" href="{{ url('/admin/dashboard') }}">เข้าเมนูหลังบ้าน</a>
    @endif
    </div>
    </div>
    </div>
    <div class="col-1"></div>
    </div>
    </div>
    </div>
    </div>


@endsection

@section('scripts')

@stop('scripts')