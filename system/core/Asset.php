<?php 

function asset($data)
{
	$src = DIR_URL . '/asset/' . $data;
	if(file_exists($src)) {
		require $src;
		echo BASE_URL . '/asset/' . $data;
	}
}
