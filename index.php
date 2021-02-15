<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            function suma_resta(){
             /*suma de 0-100 y resta nuemros aleatorios */ 
                $suma = 0;
                $resta1 = rand(0, 100);
                $resta2 = rand(0, 100);
                $resulresta = 0;
                for($i=0;$i<=100;$i++){
                    $suma = $suma + $i;
                    
                };
                echo "La suma es: ",$suma;
                echo "<hr>";
                if($resta1>$resta2){
                    $resulresta = $resta1 - $resta2;
                    echo "La resta de ",$resta1,"-",$resta2,"= ",$resulresta;
                }else{
                    $resulresta = $resta2 - $resta1;
                    echo "La resta de ",$resta2,"-",$resta1,"= ",$resulresta;
                };
            }; 
            
            function multi_divi(){
             /*tabla de multiplicar del 5 y tabla de divisiones entre 2 */ 
                $num1=5;
                for($num2=0;$num2<=10;$num2++){
                  
                    echo $num1.' x '.$num2.'= '.$num1*$num2.'<br>';
                };
                echo '<br>';
                $div1=2;
                for($div2=1;$div2<=10;$div2++){
                    
                    echo $div1.' / '.$div2.'= '.$div1/$div2.'<br>';
                };
            }; 
            echo multi_divi();
            
        ?>
    </body>
</html>
