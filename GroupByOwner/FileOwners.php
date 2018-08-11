<?php

class FileOwners
{
    /**
     * @param array $files
     * @return array
     */
    public static function groupByOwners($files)
    {
	$newSet = array();
	foreach( $files as $key => $value){
		$newSet[$value][] = $key;
	}
	return $newSet;
    }
}
