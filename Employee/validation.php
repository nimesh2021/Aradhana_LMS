<?php
function check_strings($stringValue) {
  if (!preg_match('/[^A-Za-z]/', $stringValue))
{
  return false;

} elseif(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $stringValue)){
  return true;
}
  return true;
}


function phone_length($stringValue){
  if(strlen($stringValue)==10){
    
      return "false";
  }
 
  return "true";
  

}


?>