<?php
error_reporting(E_ALL);
echo $abc;
error_reporting(E_ALL & ~ E_WARNING);
echo $abc;