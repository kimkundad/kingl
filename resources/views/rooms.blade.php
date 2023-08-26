@extends('layouts.template')


@section('title')
kingbarlaos ສູດບາທີ່ດີທີ່ສຸດ ແລະ ຖືກສຸດໃນປະເທດໄທ ອັນດັບ 1
@stop

@section('stylesheet')

<style>
    .col-4-new {
    padding-right: 2px !important;
    padding-left: 2px !important;
    min-height: 90px;
    margin-bottom: 15px;
}
.text-racking-room-p4 {
    font-size: 16px;
    color: #fff;
    top: 10%;
    left: 53%;
    transform: translate(-50%, 0);
    position: absolute;
    text-align: center;
    text-shadow: 2px 2px #000;
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


<div class="container-fluid bg-casino">


    <div id="content">
    <div class="row">
    <div class="col-6">
    <img style="height: 80px" src="{{ url('img/logo-2fd1fc0bbf766da18a075f6a6a866ae0ede623df9077e5e6fbdb2616ac07995c.png') }}" alt="Logo">
    </div>
    <div class="col-6"></div>
    </div>
    <div class="row p-0 m-0">
    <div class="col-6">
    <a href="{{ url('/') }}">
    <img style="height: 40px" src="{{ url('img/ic_back_to_casino.png') }}" alt="Ic back to casino">
    </a>
    </div>
    <div class="col-6">
    </div>
    </div>
    <div class="container h100">
    <div class="row">
        <div class="col-0 col-sm-0 col-md-3 col-lg-4 p-0"></div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 p-0">
            <img class="img-fluid w-100 animate__animated animate__zoomIn" src="{{ url('images/game/game/'.$game->game_image) }}" alt="{{$game->game_name}}">
        </div>
        <div class="col-0 col-sm-0 col-md-3 col-lg-4 p-0"></div>
    </div>
    <div class="row mt-3">
        @php
        $s = 0.1;
        @endphp
    @if(isset($objs))
        @foreach($objs as $u)
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 p-0 animate__animated animate__slideInLeft" style="animation-delay: {{$s}}s;">
                <div id="room-percent-{{ $u->room }}" class="room-percent-right">{{ $u->percent }}%</div>
                <div class="image-container m-3 set-room-po1">
                    {{-- <a data-remote="true" href="{{ url('game-room-'.$u->casino.'-'.$u->room) }}"> --}}
                        <a data-remote="true" class="onsendroom" data-casinox="{{$u->casino}}" data-roomx="{{$u->room}}">
                        <img class="w-100" src="{{ url('images/game/room/'.$game->room_image) }}" alt="{{ $u->room }}">
                        <p class="text-racking-room-p4">{{ $u->room }} </p>
                    </a> 
                </div>
            </div>
            @php
        $s+=0.1;
        @endphp
        @endforeach
    @endif
    
    </div>
    </div>
    </div>
    </div>

    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">กรุณากรอกรายละเอียด</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        </div>
        <div class="modal-body">
        <form>
        <input type="hidden" id="selectedRoom">
        <div class="form-group">
        <label for="funding" class="col-form-label">ใส่เงินทุน:</label>
        <input type="number" id="funding" class="form-control" min="0" data-bind="value:replyNumber">
        </div>
        <div class="form-group">
        <label for="profit" class="col-form-label">ใส่กำไร:</label>
        <input type="number" id="profit" class="form-control" min="0" data-bind="value:replyNumber">
        </div>
        </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-info" id="formModalSubmit">ข้าม</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="button" class="btn btn-primary" id="formModalSubmit">ตกลง</button>
        </div>
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

<script>

    var selectedRoom = 0;
    var room = '';
  
    $(document).ready(function() {
      randomPercent();
      setInterval(function() {
        randomPercent();
      }, 60 * 1000);

      
      $('.onsendroom').on('click', function () {
        var $el = $(this);
        console.log($el.data('casinox'), $el.data('roomx'));

        $("#loadingMessage").text("ກຳລັງວິເຄາະຜົນຫ້ອງ " + $el.data('roomx') + " ...");
        $('#loadingModal').modal('show');
        setTimeout(function() {
          hideModal('#loadingModal');
          window.location = '{{ url('/')}}/game-room-' + $el.data('casinox') + '-' + $el.data('roomx')
        }, 5000);

      });

      $('#formModal').on('click', '#formModalSubmit', function (e) {
        let funding = $('#funding').val();
        let profit = $('#profit').val();
        hideModal('#formModal');
  
        let casino = "{{$game->game_name_short}}";
  
        $("#loadingMessage").text("ກຳລັງວິເຄາະຜົນຫ້ອງ " + room + " ...");
        $('#loadingModal').modal('show');
        setTimeout(function() {
          hideModal('#loadingModal');
          window.location = '/game?casino=' + casino + '&room=' + room
        }, 5000);
    });
  
    function randomPercent() {
      $.ajax("{{ url('/rooms/room_percents?casino='.$game->game_name_short) }}", {
        contentType: 'application/json',
        dataType: 'json',
        success: function (data) {
          console.log(data);
          let roomIds = $("[id^='room-percent-']").map(function() {
            return this.id;
          }).get();
          for (var i = 0; i < roomIds.length; i++) {
            let percent = getRandomInt(75,100)
            $('#' + roomIds[i]).html('' + percent + '%');
          }
        },
      });
    }
  
    function getRandomInt(min, max) {
      min = Math.ceil(min);
      max = Math.floor(max);
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }
  
    function hideModal(id) {
      $(id).modal('hide');
      $('body').removeClass('modal-open');
      $('.modal-backdrop').remove();
    }
    });
  
  </script>

@stop('scripts')