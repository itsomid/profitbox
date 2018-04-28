@extends('layouts.app')
@section('breadcrumbs')
    @include('inspinia::layouts.main-panel.breadcrumbs', [
      'breadcrumbs' => [
      (object) [ 'title' => 'Dashboard', 'url' => route('panel') ],
        (object) [ 'title' => 'Payments', 'url' => route('panel') ]

      ]
    ])
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">

                        <table class="footable table table-stripped toggle-arrow-tiny default footable-loaded"
                               data-page-size="15">
                            <thead>
                            <tr>

                                <th class="footable-visible footable-first-column footable-sortable">Order ID<span
                                            class="footable-sort-indicator"></span></th>
                                <th data-hide="phone" class="footable-visible footable-sortable">Server Name<span
                                            class="footable-sort-indicator"></span></th>
                                <th data-hide="phone" class="footable-visible footable-sortable">Amount<span
                                            class="footable-sort-indicator"></span></th>
                                <th data-hide="phone" class="footable-visible footable-sortable">Payment Method<span
                                            class="footable-sort-indicator"></span></th>
                                <th data-hide="phone" class="footable-visible footable-sortable">Date added<span
                                            class="footable-sort-indicator"></span></th>

                                <th data-hide="phone" class="footable-visible footable-sortable">Payment Status<span
                                            class="footable-sort-indicator"></span></th>
                                <th data-hide="phone" class="footable-visible footable-sortable">Purpose of payment<span
                                            class="footable-sort-indicator"></span></th>
                                <th class="text-right footable-visible footable-last-column footable-sortable">
                                    Action<span class="footable-sort-indicator"></span></th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($payments as $payment)
                                <tr class="footable-even" style="display: table-row;">
                                    <td class="footable-visible footable-first-column"><span
                                                class="footable-toggle"></span>
                                        @if(property_exists($payment->payment_info,'reference_id'))
                                        {{$payment->payment_info->reference_id}}
                                            @else
                                            Not available
                                            @endif
                                    </td>
                                    <td class="footable-visible">
                                        {{$payment->vps->title}}
                                    </td>
                                    <td class="footable-visible">
                                            {{$payment->amount}}
                                    </td>
                                    <td class="footable-visible">
                                            {{$payment->type}}
                                    </td>
                                    <td class="footable-visible">
                                       {{$payment->vps->created_at->toDateString()}}
                                    </td>

                                    <td class="footable-visible">
                                        @if($payment->status == 'successful')
                                        <span class="label label-primary">Successful</span>
                                            @elseif($payment->status == 'failed')
                                            <span class="label label-danger">Failed</span>
                                        @elseif($payment->status == 'pending')
                                            <span class="label label-warning">Pending</span>
                                        @elseif($payment->status == 'canceled')
                                            <span class="label label-danger">Canceled</span>
                                        @elseif($payment->status == 'initializing')
                                            <span class="label label-success">Initializing</span>
                                            @endif
                                    </td>
                                    <td class="footable-visible">
                                        <span class=" ">
                                            @if(($payment->payment_info->scheme) == "profit")
                                                Payment for New Server
                                                @endif
                                                @if(($payment->payment_info->scheme) == "renew")
                                                    Payment fo Renew {{$payment->vps->title}}
                                                @endif
                                        </span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        @if($payment->status != 'successful')
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-money"></i>  Submit Payment</button>
                                            @else
                                            no Action
                                            @endif
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".nav li").removeClass("active");//this will remove the active class from
                                               //previously active menu item
            $('#payment').addClass('active');

        });
    </script>

@endsection