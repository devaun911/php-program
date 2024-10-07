<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
     for( $i=1; $i<=10; $i++) {
         if ($i % 2 == 0) {
           echo "<h1 style=\"color:blue\">the number is: $i </h1>";
           echo "<p> the number is even </p>";
         }
         else {
           echo "<h1 style=\"color: red\"> the number is $i </h1>";
           echo "<p> the number is odd </p>";
         }
       for( $b=1; $b<=10; $b++) {
         if ( $b <= 5) {
           echo "<p style=\"color:teal\"> I was created with a small number </p>";
         }
      else {
        echo "<p style=\"color:green\"> I was created with a big number </p>";
      }
    }
  }
    ?> 

</html>