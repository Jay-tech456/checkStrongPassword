<!DOCTYPE html>
<html>
<body>

<?php

function check($password){ 
   $a = ["password", "123456789", "naruto", "login1234", "test", "1234567","help,","(blank)" ]; 
   
   foreach($a as $count){
      if(stripos($a, $password) == true){
      
      return "Not a good password"; 
   }
   }
   
   return checklength($password); 
} 

function Checklength($password) { 
  if(strlen($password) < 8) { 
      return "Password is not good because is is lower than 8 characters";   

  }
   
      return checknum($password); 
 }
 
 
function checknum($password) { 
 if(preg_match('#[0-9]+#', $password))
 	 return checkShortChar($password);
     
  return "You at least need one number"; 
} 


function checkShortChar($password) { 
if(preg_match('#[A-Z]+#', $password)){ 
       return specialCharacter($password); 
 }
    return "you need one short character";
} 

function specialCharacter($password) { 
if (preg_match('/[\'$%&*()@#?,=]/', $password))
{
    return "Good passworld"; 
}

return "You need one special character "; 

} 


$a = "Helloworld1234";
echo $a, " = ", check($a);

?>

</body>
</html>
