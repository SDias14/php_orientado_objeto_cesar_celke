

                <?php

// declarando a variavel codigo e atribuindo o valor
                $codigo = 3; 

           
// criando a função
                    function status($codigo){

                        if($codigo == 1){

                     $msg = "Aguardando Pagamento ";

                        }elseif($codigo == 2){

                            $msg = "Pago";

                        }elseif($codigo == 3){

                            $msg = "Em transporte";

                        }elseif($codigo == 4){

                            $msg = "Entregue";

                        }else{

                            $msg = "Código inválido";

                        }

                        return $msg;

                    }

                    echo "<hr>";
// codigo_transporte recebe o valor da variavel codigo $codigo_transporte = 3;
                    
            $codigo_transporte = $codigo;

            $retorno_dados_funcao = status($codigo_transporte);

            echo $retorno_dados_funcao;

                

                ?>