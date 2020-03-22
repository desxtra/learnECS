<?php


$hostname = @file_get_contents('http://169.254.169.254/latest/meta-data/public-hostname/');
$hostname = $hostname == "" ? "Not an AWS instance" : $hostname;
echo "Output after update 2: ".$hostname;