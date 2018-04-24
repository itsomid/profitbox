@extends('layouts.app')
@section('breadcrumbs')
    @include('inspinia::layouts.main-panel.breadcrumbs', [
      'breadcrumbs' => [
      (object) [ 'title' => 'Dashboard', 'url' => route('panel') ],
      (object) [ 'title' => 'Add New Server', 'url' => route('panel') ]

      ]
    ])
@endsection
@section('content')
    <div class="container-fluid">
        <form action="{{route('panel/payment/review')}}" method="post" id="" class="form-horizontal">
            {{ csrf_field() }}
        <div class="well no-padding border-size-sm" style="border-color: #0f253c">
            <div class="row row-m-t">
                <div class="col-md-1">
                    <img src="/img/1.png" class="pull-right" width="50%" style="margin-top: -10px;">
                </div>
                <div class="col-md-11">
                    <h1 class="text-info">Initiative Information</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="row row-m-t">
                        <span>Choose a <strong>Title</strong> for your server</span>
                        </div>
                        <input type="text" name="bot_title" class="form-control" style="border-left: 3px solid #00a65a"
                               placeholder="MyServer" required>
                    </div>

                    <div class="form-group">
                        <div class="row row-m-t">
                            <span class="">Enter your <strong>Profit Trailer</strong> information</span>
                        </div>
                        <div class="row row-m-t">
                            <label class="col-sm-2" style="text-align: right">License</label>
                            <div class="col-sm-10">

                                <input type="text" name="pt_license_tb" id="pt_license_tb"
                                       style="border-left: 3px solid #0f253c" class="form-control">
                            </div>
                        </div>
                        <div class="row row-m-t">
                            <label class="col-sm-2" style="text-align: right">Exchange</label>
                            <div class="col-sm-10">
                                <select class="form-control m-b" style="border-left: 3px solid #0f253c"
                                        name="pt_exchange_se">
                                    <option>Binance</option>
                                    <option>Bittrex</option>
                                    <option>Hitbtc</option>
                                </select>
                            </div>
                        </div>
                        <div class="row row-m-t">
                            <span class="">Enter your <strong>Exchange</strong> information</span>
                        </div>
                        <div class="row row-m-t">
                            <label class="col-sm-2 control-label" style="text-align: right"> API Key</label>
                            <div class="col-sm-10">
                                <input type="text" name="pt_api_tb" id="pt_api_tb"
                                       style="border-left: 3px solid #0f253c" class="form-control">
                            </div>
                        </div>
                        <div class="row row-m-t">
                            <label class="col-sm-2 control-label" style="text-align: right"> Secret Key</label>
                            <div class="col-sm-10">
                                <input type="text" name="pt_secret_tb" id="pt_secret_tb"
                                       style="border-left: 3px solid #0f253c" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 " >
                    <div class="row row-m-t">
                        <span>Enter your <strong>PT-Feeder</strong> information</span>
                    </div>
                        <div id="ptf_box"  class="well" style=" border: 4px solid white">
                            <div class="row">
                                <div class="col-md-3">
                                    <label>
                                        <input type="checkbox" name="ptf_cb" id="ptf_cb" value="ptf_cb" >
                                        <i></i> PT-Feeder
                                    </label>
                                </div>
                                <label class="col-sm-2 control-label" style="text-align: right">API KEY</label>
                                <div class="col-sm-7">
                                    <input type="text" name="ptf_tb" id="ptf_tb" class="form-control"  style="border-left: 3px solid white"
                                           disabled required>
                                </div>
                            </div>
                        </div>
                    <div class="row row-m-t">
                        <span>Enter your <strong>PT-Magic</strong> information</span>
                    </div>

                    <div id="ptm_box" class="well" style=" border: 4px solid white">
                            <div class="row">
                                <div class="col-md-3">
                                    <label>
                                        <input type="checkbox" name="ptm_cb" id="ptm_cb" value="ptm_cb">
                                        <i></i> PT-Magic
                                    </label>
                                </div>
                                <label class="col-sm-2 control-label" style="text-align: right">API KEY</label>
                                <div class="col-sm-7">
                                    <input type="text" name="ptm_tb" id="ptm_tb" class=" form-control" style="border-left: 3px solid white"
                                           disabled required>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <hr style="border: 1px solid black">

                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row row-m-t">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <span>
                                Monthly Price
                    </span>
                    <h2 class="font-bold" id="price_lb">
                        $ 20.99
                    </h2>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-2 " style="text-align: right">
                    <div class="m-t-sm">
                        <div class="btn-group">
                            <button type="submit" id="btn" class="btn btn-primary btn-w-m"><i
                                        class="fa fa-shopping-cart"></i> Checkout
                            </button>
                            <a href="{{route('panel')}}" class="btn btn-white btn-w-m"> Cancel</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        </form>
    </div>


    <script type="text/javascript">

        $(document).ready(function () {
            var $ptf_tb = $('#ptf_tb');
            var $ptm_tb = $('#ptm_tb');
            var $price_lb = $('#price_lb');
            $('#ptf_cb').prop('checked', false);
            $('#ptm_cb').prop('checked', false);
            $('#ptf_tb').val('');
            $('#ptm_tb').val('');


            var $price = parseFloat('{{$price}}');


            $('#ptf_cb').click(function () {

                if ($('#ptf_cb').is(':checked')) {
                    $ptf_tb.prop('disabled', false);
                    $price = $price + 5.00;
                    $price_lb.text('$ ' + $price);
                    $('#ptf_box').css("border", "3px solid #13A87E");
                    $ptf_tb.css("border-left" , "2px solid black");

                }
                else {
                    $ptf_tb.prop('disabled', true);
                    $ptf_tb.prop('value', '');
                    $price = $price - 5.00;
                    $price_lb.text('$ ' + $price);
                    $('#ptf_box').css("border", "4px solid white");
                    $ptf_tb.css("border-left" , "3px solid white");

                }

            });
            $('#ptm_cb').click(function () {
                if ($('#ptm_cb').is(':checked')) {
                    $ptm_tb.prop('disabled', false);
                    $price = $price + 5.00;
                    $price_lb.text('$ ' + $price);
                    $('#ptm_box').css("border", "3px solid #13A87E");
                    $ptm_tb.css("border-left" , "2px solid black");
                }
                else {
                    $ptm_tb.prop('disabled', true);
                    $ptm_tb.prop('value', '');
                    $price = $price - 5.00;
                    $price_lb.text('$ ' + $price);
                    $('#ptm_box').css("border", "4px solid white");
                    $ptm_tb.css("border-left" , "3px solid white");

                }

            });

        });

    </script>



@endsection