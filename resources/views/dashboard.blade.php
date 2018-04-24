@extends('layouts.app')
@section('breadcrumbs')
    @include('inspinia::layouts.main-panel.breadcrumbs', [
      'breadcrumbs' => [
        (object) [ 'title' => 'Dashboard', 'url' => route('panel') ],

      ]
    ])
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-10">
            <div class="ibox">


                <div class="ibox-content" style="background-color: #D3D2D3;">
                    <div class="container-fluid">
                        <div class="row" style="margin-bottom: 30px;">
                            <a href="{{route('panel/addserver')}}" class="btn btn-primary  pull-right">
                                <span class="glyphicon glyphicon-plus font-bold" aria-hidden="true"></span>
                            </a>
                        </div>
                        @foreach($vps as $vp)
                            <div class="row well" style="    background-color: #DFDFDF; border: 4px solid #fff;">
                                <div class="row ">
                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
                                        <img src="img/tick.png" width="70%" style="margin-top: -30px;">
                                        <div class="switch space-30">
                                            <div class=" onoffswitch" id="ss">
                                                <input type="checkbox" class=" onoffswitch-checkbox"
                                                       id="switch{{$vp->id}}" value="{{$vp->id}}"
                                                       onclick="myFunction(this)"
                                                       @if($vp->status == 'active')
                                                       checked
                                                        @endif>
                                                <label class="onoffswitch-label" for="switch{{$vp->id}}">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-2">
                                        <h2>Server Name:</h2>
                                        <h3>{{$vp->title}}</h3>
                                        <h4 class="text-black space-30 inline">Status: </h4>
                                        <h4 class="text-info inline">{{$vp->status}}</h4>
                                    </div>
                                    <div class="col-md-1 bs-callout-danger">

                                    </div>
                                    <div class="col-md-1">
                                        <h5 class="">Service(s):</h5>

                                    </div>
                                    <div class="col-md-2">
                                        <h3>Profit Trailer</h3>
                                        @if($vp->bot_details["feeder_api"] != "")
                                            <h4 class="text-info">+Pt-Feeder</h4>
                                        @endif

                                        @if($vp->bot_details["magic_api"] != "")
                                            <h4 class="text-info bo">+Pt-Magic</h4>
                                        @endif
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-2">
                                        <p>Expiration Date:</p>
                                        <h3>{{$vp->expire_date->format('d/m/Y')}}</h3>
                                        <form action="{{route('panel/bot/controller')}}" method="POST"
                                              id="modal-form_switch{{$vp->id}}" class="modal fade" aria-hidden="true">
                                            {{ csrf_field() }}
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <p>Are You Sure ?</p>
                                                            <div>
                                                                <button id="switch{{$vp->id}}" data-dismiss="modal"
                                                                        type="button"
                                                                        class="btn btn-primary btn-lg active"
                                                                        onclick="myFunction2(this)">Cancel
                                                                </button>
                                                                <button type="submit"
                                                                        class="btn btn-default btn-lg active"
                                                                        name="vps_id" value="{{$vp->id}}">OK
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-md-2 col-lg-1">
                                        <form action="{{route('panel/renew')}}" method="post">
                                            {{csrf_field()}}
                                            <button class="btn btn-w-m btn-primary center-margin center" name="vps_id" value="{{$vp->id}}" type="submit">Renew</button>
                                        </form>
                                        <button class="btn btn-w-m btn-danger space-15" type="submit">Remove</button>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>

        function myFunction(element) {

            var $switch = element.id;
            var $switch_val = element.value;

            if ($('#' + $switch).prop('checked')) {
                $("#modal-form_" + $switch).modal('show');

            } else {

                $("#modal-form_" + $switch).modal('show');
            }
        }

        function myFunction2(element) {
            var $switch = element.id;

            $('#' + $switch).prop('checked', true);
        }


    </script>


@endsection