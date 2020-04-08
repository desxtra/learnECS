<?php



$hostname = @file_get_contents('http://169.254.169.254/latest/meta-data/public-ipv4/');
$hostname = $hostname == "" ? "Not an AWS instance" : $hostname;
echo "Output after update: ".$hostname;