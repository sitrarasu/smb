<!DOCTYPE html>
<html>
<head>
<title>Citrus Pay</title>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"> </script>
<script src="https://icp.citruspay.com/js/citrus.js"> </script>
<script src="https://icp.citruspay.com/js/jquery.payment.min.js"> </script>

<script type="text/javascript">
	/** Add Keys **/
    CitrusPay.Merchant.Config = {
        // Merchant details
        Merchant: {
            accessKey: 'A904C3LH2P24JN5A6D9W', //Replace with your access key
            vanityUrl: 'smb'  //Replace with your vanity URL
        }
    };
	
	/** Payment Options **/
	// fetchPaymentOptions();
    
    function handleCitrusPaymentOptions(citrusPaymentOptions){
        if (citrusPaymentOptions.netBanking != null)
            for (i = 0; i < citrusPaymentOptions.netBanking.length; i++) {
                var obj = document.getElementById("citrusAvailableOptions");
                var option = document.createElement("option");
                option.text = citrusPaymentOptions.netBanking[i].bankName;
                option.value = citrusPaymentOptions.netBanking[i].issuerCode;
                obj.add(option);
            }
    }
	
	/** Error Handler **/
	function citrusServerErrorMsg(errorResponse) {
        alert(errorResponse);
        console.log(errorResponse);
    }
    function citrusClientErrMsg(errorResponse) {
        alert(errorResponse);
        console.log(errorResponse);
    }
	
</script>
</head>
<body>

	<form align="center">
		<!-- User Details -->
		<input type="text" id="citrusFirstName" value="" /><br>
		<input type="text" id="citrusLastName" value="" /><br>
		<input type="text" id="citrusEmail" value="" /><br>
		<input type="text" id="citrusStreet1" value="" /><br>
		<input type="text" id="citrusStreet2" value="" /><br>
		<input type="text" id="citrusCity" value="" /><br>
		<input type="text" id="citrusState" value="" /><br>
		<input type="text" id="citrusCountry" value="" /><br>
		<input type="text" id="citrusZip" value="" /><br>
		<input type="text" id="citrusMobile" value="" /><br>
		
		<!-- Transaction Details -->
		<input type="text" readonly id="citrusAmount" value="" /><br>
		<input type="text" readonly id="citrusMerchantTxnId" value="" /><br>
		<input type="text" readonly id="citrusSignature" value="" /><br>
		<input type="text" readonly id="citrusReturnUrl" value="" /><br>
		<input type="text" readonly id="citrusNotifyUrl" value="" /><br>
		
		<!-- Card Details -->
		<select id="citrusCardType">
			<option selected="selected" value="credit">Credit</option>
			<option value="debit">Debit</option>
		</select><br>
		
		<select id="citrusScheme">
			<option selected="selected" value="VISA">VISA</option>
			<option value="mastercard">MASTER</option>
		</select><br>
		
		<input type="text" id="citrusNumber" value=""/><br>
		<input type="text" id="citrusCardHolder" value=""/><br>
		<input type="text" id="citrusExpiry" value=""/><br>
		<input type="text" id="citrusCvv" value=""/><br>
		<input type="button" value="Pay Now" id="citrusCardPayButton"/><br>
	</form>


<script type="text/javascript">
	//Net Banking
$('#citrusNetbankingButton').on("click", function () { makePayment("netbanking") });
	//Card Payment
$("#citrusCardPayButton").on("click", function () { makePayment("card") });
	
</script>

</body>
</html>