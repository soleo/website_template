<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



if ( ! function_exists('auto_link'))
{
	function auto_link($str, $type = 'both', $popup = FALSE)
	{
	    if ($type != 'email')
	    {
	            if (!preg_match_all("/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\\.([a-zA-Z])+([a-zA-Z])+/", $str, $matches)){

	        if (preg_match_all("/(?:https?\:?(?:\/\/)?|www\.)?([a-zA-Z0-9\-\.]+\.(?:.[a-z]*))/mi", $str, $matches))
	        {
	            $pop = ($popup == TRUE) ? " target=\"_blank\" " : "";

	            for ($i = 0; $i < count($matches['0']); $i++)
	            {

	                            $str = str_replace($matches[0][$i],
	                                                '<a href="http://'.$matches[1][0].'" class="auto_link_color">'.$matches[1][0].'</a>', $str);
	            }
	        }
	            }else{
	                for ($i = 0; $i < count($matches['0']); $i++)
	                {
	                    $str = str_replace($matches[0][$i], $matches[0][0], $str);
	                }
	            }
	    }

	    return $str;
	}
}

