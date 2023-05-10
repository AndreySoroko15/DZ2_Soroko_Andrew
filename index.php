<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homework</title>
  <style>
    * {
  padding: 0;
  margin: 5px;
  }

  .task {
    font-size: 18px;
    text-indent: 25px;
    font-weight: bold;
    font-style: italic;
  }

  hr {
    border: 1px solid coral;
  }

  .form {
    border: 2px solid coral;
    border-radius: 10px; 
    padding: 10px; 
    width: 400px; 
    margin: auto;
  }

  form {
    text-align: center;
  }

  input, input:focus {
    padding: 7px;
    font-size: 16px;
    background-color: lightgoldenrodyellow;
    border-radius: 8px;
    border: 1px solid gray;
    width: 250px;
    font-style: italic; 
  }

  .star {
    text-align: center;
    color: blueviolet;
  }

  </style>
</head>
<body>
  
  <?php
  
  echo  "<p class='task'> 1. Если переменная \$a пустая, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при \$a, равном 1, 3, -3, 0, null, true, '', '0'. </p>";

  function task1($a) {
    echo ($a == '') ? "Верно <br>" : "Неверно <br>";
  }

  task1(1);
  task1(3);
  task1(-3);
  task1(0);
  task1(null);
  task1(true);
  task1('');
  task1('0');

  echo  "<hr><p class='task'> 2. Дано трехзначное число. Поменяйте среднюю цифру на ноль. </p>";

  function task2($num) {
    $num = (string)$num;
    if(strlen($num) != 3) {
      echo 'Введено либо не целое, либо не трехзначное число. Попробуйте еще раз!';
    } else {
      $num[1] = '0';
      echo $num;
    }
  } 

  task2(385);

  echo  "<hr><p class='task'> 3. Если переменная \$a равна или меньше 1, а переменная \$b больше или
  равна 3, то выведите сумму этих переменных, иначе выведите их разность
  (результат вычитания). Проверьте работу скрипта при \$a и \$b, равном 1 и 3, 0
  и 6, 3 и 5. </p>";
  function task3($a, $b) {
    if ($a <= 1 && $b >= 3) {
      $sum = $a + $b;
      echo "{$a} + {$b} = {$sum} <br>";
    } else {
      $diff = $a - $b;
      echo "{$a} - {$b} = {$diff} <br>";
    }
  }

  task3(1, 3);
  task3(0, 6);
  task3(3, 5);
  
  echo  "<hr><p class='task'> 4. Дана строка с символами, например, 'abcde'. Проверьте, что первым
  символом этой строки является буква 'a'. Если это так - выведите 'да', в
  противном случае выведите 'нет'. </p>";

  function task4($str) {
    if(!is_string($str)) {
      echo 'Введенное значение не является строкой. Попробуйте еще раз! <br>';
    } else if($str[0] == 'a') {
      echo "<b>Строка: {$str}</b> | &nbsp'a' - первый символ данной строки <br>";
    } else {
      echo "<b>Строка: {$str}</b> | &nbsp'a' не является первым символом данной строки <br>";
    }
  }

  task4('abcde');
  task4('blqcde');
  task4(1245);
  task4(false);
  
  echo  "<hr><p class='task'> 5. Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр
  равняется сумме вторых трех цифр. Если это так - выведите 'да', в противном
  случае выведите 'нет'.</p>";

  function task5($strOfNum) {
    if(is_integer($strOfNum)) $strOfNum = (string)$strOfNum;

    if (strlen($strOfNum) == 6) {
      
    $sumOfFirst3 = $strOfNum[0] + $strOfNum[1] + $strOfNum[2];
    $sumOfSecond3 = $strOfNum[3] + $strOfNum[4] + $strOfNum[5];

      if ($sumOfFirst3 == $sumOfSecond3) {
        echo "У числа <b>{$strOfNum}</b> сумма первых трех цифр <b>равняется</b> сумме вторых трех цифр.";
      } else  {
        echo "У числа <b>{$strOfNum}</b> сумма первых трех цифр <b>не равняется</b> сумме вторых трех цифр.";
      }
    } else {
      echo 'Данный скрипт работает только для строки, состоящей из ШЕСТИ цифр.';
    }
    
  }

  task5('656658');
  
  echo  "<hr><p class='task'> 6. Разработайте программу, которая определяла количество прошедших 
  часов по введенным пользователем градусах. Введенное число может быть от
  0 до 360. ";

  echo "<div class='form'> <form method='POST'> <input name='degrees' type='number' placeholder='Введите градусы от 0 до 360'> </form>";

  function task6() {
    $degrees = (int)$_POST['degrees'];
    
    if($degrees < 0 || $degrees > 360) {
      echo '<p style="text-align: center;">Допустимый диапазон от 0 до 360 градусов включительно </p>';
    } else {
      $hour = round($degrees / 15);
      echo "<p style='text-align: center;'>Исходя из введенного количества градусов, прошло примерно {$hour} ч. </p>";
    }
  }
  task6();
  echo '</div>';

  echo  "<hr><p class='task'> 7. Разработайте программу, которая из чисел 20 .. 45 находила те, которые 
  делятся на 5 и найдите сумму этих чисел.</p>";

  function task7($rangeStart, $rangeEnd) {

    $arr = [];
    $sum = 0;

    for($i = $rangeStart; $i <= $rangeEnd; $i++) {
      if ($i % 5) continue;

      array_push($arr, $i);
      
      $sum += $i;
    } 

    $str = implode(', ' , $arr);

    echo "<b> Список чисел, которые делятся на 5: </b> {$str}. <br>";
    echo "<b> Сумма данных чисел: </b> {$sum}.";

  } 

  task7(20, 45);

  echo  "<hr><p class='task'> 8. Дано пятизначное число. Цифры на четных позициях «занулить». 
  Например, из 12345 получается число 10305. </p>";

  function task8($num) {
      is_integer($num) ? $num = (string)$num : $num;

      $len = strlen($num);

      if($len != 5) {
          echo 'Было введено не пятизначное число!!';
      } else {

        $numWithZero = $num;

          for($i = 0; $i < $len; $i++) {
              if($numWithZero[$i] % 2 == 0) continue;

              $numWithZero[$i] = 0;
          }

          echo "Из числа <u>{$num}</u> получилось число <u>{$numWithZero}</u> :) ";

      }
      
  }

  task8(43632);

  echo  "<hr><p class='task'> 9. Дано число \$num=1000. Делите его на 2 столько раз, пока результат 
  деления не станет меньше 50. Какое число получится? Посчитайте 
  количество итераций, необходимых для этого (итерация - это проход цикла). 
  Решите задачу сначала через цикл while, а потом через цикл for. </p>";

  function task9($num) {
    
    $i = 0;
    $n = 0;

    while(true) {
        $num = $num / 2;
        $n = ++$n;
        if($num < 50) break;
        $i++;
        
    }

      echo "<b> Решение через цикл while: </b><br>";
      echo "Получилось число <u>$num</u><br> Количество необходимых итераций: $n." . "<br><br>";
    
  }

  task9(1000);

  function task9_1($num) {
    
    $n = 0;

    for($i = 0; ; $i++) {
      $num = $num / 2;
        $n = ++$n;
        if($num < 50) break;
    }

      echo '<b>Решение через цикл for: </b><br>';
      echo "Получилось число <u>$num</u><br> Количество необходимых итераций: $n.";
    
  }

  task9_1(1000);

  echo  "<hr><p class='task'> 10. Вывести на экран фигуру из звездочек: </p>";

  function task10($n) {
      echo '<p class="star">';
      $star = '*';

      for($i = 0; $i < $n; $i++) {
          echo '<br>' . $star;
      
          for($j = 1; $j < $n; $j++) {
              echo " &nbsp " . $star;
        }
      };
      echo '</p>';
  }

  task10(5);

  ?>


</body>
</html>