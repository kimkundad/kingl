@extends('layouts.template')


@section('title')
kingbarlaos ສູດບາທີ່ດີທີ່ສຸດ ແລະ ຖືກສຸດໃນປະເທດໄທ ອັນດັບ 1
@stop

@section('stylesheet')

<style>
    .progress {
    border-radius: 0.25rem;
    overflow: visible;
    background-color: rgb(255 255 255);
}
.text-racking-room-p4 {
    font-size: 16px;
    color: #fff;
    top: 15%;
    left: 53%;
    transform: translate(-50%, 0);
    position: absolute;
    text-align: center;
    text-shadow: 2px 2px #000;
}
.room-small{
  font-size: 23px;
    color: #fff;
    top: 5%;
    left: 50%;
    transform: translate(-50%, 0);
    position: absolute;
    text-align: center;
    text-shadow: 2px 2px #000;
}
@media (max-width: 580px)
{
  .room-small{
  font-size: 18px;
    color: #fff;
    top: 5%;
    left: 50%;
    transform: translate(-50%, 0);
    position: absolute;
    text-align: center;
    text-shadow: 2px 2px #000;
}
}
@media (max-width: 420px)
{
  .room-small{
  font-size: 14px;
    color: #fff;
    top: 5%;
    left: 50%;
    transform: translate(-50%, 0);
    position: absolute;
    text-align: center;
    text-shadow: 2px 2px #000;
}
}
@media (max-width: 768px)
{
    .text-racking-room-p4 {
    font-size: 26px;
    color: #fff;
    top: 14%;
    left: 48%;
    position: absolute;
    text-align: center;
    text-shadow: 2px 2px #000;
    }
}
@media (max-width: 420px)
{
    .text-racking-room-p4 {
    font-size: 20px;
    color: #fff;
    top: 12%;
    left: 50%;
    position: absolute;
    text-align: center;
    text-shadow: 2px 2px #000;
}
}
.set-room-po1{
    position: relative;
}
</style>

@stop('stylesheet')

@section('content')

@php

                                            $now = time(); // or your date as well
                                            $your_date = strtotime(Auth::user()->birthday);
                                            $datediff = $your_date - $now;
                                            $sumday = round($datediff / (60 * 60 * 24));
                                            if($sumday < 0){
                                              $sumday = 0;
                                            }
                     @endphp

<div class="container-fluid bg-casino" style="margin: 0px">
  <div id="content" style="height: 100vh">
  <div class="d-none d-lg-block white">
  <div class="row">
  <div class="col-4">
  <img style="height: 80px" src="{{ url('img/logo-2fd1fc0bbf766da18a075f6a6a866ae0ede623df9077e5e6fbdb2616ac07995c.png') }}" alt="Logo">
  </div>
  <div class="col-4 d-flex justify-content-center align-items-center">
  <h2>ຜູ້ໃຊ້: {{Auth::user()->username}}</h2>
  </div>
  <div class="col-4 text-right">
  <img style="height: 50px" src="{{ url('img/ic_switch_mode-21ab1d389dba0622ed777cf411c16b1c89305f905a4b3238e71d726850914d75.png') }}" alt="Ic switch mode">
  </div>
  </div>
  <div class="h100">
  <div class="bg-game-container h100">
  <div class="row">
  <div class="col-6">
  <a href="{{ url('/rooms?casino='.$objs->casino) }}">
  <img style="height: 50px" src="{{ url('img/ic_back_to_room.png') }}" alt="Ic back to room">
  </a>
  </div>
  <div class="col-6 text-right mt-2">
  <h2>ເວ​ລາ​ທີ່​ເຫຼືອ: {{ $sumday }} ມື້</h2>
  </div>
  </div>
  <div class="row mt-3">
  <div class="col-1"></div>
  <div class="col-3 text-center p-0 m-0">
  <div class="row">
  <div class="col-2"></div>
  <div class="col-8 text-center">
  <b><h2 id="online-user" class="box-blue" style="background: url({{ url('img/box_blue.png') }}) no-repeat center center; background-size: 100% 100%;">
    ຈໍານວນຜູ້ໃຊ້ </h2></b>
  </div>
  <div class="col-2"></div>
  </div>
  <div class="row mt-2">
  <div class="col-4 my-auto box-pink" style="background: url({{ url('img/box_pink.png') }}) no-repeat center center; background-size: 100% 100%;">
  {{$game->game_name_short}} {{$objs->room}}
  </div>
  <div class="col-4 my-auto box-purple" id="round-count" style="background: url({{ url('img/box_purple.png') }}) no-repeat center center; background-size: 100% 100%;">
    ຄັ້ງທີ່ 1
  </div>
  <div class="col-4 my-auto box-pink" id="round" style="background: url({{ url('img/box_pink.png') }}) no-repeat center center; background-size: 100% 100%;">
    ຮອບທີ 1
  </div>
  </div>
  <div class="row mt-5">
  <div class="col-12 p-0 m-0">
  <img id="ecoin" style="width: 100%" src="{{ url('img/e_coin_d-d63d8cc408997aafca540806e7eda73e0917b4749d9ebde6f161ef19f9f0bedf.png') }}" alt="E coin d">
  </div>
  </div>
  <div class="row" style="margin-top: -165px; margin-bottom: -75px">
  <div class="col-1"></div>
  <div class="col-10 p-0 m-0">
  <img id="coin" class="coin mx-auto flip" src="{{ url('img/ic_p-6ec7d7ab9e1db4235997b06ea124fc56cf65fc0c4a1ffde57c65f96fe7a2e2a9.png') }}" alt="Ic p">
  </div>
  <div class="col-1"></div>
  </div>
  <div class="row p-0 m-0">
  <div class="col-9"></div>
  <div class="col-3 my-auto text-cetner ring p-0 m-0" id="progress-value">77%</div>
  </div>
  
  
  <div class="progresss" style="">
  <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 77%;" aria-valuenow="77">
  <span class="progress-icon fa fa-check" style="border-color: yellow; color: yellow;"></span>
  </div>
  </div>
  
  <div class="row mx-4">
  <img onclick="win()" class="img-fluid w-100 h-100" src="{{ url('img/success-c52843660d2994d64226bded81f0ab4b3b47838de5157992f4503954d0174f25.png') }}" alt="Success">
  </div>
  <div class="row mt-2">
  <div class="col-6 p-0 pr-1">
  <img onclick="equal()" class="img-fluid w-100 h-100" src="{{ url('img/equal-86cb7e6df748e71594d3dec70a2f2b431045b50e7e91ea70c307a5a497e2805d.png') }}" alt="Equal">
  </div>
  <div class="col-6 p-0 pl-1">
  <img onclick="nextCoin()" class="img-fluid w-100" src="{{ url('img/next-b8392675a47329902cc8915d8659b1180b17453e1cf703b2b8bcb1bc66f91f98.png') }}" alt="Next">
  </div>
  </div>
  </div>
  <div class="col-1"></div>
  <div class="col-4">
  <div class="row justify-content-center">
  <div class="col">
  <img style="width: 100%" src="{{ url('img/box_stat-f47d8f0fcf3030dbc1b5932b0537bb5b1692013518d4ae3e4d11cca8779ea6d9.png') }}" alt="Box stat">
  </div>
  </div>
  <div class="row">
  <table class="table" id="tableResults" style="border-color: transparent;">
  <tbody>
  </tbody>
  </table>
  </div>
  </div>
  <div class="col-3">

    @if($rooms)
    @foreach($rooms as $u)
    <div class="row mt-3 p-0 animate__animated animate__slideInRight" ,="" style="animation-delay: 0.0s">
      <div class="col">
      <div id="room-percent-{{ $u->room }}" class="room-percent-right">{{ $u->percent }}%</div>
      <div class="image-container m-3 set-room-po1">
        <a href="{{ url('game-room-'.$u->casino.'-'.$u->room) }}">
            <img class="w-100" src="{{ url('images/game/room/'.$game->room_image) }}" alt="{{ $u->room }}">
            <p class="text-racking-room-p4">{{ $u->room }} </p>
        </a> 
    </div>
      </div>
    </div>
    @endforeach
    @endif

  

  
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="d-block d-lg-none white">
  <div class="row">
  <div class="col-5 pl-1 pr-0">
  <img style="height: 40px" src="{{ url('img/logo-2fd1fc0bbf766da18a075f6a6a866ae0ede623df9077e5e6fbdb2616ac07995c.png') }}" alt="Logo">
  </div>
  <div class="col-5 p-0 d-flex justify-content-center align-items-center">
  <h4>ຜູ້ໃຊ້: {{Auth::user()->username}}</h4>
  </div>
  <div class="col-2 pl-0 pr-1 text-right">
  <img style="height: 30px" src="{{ url('img/ic_switch_mode-21ab1d389dba0622ed777cf411c16b1c89305f905a4b3238e71d726850914d75.png') }}" alt="Ic switch mode">
  </div>
  </div>
  <div class="h100" style="padding-bottom: 30px">
  <div class="bg-game-container h100 p-2">
  <div class="row">
  <div class="col-6">
    <a href="{{ url('/rooms?casino='.$objs->casino) }}">
  <img style="height: 50px" src="{{ url('img/ic_back_to_room.png') }}" alt="Ic back to room">
  </a>
  </div>
  <div class="col-6 align-items-center text-right mt-3">
  <h2>ເວລາທີ່ຍັງເຫຼືອ {{ $sumday }} ມື້</h2>
  </div>
  </div>
  <div class="row">
    <div class="col-1 p-0 m-0 my-auto">
      <img id="previous" src="{{ url('img/ic_left-13d8be14dc98431592615b322fa4b0336e8d86246c0282ff8a3808152a7b3214.png') }}" alt="Ic left" aria-controls="my-slider" tabindex="-1" data-controls="prev" >
    </div>
  <div class="col-10 my-auto">
    <div class="tns-outer" id="my-slider-ow">
      <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">
        slide 
          <span class="current">
            1 to 4
          </span>  
          of 17
        </div>
        <div id="my-slider-mw" class="tns-ovh">
          <div class="tns-inner" id="my-slider-iw">
            <div id="my-slider" class="  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" >
  
              @if($rooms)
      @foreach($rooms as $u)
      <div class="room-container tns-item tns-slide-active set-room-po1" id="my-slider-item0">
        <div class="m-room-percent" id="m-room-percent-{{ $u->room }}">{{ $u->percent }}%</div>
        <a href="{{ url('game-room-'.$u->casino.'-'.$u->room) }}" class="">
        <img class="w-100" style="cursor: pointer" src="{{ url('images/game/room/'.$game->room_image2) }}" alt="R {{$u->casino}} {{ $u->room }} m">
        <p class="room-small">{{ $u->room }}</p>
        </a>
      </div>
      @endforeach
      @endif


  </div></div></div></div>
  </div>
  <div class="col-1 p-0 m-0 my-auto">
  <img id="next" src="{{ url('img/ic_left-13d8be14dc98431592615b322fa4b0336e8d86246c0282ff8a3808152a7b3214.png') }}" alt="Ic left" aria-controls="my-slider" tabindex="-1" data-controls="next">
  </div>
  </div>
  <div class="row mt-4">
  <div class="col-2"></div>
  <div class="col-8 text-center">
  <b><h2 id="m-online-user" class="box-blue" style="background: url({{ url('img/box_blue.png') }}) no-repeat center center; background-size: 100% 100%;">ຈໍານວນຜູ້ໃຊ້ </h2></b>
  </div>
  <div class="col-2"></div>
  </div>
  <div class="row mt-2">
  <div class="col-4 text-center my-auto box-pink" style="background: url({{ url('img/box_pink.png') }}) no-repeat center center; background-size: 100% 100%;">
    {{$game->game_name_short}} {{$objs->room}}
  </div>
  <div class="col-4 text-center my-auto box-purple" id="mround-count" style="background: url({{ url('img/box_purple.png') }}) no-repeat center center; background-size: 100% 100%;">
    ເວ​ລາ 1
  </div>
  <div class="col-4 text-center my-auto box-pink" id="mround" style="background: url({{ url('img/box_pink.png') }}) no-repeat center center; background-size: 100% 100%;">
    ຮອບ 1
  </div>
  </div>
  <div class="row mt-5">
  <div class="col-12 p-0 m-0">
  <img id="mecoin" style="width: 100%" src="{{ url('img/e_coin_d-d63d8cc408997aafca540806e7eda73e0917b4749d9ebde6f161ef19f9f0bedf.png') }}" alt="E coin d">
  </div>
  </div>
  <div class="row" style="margin-top: -165px; margin-bottom: -70px;">
  <div class="col-1"></div>
  <div class="col-10 text-center p-0 m-0">
  <img id="mcoin" class="coin mx-auto flip" src="{{ url('img/ic_p-6ec7d7ab9e1db4235997b06ea124fc56cf65fc0c4a1ffde57c65f96fe7a2e2a9.png') }}" alt="Ic p">
  </div>
  <div class="col-1"></div>
  </div>
  <div class="row p-0 m-0">
  <div class="col-9"></div>
  <div class="col-3 my-auto text-center mring p-0 m-0" id="mprogress-value">77%</div>
  </div>
  <div class="progresss" style="">
  <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 77%;" aria-valuenow="77">
  <span class="progress-icon fa fa-check" style="border-color: yellow; color: yellow;"></span>
  </div>
  </div>
  <div class="row mx-4">
  <img onclick="win()" class="img-fluid w-100 h-100" src="{{ url('img/success-c52843660d2994d64226bded81f0ab4b3b47838de5157992f4503954d0174f25.png') }}" alt="Success">
  </div>
  <div class="row mt-2">
  <div class="col-6 p-0 pr-1">
  <img onclick="equal()" class="img-fluid w-100 h-100" src="{{ url('img/equal-86cb7e6df748e71594d3dec70a2f2b431045b50e7e91ea70c307a5a497e2805d.png') }}" alt="Equal">
  </div>
  <div class="col-6 p-0 pl-1">
  <img onclick="nextCoin()" class="img-fluid w-100" src="{{ url('img/next-b8392675a47329902cc8915d8659b1180b17453e1cf703b2b8bcb1bc66f91f98.png') }}" alt="Next">
  </div>
  </div>
  <div class="row justify-content-center">
  <div class="col">
  <img style="width: 100%" src="{{ url('img/box_stat-f47d8f0fcf3030dbc1b5932b0537bb5b1692013518d4ae3e4d11cca8779ea6d9.png') }}" alt="Box stat">
  </div>
  </div>
  <div>
  <table class="table" id="mtableResults" style="border-color: transparent;">
  <tbody>
  </tbody>
  </table>
  </div>
  </div>
  </div>
 
  </div>
  </div>
  </div>

  <div class="modal fade" id="winModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content align-items-center" style="background-color: transparent; border: 0">
            <img class="modal-result-win" src="{{ url('img/win-9ce8ea56315187a530eb4add5a04748ba10fe656545124070cd1068ee68d5cb3.png') }}" alt="Win">
        </div>
      </div>
  </div>


  <div class="modal fade" id="loseModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content align-items-center" style="background-color: transparent;">
            <img class="modal-result-lose" onclick="forceReset()" src="{{ url('img/reset-c4d864fb1105e9afaf36dd5a7d8e4d7aa264c7b21e91a3d82d6a190fe7297488.png') }}" alt="Reset">
            <img class="modal-result-lose" onclick="restart()" src="{{ url('img/restart-6586febbec0d90aba184ff042f34eca245e6f3875fbcd292f374ede190483e16.png') }}" alt="Restart">
          </div>
        </div>
  </div>


  <div class="modal fade" id="loadingModal" tabindex="-1">
        <div class="modal-dialog modal-sm modal-dialog-centered">
          <div class="modal-content" style="background-color: transparent; border: 0">
            <div class="modal-body" id="modalBody">
              <div class="row">
                <div class="col-12">
                  <div class="loader">Loading...</div>
                </div>
              </div>
            <div class="row">
              <div class="col-12">
                <div class="white text-center">
                  <h1 id="loadingMessage">กำลังวิเคราะห์ผลห้อง 1 ...</h1>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
  </div>


@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<script>
  
  var slider = tns({
    container: '#my-slider',
    items: 4,
    gutter: 4,
    loop: false,
    // edgePadding: 40,
    // "speed": 500,
    "swipeAngle": false,
    // "autoplay": true,
    // rewind: true,
    // "startIndex": 1,
    // controls: false,
    nav: false,
    // slideBy: "page",
    // mouseDrag: true,
    prevButton: '#previous',
    nextButton: '#next',
    center: false,
  });
</script>

<script type="text/javascript">

  var casino = "";
  var room = 1;
  var round = 1;
  var coinRound = 1;
  var resultRound = undefined;
  var coin = '';
  var numberOfCoin = 5;
  var shouldIgnore = false;
  var previousCoin = '';
  var sameCoinCount = 0;

  $(document).ready(function() {
    randomRoomPercent();
    randomOnlinePercent();
    setInterval(function(){ 
      randomRoomPercent();
      randomOnlinePercent();
    }, 60 * 1000);

    $("#wait").hide();
    $('#winModal').on('hidden.bs.modal', function (e) {
      randomExtraCoin();
    })

    casino = "sa";
    $('#sidebar').toggleClass('active');
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    $('#bet').val("");
      randomCoin();
      randomPercent();
    });

  function changeRoom(room) {
    $("#loadingMessage").text("ການ​ວິ​ເຄາະ​ຜົນ​ໄດ້​ຮັບ​ຫ້ອງ​ " + room + " ...");
    $('#loadingModal').modal('show');
    setTimeout(function() {
      $('#loadingModal').modal('hide');
      $('body').removeClass('modal-open');
      $('.modal-backdrop').remove();
      window.location = '/game?casino=' + casino + '&room=' + room
    }, 5000);
  }

  function win() {
    addRow('WIN');
    nextRound();
    $('#winModal').modal('show');
    reset();
  }

  function lose() {
    if (coinRound == 4) {
      $('#loseModal').modal('show');
      reset();
      addRow('LOSE');
      nextRound();
      // randomExtraCoin();
    }
  }

  function equal() {
    randomCoin();
    randomPercent();
  }

  function restart() {
    $('#loseModal').modal('hide');
  }

  function nextRound() {
    // playMusic();
    if (!shouldIgnore) {
      round += 1;
      winCount = (round % 5 + 1)
      if (winCount == 1) {
        $('.modal-result-win').attr("src" , "{{ url('img/win1-5c35e74b3a81fc21e9ac984ce044ebcf10cb62b0d7ef2921aa07c3d97e32e8d1.png') }}" );
      } else if (winCount == 2) {
        $('.modal-result-win').attr("src" , "{{ url('img/win2-314001c4bd4928b4e4ab1a635d93f46989fccaa271d82935db3341d6b1beda9e.png') }}" );
      } else if (winCount == 3) {
        $('.modal-result-win').attr("src" , "{{ url('img/win3-0d71a9146fe0e892b831a5b0f3dcc3df5a6238e021fcddbb7bf5bcb643d220b7.png') }}" );
      } else if (winCount == 4) {
        $('.modal-result-win').attr("src" , "{{ url('img/win4-031148e77a5a04df7a734782684471c438a6d08daf3fd143017a20584e0341d1.png') }}" );
      } else if (winCount == 5) {
        $('.modal-result-win').attr("src" , "{{ url('img/win5-5eaf119ec15f2e3b05749670349c0b732e2d5152f0b11ed76ff45e90096f9089.png') }}" );
      }
    } else {
      shouldIgnore = false;
    }
  }

  function nextCoin() {
    if (coinRound < 4) {
      coinRound += 1;

      var obj = $('#round').text('ຮອບ ' + coinRound);
      var obj = $('#mround').text('ຮອບ ' + coinRound);
      // obj.html(obj.html().replace(/\n/g,'<br/>'));

      randomCoin();
      randomPercent();
    } else {
      coinRound = 1;
      reset();
      addRow('LOSE');
      nextRound();
      $('#loseModal').modal('show');
    }
  }

  function randomCoin() {
    var random = Math.floor(Math.random() * 10)

    coin = random % 2 == 0 ? 'B' : 'P';
    if (coin == 'B') {
      $('#coin').attr("src" , "{{ url('img/ic_b-304a43368f7b2f6aff6564e4e01154b3d695b9a738b09b40dacbfc9eb9da534b.png') }}" );
      $('#mcoin').attr("src" , "{{ url('img/ic_b-304a43368f7b2f6aff6564e4e01154b3d695b9a738b09b40dacbfc9eb9da534b.png') }}" );
    } else {
      $('#coin').attr("src" , "{{ url('img/ic_p-6ec7d7ab9e1db4235997b06ea124fc56cf65fc0c4a1ffde57c65f96fe7a2e2a9.png') }}" );
      $('#mcoin').attr("src" , "{{ url('img/ic_p-6ec7d7ab9e1db4235997b06ea124fc56cf65fc0c4a1ffde57c65f96fe7a2e2a9.png') }}" );
    }
  }

  function randomExtraCoin(isWin) {
    $("#ecoin").attr("src" , "{{ url('img/e_coin_r-3281a897b4e2791dc71b114b9ed7249a0eb8848c1f1f0ae52c3e1bd0858e80d2.gif') }}" );
    $("#mecoin").attr("src" , "{{ url('img/e_coin_r-3281a897b4e2791dc71b114b9ed7249a0eb8848c1f1f0ae52c3e1bd0858e80d2.gif') }}" );
    setTimeout(function() {
      var randomHasExtraCoin = getRandomInt(1, 100);
      if (randomHasExtraCoin % 2 == 0) {
        var randomExtraCoin = getRandomInt(1, 3);
        if (randomExtraCoin == 1) {
          $("#ecoin").attr("src" , "{{ url('img/e_coin_a_1-6690e5a39edf579b70f03a7a3cad582094fa873e1c7fa78cb3a4b5b0d994ed06.png') }}" );
          $("#mecoin").attr("src" , "{{ url('img/e_coin_a_1-6690e5a39edf579b70f03a7a3cad582094fa873e1c7fa78cb3a4b5b0d994ed06.png') }}" );
        } else if (randomExtraCoin == 2) {
          $("#ecoin").attr("src" , "{{ url('img/e_coin_a_2-61ff201698671236302b518049bc45a8aa660ba9c6778d87743c1201e5cf9556.png') }}" );
          $("#mecoin").attr("src" , "{{ url('img/e_coin_a_2-61ff201698671236302b518049bc45a8aa660ba9c6778d87743c1201e5cf9556.png') }}" );
        } else if (randomExtraCoin == 3) {
          $("#ecoin").attr("src" , "{{ url('img/e_coin_a_3-440f7144192ff79d375918e064097c986dbf94522b09690b22704dd9cacf40fb.png') }}" );
          $("#mecoin").attr("src" , "{{ url('img/e_coin_a_3-440f7144192ff79d375918e064097c986dbf94522b09690b22704dd9cacf40fb.png') }}" );
        }
      } else {
        $("#ecoin").attr("src" , "{{ url('img/e_coin_d-d63d8cc408997aafca540806e7eda73e0917b4749d9ebde6f161ef19f9f0bedf.png') }}" );
        $("#mecoin").attr("src" , "{{ url('img/e_coin_d-d63d8cc408997aafca540806e7eda73e0917b4749d9ebde6f161ef19f9f0bedf.png') }}" );
      }
    }, 5 * 1000);
  }

  function randomOnlinePercent() {
    $.ajax("{{ url('/api/game/online_user') }}", {
      contentType: 'application/json',
      dataType: 'json',
      success: function (data) {
        $("#online-user").html('ຈໍານວນຜູ້ໃຊ້ ' + data.count);
        $("#m-online-user").html('ຈໍານວນຜູ້ໃຊ້ ' + data.count);
      },
    });
  }
  //$objs->casino

  function randomRoomPercent() {
    $.ajax("{{ url('/rooms/room_percents?casino='.$objs->casino) }}", {
      contentType: 'application/json',
      dataType: 'json',
      success: function (data) {
        let roomIds = $("[id^='room-percent-']").map(function() {
          return this.id;
        }).get();
        for (var i = 0; i < roomIds.length; i++) {
          let percent = getRandomInt(75, 99);
          $('#' + roomIds[i]).html('' + percent + '%');
          $('#m-' + roomIds[i]).html('' + percent + '%');
        }
      },
    });
  }

  

  function randomPercent() {
    var random = getRandomInt(75, 99);
    $('.progress-bar').attr('aria-valuenow', random).css('width', random + '%');
    $('#progress-value').text(random + '%');
    $('#mprogress-value').text(random + '%');
  }

  function addRow(status) {

    var newRow = $('<tr id="row' + round + '">');
    var cols = "<td class='text-center white d-flex justify-content-center align-items-center' style='border: 0px; font-size: 22px'> ຜົນ​ການ​ລົງ​ທຶນ​ " + round + "</td>";
    if (status == 'WIN') {
      cols += "<td class='text-center' style='border: 0px;'><img src='{{ url('img/result_win-d35fb795ff4055c949b8bf50629c278eae0162f80a87a8deb5c73054240700e5.png') }}' class='mr-0' style='height: 50px;'></td>"
    } else {
      cols += "<td class='text-center' style='border: 0px;'><img src='{{ url('img/result_lose-586a688278c79ad0242b6dc3fe9c1c73477907a940325764eea21988b92632e3.png') }}' class='mr-0' style='height: 50px;'></td>"
    }
    cols += "</tr>"
    newRow.append(cols);

    var newRowM = $('<tr id="row' + round + '">');
    var cols = "<td class='text-center white' style='border: 0px; font-size: 22px'> ຜົນ​ການ​ລົງ​ທຶນ​ " + round + "</td>";
    if (status == 'WIN') {
      cols += "<td class='text-right p-0' style='border: 0px;'><img src='{{ url('img/result_win-d35fb795ff4055c949b8bf50629c278eae0162f80a87a8deb5c73054240700e5.png') }}' class='mr-0' style='height: 50px;'></td>"
    } else {
      cols += "<td class='text-right p-0' style='border: 0px;'><img src='{{ url('img/result_lose-586a688278c79ad0242b6dc3fe9c1c73477907a940325764eea21988b92632e3.png') }}' class='mr-0' style='height: 50px;'></td>"
    }
    cols += "</tr>"
    newRowM.append(cols);

    $('#tableResults > tbody').prepend(newRow);
    $('#mtableResults > tbody').prepend(newRowM);

    $('#round-count').text('ເວ​ລາ ' + (round + 1));
    $('#mround-count').text('ເວ​ລາ ' + (round + 1));
  }

  function reset() {
    $('#loseModal').modal('hide');
    coinRound = 1;
    var obj = $('#round').text('ເວ​ລາ ' + coinRound);
    var obj = $('#mround').text('ເວ​ລາ ' + coinRound);
    // obj.html(obj.html().replace(/\n/g,'<br/>'));

    randomCoin();
    randomPercent();
  }

  function forceReset() {
    $('#loseModal').modal('hide');
    coinRound = 1;
    var obj = $('#round').text('ເວ​ລາ ' + coinRound);
    var obj = $('#mround').text('ເວ​ລາ ' + coinRound);

    round = 1;
    $('#round-count').text('ຄັ້ງທີ ' + round);
    $('#mround-count').text('ຄັ້ງທີ ' + round);
    // obj.html(obj.html().replace(/\n/g,'<br/>'));

    $('#tableResults > tbody').html("");
    $('#mtableResults > tbody').html("");

    randomCoin();
    randomPercent();
  }

  function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }

</script>

@stop('scripts')