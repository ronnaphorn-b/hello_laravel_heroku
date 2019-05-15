<?php
$data = $_GET["data"];

$dataObj = json_decode($data);

$chatNumber = $dataObj ->chat ->chatNumber;
$chatLineUID = $dataObj ->chat ->lineUID;

$chatNumber = $dataObj ->quotation ->chatNumber;
$quotationNo = $dataObj ->quotation ->quotationNo;
$quotationDate = $dataObj ->quotation ->quotationDate;
$isMultiReceipts = $dataObj ->quotation ->isMultiReceipts;
$slickLastModDate = $dataObj ->quotation ->slickLastModDate;
$slickUpdBy = $dataObj ->quotation ->slickUpdBy;
$paymentType = $dataObj ->quotation ->paymentType;
$receiptURL = $dataObj ->quotation ->receiptURL;
$receiptDate = $dataObj ->quotation ->receiptDate;
$receiptTotalAmounts = $dataObj ->quotation ->receiptTotalAmounts;

$slickNo = $dataObj ->quotationLineItem ->slickNo;
$slickStatus = $dataObj ->quotationLineItem ->slickStatus;
$stockBranch = $dataObj ->quotationLineItem ->stockBranch;
$receiptURL = $dataObj ->quotationLineItem ->receiptURL;
$receiptDate = $dataObj ->quotationLineItem ->receiptDate;
$ReceiptAmounts = $dataObj ->quotationLineItem ->ReceiptAmounts;
$shippingType = $dataObj ->quotationLineItem ->shippingType;
$shippedBranch = $dataObj ->quotationLineItem ->shippedBranch;
$pickuplocation = $dataObj ->quotationLineItem ->pickuplocation;
$trackingNo = $dataObj ->quotationLineItem ->trackingNo;
$isCustomerReceived = $dataObj ->quotationLineItem ->isCustomerReceived;
$pickupDate = $dataObj ->quotationLineItem ->pickupDate;
$slickLastModiDate = $dataObj ->quotationLineItem ->slickLastModiDate;
$slickUpdBy = $dataObj ->quotationLineItem ->slickUpdBy;

echo 'Chat                  |<br>';
echo '----------------------- <br>';
echo 'Chat Number : ' . $chatNumber . '<br>';
echo 'LineUID : ' . $chatLineUID . '<br>';
echo '------------------------------------------------------------------------------------ <br>';
echo 'Quotation             | <br>';
echo '----------------------- <br>';
echo 'Chat Number : ' . $chatNumber . '<br>';
echo 'Quotation No : ' . $quotationNo . '<br>';
echo 'Quotation Date : ' . $quotationDate . '<br>';
echo 'Is Multi Receipts : ' . $isMultiReceipts . '<br>';
echo 'Slick Last Modify Date : ' . $slickLastModDate . '<br>';
echo 'Slick Update By : ' . $slickUpdBy . '<br>';
echo 'Payment Type : ' . $paymentType . '<br>';
echo 'Receipt URL : ' . $receiptURL . '<br>';
echo 'Receipt Date : ' . $receiptDate . '<br>';
echo 'ReceiptTotalAmounts : ' . $receiptTotalAmounts . '<br>';
echo '------------------------------------------------------------------------------------ <br>';
echo 'Quotation Line Items   | <br>';
echo '----------------------- <br>';
echo 'slickNo : ' . $slickNo . '<br>';
echo 'slickStatus : ' . $slickStatus . '<br>';
echo 'stockBranch : ' . $stockBranch . '<br>';
echo 'receiptURL : ' . $receiptURL . '<br>';
echo 'receiptDate : ' . $receiptDate . '<br>';
echo 'ReceiptAmounts : ' . $ReceiptAmounts . '<br>';
echo 'shippingType : ' . $shippingType . '<br>';
echo 'shippedBranch : ' . $shippedBranch . '<br>';
echo 'pickuplocation : ' . $pickuplocation . '<br>';
echo 'trackingNo : ' . $trackingNo . '<br>';
echo 'isCustomerReceived : ' . $isCustomerReceived . '<br>';
echo 'pickupDate : ' . $pickupDate . '<br>';
echo 'slickLastModiDate : ' . $slickLastModiDate . '<br>';
echo 'slickUpdBy : ' . $slickUpdBy . '<br>';
echo '------------------------------------------------------------------------------------ <br>';

?>