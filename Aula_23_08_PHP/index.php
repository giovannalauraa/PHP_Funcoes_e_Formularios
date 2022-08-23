<?php
    
    // Function ePar

    function ePar($numero){
        if($numero % 2 == 0){
            return true;
        }
         return false;
    }

    if(ePar(15))
        echo "é par";
        else echo "é ímpar\n";
        
    //Operador ternário
      echo ePar(15)?"é par": "é ímpar";
    
    
    
    
    //Função com retorno e com parâmetro
    /* function calcularSubtracao($n1, $n2)
     {
         return $n1 - $n2;
     }
     //Chamando a função
     $subtracao = calcularSubtracao(2,2);
     echo $subtracao;

     //Exemplo 2 - Funcao com retorno e parâmetros

     /*function calcularSomaSequencia($limite){
            $soma = 0;
            for($i = 0; $i < $limite, $i++){
                $soma += $i;
            }
            return $soma;
     }
   

    //Função sem retorno e com parâmetro 
    /*function calcularPreco($quantidade, $preco){

        $valorTotal = $quantidade * $preco;
        echo $valorTotal;

    }

    //Chamando a função 

    calcularPreco(2, 25.50); //Passar os valores para calcular na função

    
    
    //Função sem retorno e sem parâmetro

   /* function calcularSoma(){
        $resultado = 4 + 4;
        echo $resultado;
    }

    //Chamando a função 
    calcularSoma();*/
?>