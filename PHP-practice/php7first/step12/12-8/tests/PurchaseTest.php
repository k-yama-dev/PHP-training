<?php
use PHPUnit\Framework\TestCase;

include 'Purchase.php';

class PurchaseTest extends TestCase {
	public function testFailure() {
		$price = 100;
		$tax = 8;
		$result = purchase_check($price, $tax);
		$this->assertEquals(108, $result);
	}
}
?>