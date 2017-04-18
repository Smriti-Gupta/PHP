<html>
        <head>
            <title>
                Table 
            </title>
         </head>
                  <body>
                          <?php
                                $num = $_POST["number"];
                                $sum = 0;
                                $temp = $num;
                               while(floor($num))
                                 {
                                        $r = $num % 10;
                                        $r1 = $r*$r*$r;
                                        $sum = $sum + $r1;
                                        $num = $num / 10;
                                 }
                                if($temp == $sum)
                                 {
                                     echo "number is armstrong";
                                 }
                                 else
                                 {
                                     echo "number is not armstrong";
                                 }
                             
                            ?>
                   </body>
</html>
 
