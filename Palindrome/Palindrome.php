<?php

class Palindrome
{
    /**
     * @param string $word
     * @return bool
     */
    public static function isPalindrome($word)
    {
   	  $string = str_replace(' ','', strtolower($word));
	  if ($string == strrev($string))
	      return true;
	  else
	     return false;
    }
}
