<?php

$rrd_filename_in  = rrd_name($device['hostname'], 'ucd_ssRawSwapIn');
$rrd_filename_out = rrd_name($device['hostname'], 'ucd_ssRawSwapOut');
$ds_in            = 'value';
$ds_out           = 'value';

$multiplier = 512;

require 'includes/graphs/generic_data.inc.php';
