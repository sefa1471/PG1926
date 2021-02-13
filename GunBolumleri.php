<?php
date_default_timezone_set('Europe/Istanbul');
$bugun= date("H");
if ($bugun >= "06" AND $bugun < "10")
{
	echo 'Günaydın';
}
elseif ($bugun >= "10" AND $bugun < "17")
{
	echo 'İyi günler';
}
elseif ($bugun >= "17" AND $bugun < "20")
{
	echo 'İyi akşamlar';
}
elseif ($bugun >= "20" AND $bugun < "00")
{
	echo 'İyi geceler';
}
else 
{
	echo 'Esenlikler dilerim';
}
?>
