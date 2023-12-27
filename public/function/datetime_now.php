<?php
use Illuminate\Support\Carbon;
$formattedDate = now()->format('Y-m-d');
$formattedDate = Carbon::now()->format('Y-m-d');
$formattedTime = now()->format('H:i:s');
$formattedTime = Carbon::now()->format('H:i:s');
?>