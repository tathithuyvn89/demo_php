<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>
             <?php
             function test_bien_tham_chieu(&$x) {
                 $x = 30;
             }
             
             $y = 10;
             test_bien_tham_chieu($y);
             var_dump($y);
             ?>
        </h1>
    </body>
</html>
