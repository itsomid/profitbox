@extends('layouts.app')
@section('breadcrumbs')
    @include('inspinia::layouts.main-panel.breadcrumbs', [
      'breadcrumbs' => [
      (object) [ 'title' => 'Dashboard', 'url' => route('panel') ],
      (object) [ 'title' => 'Add New Server', 'url' => route('panel/addserver') ],
      (object) [ 'title' => 'Payment Review', 'url' => route('panel') ],

      ]
    ])
@endsection
@section('content')
    <div class="wrapper wrapper-content">
        <form action="{{route('panel/payment/create')}}" method="POST" id="" class="form-horizontal">
            {{ csrf_field() }}
            <div class="well no-padding border-size-sm" style="border-color: #0f253c">
                <div class="row row-m-t">
                    <div class="col-md-1">
                        <img src="/img/2.png" class="pull-right" width="50%" style="margin-top: -10px;">
                    </div>
                    <div class="col-md-11">
                        <h1 class="text-info">Server Details</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                        <div class="table-responsive invoice-table">
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
                                        Profit Trailer
                                    </td>
                                    <td></td>
                                    <td>$20.99</td>
                                </tr>
                                @if(session()->has('ptf_api'))
                                    <tr>
                                        <td>
                                            <div>PT-Feeder</div>
                                        </td>
                                        <td></td>
                                        <td>$5.00</td>
                                    </tr>
                                @endif
                                @if(session()->has('ptm_api'))
                                    <tr>
                                        <td>
                                            <div>PT-Magic</div>

                                        </td>
                                        <td></td>
                                        <td>$5.00</td>
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
                                    <td id="total_price_lb">${{$monthly_price}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="well no-padding border-size-sm" style="border-color: #0f253c">
                <div class="row row-m-t">
                    <div class="col-md-1">
                        <img src="/img/3.png" class="pull-right" width="50%" style="margin-top: -10px;">
                    </div>
                    <div class="col-md-11">
                        <h1 class="text-info">Length of Term</h1>
                    </div>
                </div>
                <div class="row row-m-t">
                    <div class="col-xs-10 col-xs-offset-1">
                        <h3>Lock in your savings with a year term.</h3>
                    </div>
                </div>

                <div class="row" style="display: flex">
                    <div class="col-md-2 col-xs-12 col-md-offset-2" style="display: grid ">
                        <div class="well" style="border:2px solid #0f253c">
                            <div class="row text-center">
                                <div class="inline">
                                    <input type="radio" id="month_rb" value="1" name="period" checked>
                                </div>
                                <label for="month_rb" class=" inline">
                                    <h2><strong>1 Month</strong></h2>
                                </label>
                            </div>
                            <div class="row text-center">
                                <span> A month for your<br>small needs.</span>
                            </div>
                            <div class="row text-center">
                                <h2 style="color: #13A87E"><strong>${{$monthly_price}}/mo</strong></h2>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-2 col-xs-12">
                        <div class="well" style="border:2px solid #0f253c">

                            <div class="row text-center">
                                <div class="inline">
                                    <input type="radio" id="3month_rb" value="3" name="period">
                                </div>
                                <label for="3month_rb" class=" inline">
                                    <h2><strong>3 Month</strong></h2>
                                </label>
                            </div>
                            <div class="row text-center">
                                <h5 class="text-warning">On Sale (Save 45%)</h5>
                            </div>
                            <div class="row text-center">
                                <h2 style="color: #13A87E"><strong>$15.99/mo</strong></h2>
                                <span class="h5"><strike>$20.99/mo</strike></span>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-2 col-xs-12">
                        <div class="well" style="border:2px solid #0f253c">


                            <div class="row text-center">
                                <div class="inline">
                                    <input type="radio" id="6month_rb" value="3" name="period">
                                </div>
                                <label for="6month_rb" class=" inline">
                                    <h2><strong>6 Month</strong></h2>
                                </label>
                            </div>
                            <div class="row text-center">
                                <h5 class="text-warning">On Sale (Save 45%)</h5>
                            </div>
                            <div class="row text-center">
                                <h2 style="color: #13A87E"><strong>$10.99/mo</strong></h2>
                                <span class="h5"><strike>$20.99/mo</strike></span>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-2 col-xs-12" >
                        <div class="well" style="border:2px solid #0f253c">
                            <div class="row text-center">
                                <div class="inline">
                                    <input type="radio" id="year_rb" value="12" name="period">
                                </div>
                                <label for="year_rb" class=" inline">
                                    <h2><strong>12 Month</strong></h2>
                                </label>
                            </div>
                            <div class="row text-center">
                                <h5 class="text-warning">On Sale (Save 45%)</h5>
                            </div>
                            <div class="row text-center">
                                <h2 style="color: #13A87E"><strong>$5.99/mo</strong></h2>
                                <span class="h5"><strike>$20.99/mo</strike></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 hidden-xs">
                    </div>
                </div>
            </div>
            <div class="well no-padding border-size-sm" style="border-color: #0f253c">
                <div class="row row-m-t">
                    <div class="col-md-1">
                        <img src="/img/4.png" class="pull-right" width="50%" style="margin-top: -10px;">
                    </div>
                    <div class="col-md-11">
                        <h1 class="text-info">Payment Method</h1>
                    </div>
                </div>
                <div class="row row-m-t">
                    <div class="col-xs-10 col-xs-offset-1">
                        <hr>
                        <h3>Select One of the Methods below</h3>
                    </div>
                </div>
                <div class="row row-m-t">
                    <div class="col-md-2 col-xs-4 col-md-offset-1">
                        <div class="radio radio-inline">
                            <input type="radio" id="bitcoin_rb" value="bitcoin" name="payment_method" required>
                            <label for="bitcoin_rb"><img class="img-sm" src="/img/bitcoin.png"> Bitcoin
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <div class="radio radio-inline">
                            <input type="radio" id="paypal_rb" value="paypal" name="payment_method">
                            <label for="paypal_rb"><img class="img-sm" src="/img/paypal.png"> Paypal
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <div class="radio radio-inline">
                            <input type="radio" id="toman_rb" value="toman" name="payment_method">
                            <label for="toman_rb"><img class="img-sm" src="/img/iran.png"> Toman IRT
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4 text-right">
                        <span>
                                Total Due:
                            </span>
                        <h1 class="font-bold" id="price_lb">
                            ${{$monthly_price}}
                        </h1>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div class="row row-m-t">
                    <div class="col-md-3 col-md-offset-8 col-xl-2 col-xl-offset-9 text-right ">
                    <a href="{{route('panel/addserver')}}" class="btn btn-outline btn-default" style="border:2px solid #0f253c"><i
                                    class="fa fa-arrow-left"></i> Back</a>
                        <button class="btn btn-primary" type="submit"><i class="fa fa-dollar"></i>
                            Make A Payment
                        </button>

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
            var $total_lb = $('#total_price_lb');
            var $price;
            var $monthly_price = parseFloat('{{$monthly_price}}');

            $monthly.click(function () {

                $price_lb.text('$' + $monthly_price);
                $total_lb.text('$' + $monthly_price);

            });
            $3mo_rb.click(function () {
                $price = ($monthly_price - 5) * 3;
                $price_lb.text('$' + $price);
                $total_lb.text('$' + $price);

            });
            $6mo_rb.click(function () {
                $price = ($monthly_price - 10) * 6;
                $price_lb.text('$' + $price);
                $total_lb.text('$' + $price);

            });
            $year_rb.click(function () {
                $price = ($monthly_price - 15) * 12;
                $price_lb.text('$' + $price);
                $total_lb.text('$' + $price);
            });
            $('#bitcoin_rb').click(function () {
                $price_lb.text(0.005 + 'BTC');
                $total_lb.text('$' + $price);
            });
            {{--$('#paypal_rb').click(function () {--}}
                {{--$price_lb.text('$' + $price);--}}
            {{--});--}}

            {{--$('#toman_rb').click(function () {--}}

                {{--$.ajax({--}}
                    {{--url: "{{route('panel/payment/toman')}}",--}}
                    {{--type: "GET",--}}

                    {{--data: {--}}
                        {{--_token: "{{csrf_token()}}"--}}
                    {{--},--}}
                    {{--success:function(data){--}}
                        {{--$price_lb.text( data + ' IRT')--}}
                    {{--},error:function(){--}}
                        {{--console.log('error');--}}
                    {{--}--}}
                {{--});--}}
                {{--// $price_lb.text('$' + )--}}
            {{--});--}}

        });

    </script>

@endsection