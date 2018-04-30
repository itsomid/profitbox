@extends('layouts.app')
@section('breadcrumbs')
    @include('inspinia::layouts.main-panel.breadcrumbs', [
      'breadcrumbs' => [
      (object) [ 'title' => 'Dashboard', 'url' => route('panel') ],
      (object) [ 'title' => 'Payment Result', 'url' => route('panel') ]

      ]
    ])
@endsection
@section('content')
    <div class="wrapper wrapper-content">
        <div class="row" style="margin-top: 150px">
            @if($payment->status == "successful")
                <div class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-4 col-lg-2 col-lg-offset-5 " style="background-color: #13A87E">
                    <div class="row row-m-t text-center">
                        <img src="/img/Su.png" class="" width="70%" style="margin-top: -115px">
                    </div>
                    <div class="row text-center">
                        <span class="text-white">Your transaction completed</span>
                        <h1 class="text-white">Successfully</h1>

                    </div>
                    <div class="row" style="background-color: white; margin-bottom: 2px; padding-bottom: 20px">

                        <div class="text-center" style="padding-top: 10px">
                            @if(property_exists($payment->payment_info,'reference_id'))

                                <small>Transaction Code: {{$payment->payment_info->reference_id}}</small>
                            @else
                                <span>موجود نیست</span>
                            @endif
                            <br>
                            @if($payment->type == 'toman')
                                <small>Amount: {{$payment->amount}} IRT</small>
                            @elseif($payment->type == 'bitcoin')
                                <small>Amount: {{$payment->amount}} BTC</small>
                            @elseif($payment->type == 'pm')
                                <small>Amount: {{$payment->amount}} Perfect Money</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-4 col-lg-2 col-lg-offset-5 text-center" style="padding-top: 30px">
                    <a href="{{route('panel')}}" type="button" class="btn  btn-primary btn-block btn-lg" style="background-color: #24313E;border-color: #24313E; border-radius: 0px">back to ProfitBox</a>
                </div>
            @else
                <div class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-4 col-lg-2 col-lg-offset-5 " style="background-color: #24313E">
                    <div class="row row-m-t text-center">
                        <img src="/img/failed.png" class="" width="70%" style="margin-top: -115px">
                    </div>
                    <div class="row row-m-t text-center">
                        <span class="text-white">Your transaction</span>
                        <h1 class="text-white">Failed</h1>

                    </div>
                    <div class="row" style="background-color: white; margin-bottom: 2px; padding-bottom: 20px">
                        <div class="text-center" style="padding-top: 10px">
                            @if(property_exists($payment->payment_info,'reference_id'))

                                <small>Transaction Code: {{$payment->payment_info->reference_id}}</small>
                            @else
                                <small>Transaction Code: Not available</small>
                            @endif
                            <br>
                            @if($payment->type == 'toman')
                                <small>Amount: {{$payment->amount}} IRT</small>
                            @elseif($payment->type == 'bitcoin')
                                <small>Amount: {{$payment->amount}} BTC</small>
                            @elseif($payment->type == 'pm')
                                <small>Amount: {{$payment->amount}} Perfect Money</small>
                            @endif

                        </div>
                    </div>

                </div>

                    <div class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-4 col-lg-2 col-lg-offset-5 text-center" style="padding-top: 30px">
                        <a type="button" class="btn  btn-primary btn-block btn-lg" style="background-color: #13A87E;border-color: #13A87E; border-radius: 0px;margin-bottom: 10px">Try Again</a>
                        <a href="{{route('panel')}}" type="button" class="btn  btn-primary btn-block btn-lg" style="background-color: #24313E;border-color: #24313E; border-radius: 0px">back to ProfitBox</a>
                    </div>

            @endif
        </div>
    </div>
    <script type="text/javascript">

    </script>

@endsection