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
        return $sum;
    }

    
echo add(4, 50);

echo "<br>";

$result = add(22, 50);
$result = add(100, $result);

echo $result;


echo "<br>";

$x = "outsite";
echo "The variable when assigned = " . $x;
echo "<br>";
function convert() {
	$x = "inside";
};
convert();
echo "Without using the glocal keyword = " . $x ;

echo "<br>";

function trueConvert() {
	global $x;
    // THe global keyword can be used inside a function and allows the function to access the global variable.
    //Probably allows to use the pointer insted of a copied variable.
	$x = "inside";

};
trueConvert();
echo "Using the global keyword = " . $x;


 ?> 

 </body>
</html>