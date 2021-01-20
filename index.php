<?php
//Q1. Write php script to calculate Electricity bill
// Rule● For first 50 units – Rs. 2.50/unit ● For next 100 units – Rs. 5.00/unit 
// ● For next 100 units – Rs. 6.20/unit ● For units above 250 – Rs. 7.50/unit
function calElecBill($units) {
    if ($units <= 50) {
        $bill = $units * 2.50;
    } elseif ($units > 50 && $units <= 100) {
        $fUnits = 50 * 2.50;
        $sUnits = ($units - 50) * 5.00;
        $bill = $fUnits + $sUnits;
    } elseif ($units > 100 && $units <= 200) {
        $fUnits = 50 * 2.50;
        $sUnits = 100 * 5.00;
        $tUnits = ($units - 150) * 6.20;
        $bill = $fUnits + $sUnits + $tUnits;
    } else {
        $fUnits = 50 * 2.50;
        $sUnits = 100 * 5.00;
        $tUnits = 100 * 6.20;
        $fourUnits = ($units - 250) * 7.50;
        $bill = $fUnits + $sUnits + $tUnits + $fourUnits;
    }
    echo $bill;
    echo "<br><hr>";
}
calElecBill(50);

//Q2. Write php script to make a calculator
// Operations: ● Addition ● Subtraction ● Multiplication ● Division
function cal($fNum, $oper, $sNum) {
    switch($oper) {
        case "Addition":
            echo "$fNum + $sNum = ".($fNum + $sNum);
            break;
        case "Subtraction":
            echo "$fNum - $sNum = ".($fNum - $sNum);
            break;
        case "Multiplication":
            echo "$fNum - $sNum = ".($fNum * $sNum);
            break;
        case "Division":
            echo "$fNum - $sNum = ".($fNum / $sNum);
            break;
    }
    echo "<br><hr>";
}
cal(3, "Addition", 3);

//Q3: Write php script to check if a person is eligible to vote
// Rule ● Minimum age required for voting is 18.
function checkEligible($age) {
    if($age >= 18) {
        echo "You are eligible to vote";
    } else {
        echo "You are not eligible to vote";
    }
    echo "<br><hr>";
}
checkEligible(29);

//Q4. Write php script to check whether a number is positive,negative or zero
function checkNumber($num) {
    if (is_numeric($num) == 1) {
        if($num > 0) {
            echo "Number is a Positive Number";
        } elseif($num < 0) {
            echo "Number is a Negative Number";
        } elseif ($num == 0) {
            echo "Number is a Zero Number";
        }
    } else {
        echo "Not a Number";
    }
    echo "<br>";
}
checkNumber(29);
checkNumber(-13);
checkNumber(0);
checkNumber('a');
echo "<hr>";
?>