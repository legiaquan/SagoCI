<?php
function public_url($url = '')
{
    return base_url('public/'.$url);
}
function dinhdangso(&$number)
{
	$format_number = number_format($number, 0, '', '.');
	echo $format_number;
}
function giamoi(&$gia,$km){
		$giamoi=$gia-$gia*($km/100);
		echo dinhdangso($giamoi);
}