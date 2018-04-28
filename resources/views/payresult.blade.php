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
            <div class="col-md-2 col-md-offset-5  " style="background-color: #13A87E">
                @if($payment->status == "successful")
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
                            @elseif($payment->type == 'paypal')
                                <small>Amount: {{$payment->amount}} Paypal</small>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <script type="text/javascript">

    </script>

@endsection