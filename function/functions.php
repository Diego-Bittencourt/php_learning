<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>

 <?php 
 
    function saySomething() {
        echo "Hello Server";
    };

    saySomething();

    echo "<br>";

    function greeting($message) {
        echo "Hello " . $message .", já disse seu 'fora bolsonaro' de hoje?";
    };

    greeting("João");

    echo "<br>";

    function add($number1, $number2) {
        $sum = $number1 + $number2;
        echo $sum;
    }

    add(4, 50);
 
 ?> 

 </body>
</html>