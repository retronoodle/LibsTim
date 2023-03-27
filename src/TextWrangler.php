<?php
namespace Tsmon\LibsTim;

class TextWrangler
{
  public static function do()
  {
    return "this";
  }

  public static function splitNames($name_string)
  {
    // expect a string strings 
    if (!is_string($name_string))
    {
      return false; 
    }
    $name_array = preg_split('/\s+/', $name_string);
    $num_parts = count($name_array); 

    $counter = 1; 
    $middle_counter = 0; 
    $rt = []; 
    foreach($name_array as $part)
    {
      if ($counter == 1)
      {
        $rt['first_name'] = $part; 
      }

      if ($counter == $num_parts)
      {
        $rt['last_name'] = $part; 
      }

      if ($counter > 1 && $counter < $num_parts)
      {
        // middle names 
        $middle_counter ++; 
        $rt['middle_name_' . $middle_counter] = $part; 
      }
      $counter ++; 
    }

    return $rt; 
    
    
  }
}