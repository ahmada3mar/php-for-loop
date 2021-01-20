<!-- 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no
hyphen(-) at the starting and ending position.
Expected Output: 1-2-3-4-5-6-7-8-9-10 -->
<?php
for ($i = 1; $i <= 10; $i++) {
  echo $i;
  if ($i !== 10) {
    echo "-";
  }
}

<!-- // 2. Create a script using a for loop to add all the integers between 0 and 30 and
// display the total.
// Expected Output = total as a number
// --------------

 $total = 0;
 for ($i = 1; $i <= 30; $i++) {
   $total += $i;
 }
 echo $total;

// ==============================
// 3c. Create a script to construct the following pattern, using nested for loop.
// A A A A A
// A A A B B
// A A C C C
// A D D D D
// E E E E E
// -------------- -->



$AN = 0;
$l = "A";
for ($i = 5; $i > 0; $i--) {
  for ($j = $i; $j > 0; $j--) {
    echo "A";
  }

  for ($j = $i; $j < 5; $j++) {
    echo $l;
  }
  if ($i == 5) {
    $i--;
  }
  echo "<br>";
  $l++;
}
for ($i = 0; $i < 5; $i++) {
  echo $l;
  // $l++
}


// <!-- 3b. Create a script to construct the following pattern, using nested for loop.
// 1 1 1 1 1
// 1 1 1 2 2
// 1 1 3 3 3
// 1 4 4 4 4
// 5 5 5 5 5 -->


$AN = 0;
$l = 1;
for ($i = 5; $i > 0; $i--) {
  for ($j = $i; $j > 0; $j--) {
    echo 1;
  }

  for ($j = $i; $j < 5; $j++) {
    echo $l;
  }
  if ($i == 5) {
    $i--;
  }
  echo "<br>";
  $l++;
}
for ($i = 0; $i < 5; $i++) {
  echo $l;
  // $l++
}


// <!-- 4. Create a script to construct the following pattern, using a nested for loop.
// 1 0 0 0 0
// 0 2 0 0 0
// 0 0 3 0 0
// 0 0 0 4 0
// 0 0 0 0 5 -->


for ($i = 1; $i <= 5; $i++) {
  for ($j = 1; $j <= 5; $j++) {
    if ($i === $j) {
      echo $i;
    } else {
      echo 0;
    }
  }
  echo "<br>";
}


// <!-- 5. Write a program to calculate and print the factorial of a number using a for
// loop. The factorial of a number is the product of all integers up to and including
// that number, so the factorial of 5 is 5*4*3*2*1= 120. -->


function factorial($n)
{
  $f = 1;
  for ($i = $n; $i > 0; $i--) {
    $f *= $i;
  }
  echo $f;
}
// factorial(5);
// ======================
// 6. Write a program to calculate and print the Fibonacci sequence using a for loop.
// Fibonacci is a series of numbers where a number is the sum of previous two
// numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and
// so on.
function Fibonacci($n)
{
  $arr = [0, 1];
  for ($i = 2; $i <= $n; $i++) {
    array_push($arr, $arr[$i - 2] + $arr[$i - 1]);
  }
  for ($i = 0; $i < $n; $i++) {
    echo "$arr[$i], ";
  }
  echo $arr[$n];
}
// Fibonacci(11);
// ================================

// 7. Write a program which will count the "c" characters in the text
// "OrangeAcademy".
function countTheC()
{
  $c = 0;
  $str = "OrangeAcademy";
  for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] === "c") {
      $c++;
    }
  }
  echo $c;
}

// countTheC();
// ================================


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<link rel="stylesheet" href="./style/style.css">
</head>
<body>
  <table id="task8" cellpadding="3px" cellspacing="0px">
  <!-- // 8. Write a PHP script that creates the following table using for loops. Add
// 8. Write a PHP script that creates the following table using for loops. Add
// cellpadding="3px" and cellspacing="0px" to the table tag. -->
   function createTable()
  {
    for ($i = 1; $i <= 6; $i++) {
      echo "<tr>";
      for ($j = 1; $j <= 5; $j++) {
        $x = $i * $j;
        echo "<td>$i * $j =$x</td>";
      }
      echo "</td>";
    }
  }
// createTable();

  </table>
  <!-- 
    =============
    9.
  ============== -->

   function creates()
  {
    echo '<div class="con">';

    for ($i = 0; $i < 8; $i++) {
      $isRowOdd = $i % 2;
      for ($j = 0; $j < 8; $j++) {
        if ($j % 2 === $isRowOdd) {
          echo "<div class='b'></div>";
        } else {
          echo "<div class='w'></div>";
        }
      }
    }
    echo "</div>";
  }
// creates();

 
  <!-- 
    =============
    10.
  ============== -->
  
   function task10()
  {
    echo '<div class="con10">';
    for ($i = 1; $i <= 10; $i++) {
      $isRowOdd = $i % 2;
      for ($j = 1; $j <= 10; $j++) {
        $o = $j * $i;
        if ($j % 2 === $isRowOdd) {
          echo "<div class='b'><p>$o</p></div>";
        } else {
          echo "<div class='w'><p>$o</p></div>";
        }
      }
    }
    echo "</div>";
  }
// task10();

  
   <!-- 
    =============
    11.
  ============== -->
   function task11()
  {
    for ($i = 1; $i <= 50; $i++) {
      $output = "";
      if ($i % 3 === 0) {
        $output = "Fizz";
      }
      if ($i % 5 === 0) {
        $output .= "Buzz";
      }
      if (!$output) {
        $output = $i;
      }
      echo "$output | ";
    }
  }
// task11();

   <!-- 
    =============
    12.
  ============== -->
   function task12($num)
  {
    $output = 1;
    for ($i = 1; $i <= $num; $i++) {
      for ($j = $i; $j > 0; $j--) {
        echo "$output ";
        $output++;
      }
      echo "<br><br>";
    }
  }
// task12(5);

   <!-- 
    =============
    13.
  ============== -->
   function task13()
  {
    for ($i = 0; $i < 8; $i++) {
      $row = "";
      for ($j = 0; $j < 5; $j++) {
        if (
          ($i === 0 && ($j === 0 || $j === 4)) ||
          ($i !== 0 && $i !== 3 && ($j > 0 && $j < 4))
        ) {
          $row .= "&nbsp;&nbsp;";
        } else {
          $row .= "*";
        }
      }
      echo $row . "<br>";
    }
  }
// task13();

  
  function task14()
  {
    for ($i = 0; $i < 7; $i++) {
      $row = "";
      for ($j = 0; $j < 5; $j++) {
        if (($i === 0 || $i === 3 || $i === 6) && $j === 4) {
          continue;
        }
        if ($i !== 0 && $i !== 3 && $i !== 6 && ($j > 0 && $j < 4)) {
          $row .= "&nbsp;&nbsp;";
        } else {
          $row .= "*";
        }
      }
      echo $row . "<br>";
    }
  }
  // task14();
  // ======================
  function task15()
  {
    for ($i = 0; $i < 7; $i++) {
      $row = "";
      for ($j = 0; $j < 5; $j++) {
        if (
          (($i === 0 || $i === 6) && $j === 4) ||
          ($i > 1 && $i < 5 && $j > 0)
        ) {
          continue;
        }
        if (
          (($i === 0 || $i === 6) && $j === 0) ||
          (($i === 1 || $i === 5) && ($j > 0 && $j < 4))
        ) {
          $row .= "&nbsp;&nbsp;";
        } else {
          $row .= "*";
        }
      }
      echo $row . "<br>";
    }
  }

  // task15();

  // ======================
  function task16()
  {
    $i = 1;
    $c = 1;
    while ($i !== 0) {
      $l = "A";
      $row = "";
      for ($j = 5 - $i; $j > 0; $j--) {
        $row .= "&nbsp;";
      }
      for ($j = $i; $j > 0; $j--) {
        $row .= $l;
        $l++;
      }
      echo $row . "<br>";
      if ($c > 4) {
        $i--;
      } else {
        $i++;
      }
      $c++;
    }
  }

// task16();
?>

</body>
</html>