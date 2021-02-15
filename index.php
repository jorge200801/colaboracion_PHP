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
            }; 
               
            echo suma_resta();
        ?>
    </body>
</html>
