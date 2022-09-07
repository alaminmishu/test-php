<?php 
function testEven($num) {  
    //trigger an exception in a "try" block  
    try {   
         if($num%2 != 0) {   // ! denotes NOT [NOT EQUAL TO ZERO]
           //throw an exception  
           throw new Exception("you've passed an ODD number. pls try with EVEN number");  
          } elseif ($num%2 == 0) 
           echo "Number is EVEN";
     }  
     //catch exception  
     catch (Exception $e) {  
        //  echo "Line No : " . __LINE__ ." : File Path : " .__FILE__ .date('Y-m-d h:i:s A') . "<br>" .$e->getMessage();  
         echo "<b>" .$e->getMessage() ."</b>";  
     }

     /*finally {
        echo "<br>";
        echo 'Always show this';
     }*/
}  
      testEven(21);         
  