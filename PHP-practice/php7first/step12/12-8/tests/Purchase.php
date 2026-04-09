<?php
error_reporting(0);
print purchase_check($price, $tax);

function purchase_check($price, $tax ) {
	$total = $price * (1+$tax/100);
	return $total;
}
?>