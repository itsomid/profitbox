<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<form id="pm_form" name="pm_form" action="https://perfectmoney.is/api/step1.asp" method="POST">
	{{ csrf_field() }}
    <input type="hidden" name="PAYEE_ACCOUNT" value="{{ $PAYEE_ACCOUNT }}">
    <input type="hidden" name="PAYEE_NAME" value="{{ $PAYEE_NAME }}">
    <input type="hidden" name="PAYMENT_AMOUNT" value="{{ $PAYMENT_AMOUNT }}">
    <input type="hidden" name="PAYMENT_UNITS" value="{{ $PAYMENT_UNITS }}">
	<input type="hidden" name="PAYMENT_URL" value="{{ $PAYMENT_URL }}">
	<input type="hidden" name="NOPAYMENT_URL" value="{{ $NOPAYMENT_URL }}">
	@if($PAYMENT_ID)
		<input type="hidden" name="PAYMENT_ID" value="{{ $PAYMENT_ID }}">
	@endif
	@if($STATUS_URL)
		<input type="hidden" name="STATUS_URL" value="{{ $STATUS_URL }}">
	@endif
	@if($PAYMENT_URL_METHOD)
		<input type="hidden" name="PAYMENT_URL_METHOD" value="{{ $PAYMENT_URL_METHOD }}">
	@endif
	@if( $NOPAYMENT_URL_METHOD )
		<input type="hidden" name="NOPAYMENT_URL_METHOD" value="{{ $NOPAYMENT_URL_METHOD }}">
	@endif

	@if( $MEMO )
		<input type="hidden" name="SUGGESTED_MEMO" value="{{ $MEMO }}">
	@endif

</form>
</body>
<script type="text/javascript">
    $(document).ready(function () {
		$('#pm_form').submit();
});
</script>