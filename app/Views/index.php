<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>How to create and use Helper function in CodeIgniter 4</title>
</head>
<body>
   <?php 
   // helper("custom1_helper"); // Single helper loading
//    helper(["custom1_helper","custom2_helper"]); // Multiple helper loading, guna dari view lambat sikit load. dari controller laju
    helper("custom2_helper");//load only helper2, sbb dah load dari helper 1 di basecontroller
   ?>

   <?php 
   // custom1_helper functions
   $fun1 = fun1();
   $randomstr = randomstring();
   echo "fun1 : ".$fun1."<br><br>";
   echo "randomstr : ".$randomstr."<br><br>";

   // custom2_helper functions
   $fun2 = fun2();
   $evenOrOdd = checkeven(100);
   echo "fun2 : ".$fun2."<br><br>";
   echo "evenOrOdd : ".$evenOrOdd."<br><br>";
   ?>
</body>
</html>