<?php

/* 
Control Statements are core features of PHP.

Control Statemensts/Structure are divided into two categories:

        1. Conditional Statements
                a. if
                b. else
                c. else if
                d. switch case

        2. Loop/Iterative Statements
                a. while 
                b. do while
                c. for
                d. foreach (related to array)

        Keywords: break and continue (conditional stmt self controlling)
*/

/* Conditional Statements */

/* $is_logged = false;

if ($is_logged) {
        echo "You are successgully logged in.";
} else {
        echo "Sorry! Invalid credentials.";
} */

/* $is_logged = false;
if ($is_logged) :
        echo "You are successgully logged in.";
else :
        echo "Sorry! Invalid credentials.";
endif; */


//add, update, delete, detail

$act = "detail";

/* if ($act == "add") {
        echo "The operation performed is add.";
} else {
        if ($act == "update") {
                echo "The operation performed is update.";
        } else {
                if ($act == "delete") {
                        echo "The operation performed is delete.";
                } else {
                        if ($act == "detail") {
                                echo "The operation performed is detail";
                        }
                }
        }
} */


/* if ($act == "add") {
        echo "The operation performed is add";
} else if ($act == "update") {
        echo "The operation performed is update";
} else if ($act == "delete") {
        echo "The operation performed is delete";
} else {
        echo "The operation performed is detail";
} */

/* Q. WAP in PHP to print odd and even number using switch case */

/* $act = "detail";

switch ($act) {
        case "add":
                echo "The operation performed is add";
                break;

        case "update":
                echo "The operation performed is update";
                break;

        case "delete":
                echo "The operation performed is add";
                break;

        default:
                echo "The operation performed is detail";
} */


/* $num = 10;

switch ($num % 2) {
        case 0:
                echo "Even Number";
                break;

        case 1:
                echo "Odd Number";
                break;
} */

/* Loops or iteraive statement */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">

        <?php
                $i = 1;

                /* do {
                        echo "<tr>
                                <td>" . "5 * " . $i . " = " . (5 * $i) . "</td>
                              </tr>";
                        $i++;
                } while ($i <= 10); */

                 /* while ($i <= 10) {
                        echo "<tr><td>" . "8 * " . $i . " = " . (8 * $i) . "</td></tr>";
                        $i++;
                } */


                /* for ($i = 1; $i <= 10; $i++) {
                        echo "<tr>";
                        echo "<td>" . " 10 * " . $i . " = " . (10 * $i) . "</td>";
                        echo "</tr>";
                } */

                ?>
    </table>

</body>

</html>