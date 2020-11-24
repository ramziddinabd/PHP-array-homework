<?php

# №1 If you have an array $a = array( 0, 1, 2, 3, 4 );, how do you extract the value 3 from the array?
$a = array( 0, 1, 2, 3, 4 );
echo "The value of array on 3 index is " . $a[ 3 ] . "<br>";


# №2 If you have an array $a = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );, how do you extract the value 3 from the array?
$a = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );
echo "The value of array on with key of three is " . $a[ "three" ] . "<br>";


# №3 If you have the following array, how do you extract the value 3 from the array?
$a = array(
    array(
        0,
        1
    ),
    array(
        2,
        array(
            3
        )
    )
);
echo "The value of array on 3 index is " . $a[1][1][0] . "<br>";


# №4 If you have the following array, how do you extract the value 3 from the array?
$a = array(
    "a"=>array(
        "b"=>0,
        "c"=>1
    ),
    "b"=>array(
        "e"=>2,
        "o"=>array(
            "b"=>3
        )
    )
);
echo "The value of array is " . $a['b']['o']['b'] . "<br>";


# №5 Create a new array with each comma-separated value as its own array element from the string $a = "a,b,c,d,e,f".
$a = "a,b,c,d,e,f";
print_r(explode(',',$a));
echo "<br>";


# №6 With the result array from 5, create a new array where each element is both key and value. In other words, the result should be:
$arr = ['a','b','c','d','e','f'];
$new_array = array_combine($arr,$arr);
print_r($new_array);
echo "<br>";


# №7 You have two arrays like the following. One contains field labels, the other contains field values. Write a program to output the third array.
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
$keysAndValues = array_combine( array_values( $keys ), array_values( $values ) );
print_r($keysAndValues);
echo "<br>";

# №8 You have an array of transactions, each of which has a debit and credit amount. Find the absolute value of the transaction amount (i.e. abs( debit - credit )) and add it as a new key=>value pair to each transaction.
$transactions = array(
    array(
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "debit"=>15,
        "credit"=>14
    )
);

$transactions_with_ammount = array();
foreach( $transactions as $transaction ) {
    $new_transaction = $transaction;
    $new_transaction[ "amount" ] = abs( $transaction[ "debit" ] - $transaction[ "credit" ] );
    $transactions_with_ammount[] = $new_transaction;
}
print_r($transactions_with_ammount);
echo "<br>";


# №9 Find the sum of this array of numbers $a = array( 0, 1, 2, 3, 4, 5, 6 );.
$a = array( 0, 1, 2, 3, 4, 5, 6 );
$arr_sum = array_sum( $a );
echo $arr_sum . "<br>";
 

?>