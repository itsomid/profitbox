@extends('layouts.app')
@section('breadcrumbs')
    @include('inspinia::layouts.main-panel.breadcrumbs', [
      'breadcrumbs' => [
      (object) [ 'title' => 'Dashboard', 'url' => route('panel') ],
      (object) [ 'title' => 'Renew Server', 'url' => route('panel') ]

      ]
    ])
@endsection
@section('content')
    <div class="container-fluid">
        <form action="{{route('panel/renew/payment')}}" method="POST" id="" class="form-horizontal">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-7">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h3><i class="fa fa-bars"></i> Select term length</h3>
                        </div>
                        <div class="ibox-content">
                            <div class="row row-m-t">
                                <div class="col-xs-12">
                                    <h3>Lock in your savings with a year term.</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-1 col-sm-1">
                                    <div class="">
                                        <input type="radio" id="month_rb" value="1" name="period" checked>
                                    </div>
                                </div>
                                <label for="month_rb" class="col-sm-11">
                                    <div class="col-xs-11 col-sm-6">
                                        <h3><strong>1 month</strong></h3>
                                    </div>
                                    <div class="col-xs-12 col-sm-5">
                                        <h2 class="text-warning"><strong>${{$vps->monthly_price}}/mo</strong></h2>
                                    </div>
                                </label>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-1 col-sm-1">
                                    <div class="">
                                        <input type="radio" id="3month_rb" value="3" name="period">
                                    </div>
                                </div>
                                <label for="3month_rb" class="col-sm-11">
                                    <div class="col-xs-11 col-sm-6">
                                        <h3><strong>3 month</strong></h3>
                                    </div>
                                    <div class="col-xs-12 col-sm-5 ">
                                        <h2 class="text-warning"><strong>$15.99/mo</strong></h2>
                                        <span class="h5"><strike>$5.99/mo</strike></span>
                                        <h5 class="text-warning">On Sale (Save 45%)</h5>
                                    </div>
                                </label>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-1 col-sm-1">
                                    <div class="">
                                        <input type="radio" id="6month_rb" value="6" name="period">
                                    </div>
                                </div>
                                <label for="6month_rb" class="col-sm-11">
                                    <div class="col-xs-11 col-sm-6">
                                        <h3><strong>6 month</strong></h3>
                                    </div>
                                    <div class="col-xs-12 col-sm-5 ">
                                        <h2 class="text-warning"><strong>$10.99/mo</strong></h2>
                                        <span class="h5"><strike>$10.99/mo</strike></span>
                                        <h5 class="text-warning">On Sale (Save 45%)</h5>
                                    </div>
                                </label>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-1 col-sm-1">
                                    <div class="">
                                        <input type="radio" id="year_rb" value="12" name="period">
                                    </div>
                                </div>
                                <label for="year_rb" class="col-sm-11">
                                    <div class="col-xs-11 col-sm-6">
                                        <h3><strong>12 month</strong></h3>
                                    </div>
                                    <div class="col-xs-12 col-sm-5 ">
                                        <h2 class="text-warning"><strong>$5.99/mo</strong></h2>
                                        <span class="h5"><strike>$15.99/mo</strike></span>
                                        <h5 class="text-warning">On Sale (Save 45%)</h5>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h3><i class="fa fa-money"></i> Payment method</h3>
                        </div>
                        <div class="ibox-content">
                            <span>
                                Amount Due:
                            </span>
                            <h2 class="font-bold" id="price_lb">
                                ${{$vps->monthly_price}}
                            </h2>
                            <hr>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="i-checks radio radio-inline">
                                        <input type="radio" id="inlineRadio1" value="bitcoin" name="payment_method" >
                                        <label for="inlineRadio1"><img class="img-sm" src="/img/bitcoin.png"> Bitcoin
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="i-checks radio radio-inline">
                                        <input type="radio" id="inlineRadio2" value="paypal" name="payment_method">
                                        <label for="inlineRadio2"><img class="img-sm" src="/img/paypal.png"> Paypal
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="i-checks radio radio-inline">
                                        <input type="radio" id="inlineRadio3" value="toman" name="payment_method" checked>
                                        <label for="inlineRadio3"><img class="img-sm" src="/img/iran.png"> Toman IRT
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h3><i class="glyphicon glyphicon-plus-sign"></i> Your Bot Server Details({{$vps->title}})</h3>
                    </div>
                    <div class="ibox-content">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="table-responsive m-t">
                                        <table class="table invoice-table">
                                            <thead>
                                            <tr>
                                                <th>Item List</th>
                                                <th></th>
                                                <th>Total Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div><strong>Profit Trailer</strong></div>
                                                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.
                                                    </small>
                                                </td>
                                                <td></td>
                                                <td>$26.00</td>
                                            </tr>
                                            @if(session()->has('ptf_api'))
                                                <tr>
                                                    <td>
                                                        <div><strong>PT-Feeder</strong></div>

                                                    </td>
                                                    <td></td>
                                                    <td>$80.00</td>
                                                </tr>
                                            @endif
                                            @if(session()->has('ptm_api'))
                                                <tr>
                                                    <td>
                                                        <div><strong>PT-Magic</strong></div>

                                                    </td>
                                                    <td></td>
                                                    <td>$420.00</td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                        <table class="table invoice-total">
                                            <tbody>
                                            <tr>
                                                <td style="color: limegreen">Discount :</td>
                                                <td>$0.0</td>
                                            </tr>
                                            <tr>
                                                <td><strong>TOTAL :</strong></td>
                                                <td>$1261.98</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <hr>
                                        <div class="">
                                            <button class="btn btn-primary pull-right" name="vps_id" value="{{$vps->id}}"><i class="fa fa-dollar"></i>
                                                Make A Payment
                                            </button>
                                            <a href="{{route('panel')}}" class="btn btn-white"><i
                                                        class="fa fa-arrow-left"></i> Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            var $monthly = $('#month_rb');
            var $3mo_rb = $('#3month_rb');
            var $6mo_rb = $('#6month_rb');
            var $year_rb = $('#year_rb');
            var $price_lb = $('#price_lb');
            var $price;
            var $monthly_price = parseFloat('{{$vps->monthly_price}}');

            $monthly.click(function () {
                $price_lb.text('$' + $monthly_price);

            });
            $3mo_rb.click(function () {
                $price = ($monthly_price - 5) * 3;
                $price_lb.text('$' + $price);

            });
            $6mo_rb.click(function () {
                $price = ($monthly_price - 10) * 6;
                $price_lb.text('$' + $price);

            });
            $year_rb.click(function () {
                $price = ($monthly_price - 15) * 12;
                $price_lb.text('$' + $price);
            });

        });

    </script>

@endsection