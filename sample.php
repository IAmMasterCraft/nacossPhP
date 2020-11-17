<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
        //variable instance
        $numberA = 10;
        $numberB = 5;
        $perfectSquare = 100;
        //addition
        $addition = $numberA + $numberB;
        //subtraction
        $subtraction = $numberA - $numberB;
        //multiplication
        $multiplication = $numberA * $numberB;
        //division
        $division = $numberA / $numberB;
        //modulus or remainder
        $modulus = $numberA % $numberB;
        //square roots
        $squareRoots = $perfectSquare ** (1/2);
        //exponents
        $exponents = $numberA ** 2;

        // //echo result
        // echo $exponents . " this is for echo";
        // echo "<hr>";
        // print($addition) . " this is for print";;
        // echo "<hr>" . " var_dump() goes below <br>";;
        // //var_dump 
        // var_dump($multiplication);
        // echo $numberA++;
        // //11
        // echo "<hr>";
        // echo ++$numberA;
        // echo "<hr>";
        // echo $numberB--;
        // //4
        // echo "<hr>";
        // echo --$numberB;

        // $result = $multiplication + $addition - $subtraction;
        // HOW MANY KOBO IS IN A NAIRA
        // 100 kobo makes 1 NAIRA
        /**
        if 100 kobo === 1 NAIRA
        then x kobo === 5 NAIRA
        x === 500k
        
        if 100k === 1 NAIRA
        then 500k === x NAIRA
        500 === 100x

        x === 5 NAIRA

        const value of my kobo
        type of conversion
        amount to be converted
        if type is kobo to NAIRA
        then amount divided by constant value of kobo
        else if type is NAIRA to kobo
        multiply constant with amount

        */

        $koboValue = 100;
        $input = 1000;
        $typeOfConversion = "n2k";
        if ($typeOfConversion == "n2k") {
          echo ($input * $koboValue) . " kobo";
        } else {
          echo ($input / $koboValue) . " NAIRA";
        }
      ?>
  </body>
</html>