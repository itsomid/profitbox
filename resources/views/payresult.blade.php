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
    <div class="container-fluid">
        @if(property_exists($payment->payment_info,'reference_id'))

            <span >{{$payment->payment_info->reference_id}}</span>
        @else
            <span >موجود نیست</span>
        @endif
    </div>
    <script type="text/javascript">

    </script>

@endsection