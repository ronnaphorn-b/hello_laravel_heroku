<?php
$data = $_GET["data"];

$dataObj = json_decode($data);

$chatNumber = $dataObj ->chat ->chatNumber;
$chatLineUID = $dataObj ->chat ->lineUID;

$catId = $dataObj ->category ->catId;
$catname = $dataObj ->category ->catname;

$subCatID = $dataObj ->subcategory ->subCatID;
$subCatName = $dataObj ->subcategory ->subCatName;

$brandId = $dataObj ->brand ->brandId;
$brandName = $dataObj ->brand ->brandName;

$productSKU = $dataObj ->product ->productSKU;
$productName = $dataObj ->product ->productName;

$oppltChatNumber = $dataObj ->oppLineItem ->chatNumber;
$slickNo = $dataObj ->oppLineItem ->slickNo;
$discount = $dataObj ->oppLineItem ->discount;
$listPrice = $dataObj ->oppLineItem ->listPrice;
$quantity = $dataObj ->oppLineItem ->quantity;
$salesPrice = $dataObj ->oppLineItem ->salesPrice;
$subtotal = $dataObj ->oppLineItem ->subtotal;
$totalPrice = $dataObj ->oppLineItem ->totalPrice;
$status = $dataObj ->oppLineItem ->status;
$stockBranch = $dataObj ->oppLineItem ->stockBranch;
$oppltSlickStatus = $dataObj ->oppLineItem ->slickStatus;
$oppltSlickCreDate = $dataObj ->oppLineItem ->slickCreDate;
$oppltSlickLastModDate = $dataObj ->oppLineItem ->slickLastModDate;
$oppltSlickCreBy = $dataObj ->oppLineItem ->slickCreBy;
$oppltSlickUpdBy = $dataObj ->oppLineItem ->slickUpdBy;

$oppltImgchatNumber = $dataObj ->oppLineItemImg ->chatNumber;
$oppltslickNo = $dataObj ->oppLineItemImg ->slickNo;
$oppltimgURL = $dataObj ->oppLineItemImg ->imgURL;
$oppltimgCha = $dataObj ->oppLineItemImg ->imgCha;
$oppltslickCreDate = $dataObj ->oppLineItemImg ->slickCreDate;
$oppltslickLastModDate = $dataObj ->oppLineItemImg ->slickLastModDate;
$oppltslickCreBy = $dataObj ->oppLineItemImg ->slickCreBy;
$oppltslickUpdBy = $dataObj ->oppLineItemImg ->slickUpdBy;

echo 'Chat                  |<br>';
echo '----------------------- <br>';
echo 'Chat Number : ' . $chatNumber . '<br>';
echo 'LineUID : ' . $chatLineUID . '<br>';
echo '------------------------------------------------------------------------------------ <br>';
echo 'Category             | <br>';
echo '----------------------- <br>';
echo 'Category Id : ' . $catId . '<br>';
echo 'Category Name : ' . $catname . '<br>';
echo '------------------------------------------------------------------------------------ <br>';
echo 'Sub-Category             | <br>';
echo '----------------------- <br>';
echo 'Sub-Category Id : ' . $subCatID . '<br>';
echo 'Sub-Category Name : ' . $subCatName . '<br>';
echo '------------------------------------------------------------------------------------ <br>';
echo 'Brand            | <br>';
echo '----------------------- <br>';
echo 'Brand Id : ' . $brandId . '<br>';
echo 'Brand Name : ' . $brandName . '<br>';
echo '------------------------------------------------------------------------------------ <br>';
echo 'Product            | <br>';
echo '----------------------- <br>';
echo 'Product SKU : ' . $productSKU . '<br>';
echo 'Product Name : ' . $productName . '<br>';
echo '------------------------------------------------------------------------------------ <br>';
echo 'Opportunity Line Item            | <br>';
echo '----------------------- <br>';
echo 'chatNumber : ' . $oppltChatNumber . '<br>';
echo 'slickNo : ' . $slickNo . '<br>';
echo 'discount : ' . $discount . '<br>';
echo 'listPrice : ' . $listPrice . '<br>';
echo 'quantity : ' . $quantity . '<br>';
echo 'salesPrice : ' . $salesPrice . '<br>';
echo 'subtotal : ' . $subtotal . '<br>';
echo 'totalPrice : ' . $totalPrice . '<br>';
echo 'status : ' . $status . '<br>';
echo 'stockBranch : ' . $stockBranch . '<br>';
echo 'slickStatus : ' . $oppltSlickStatus . '<br>';
echo 'slickCreDate : ' . $oppltSlickCreDate . '<br>';
echo 'slickLastModDate : ' . $oppltSlickLastModDate . '<br>';
echo 'slickCreBy : ' . $oppltSlickCreBy . '<br>';
echo 'slickUpdBy : ' . $oppltSlickUpdBy . '<br>';
echo '------------------------------------------------------------------------------------ <br>';
echo 'Opportunity Line Item Image            | <br>';
echo '----------------------- <br>';
echo 'chatNumber : ' . $oppltImgchatNumber . '<br>';
echo 'slickNo : ' . $oppltslickNo . '<br>';
echo 'imgURL : ' . $oppltimgURL . '<br>';
echo 'imgCha : ' . $oppltimgCha . '<br>';
echo 'slickCreDate : ' . $oppltslickCreDate . '<br>';
echo 'slickLastModDate : ' . $oppltslickLastModDate . '<br>';
echo 'slickCreBy : ' . $oppltslickCreBy . '<br>';
echo 'slickUpdBy : ' . $oppltslickUpdBy . '<br>';
echo '------------------------------------------------------------------------------------ <br>';

?>

