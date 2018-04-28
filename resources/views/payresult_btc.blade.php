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
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <div class="alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <strong> Important! <br>
                        Please don't forget about your wallet's commission when transferring the funds (we recommend
                        checking the exact commission with your wallet provider). </strong>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-3 text-center">
                Please transfer <strong>0.005 BTC</strong> to address <strong>3NneAbaC5vtuvkJcrLoCzjpcqYr8g5GJm5</strong> to finalize your purchase.<br>
            </div>
            <div class="col-md-6 col-md-offset-3 text-center">
                <img src="https://api.qrserver.com/v1/create-qr-code/?data=bitcoin:?amount=&amp;size=200x200" alt="" title="" style="margin:25px auto">
            </div>
            <div class="col-md-6 col-md-offset-3 text-center">
                <a class="btn btn-link" href="bitcoin:3NneAbaC5vtuvkJcrLoCzjpcqYr8g5GJm5?amount=0.0129&amp;label=11223072">bitcoin:?amount=&amp;label=11223072</a>
            </div>
        </div>
    {{--</div>--}}
    {{--<div class="container-fluid">--}}
        {{--@if(property_exists($payment->payment_info,'reference_id'))--}}

            {{--<span >{{$payment->payment_info->reference_id}}</span>--}}
        {{--@else--}}
            {{--<span >موجود نیست</span>--}}
        {{--@endif--}}
    {{--</div>--}}
    <script type="text/javascript">

    </script>

@endsection