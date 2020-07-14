<?php 

function asset($data)
{
	$src = DIR_URL . '/asset/' . $data;
	if(file_exists($src)) {
		echo BASE_URL . '/asset/' . $data;
	}
}
