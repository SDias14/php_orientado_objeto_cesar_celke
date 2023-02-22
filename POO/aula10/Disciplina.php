<?php

class disciplina{
    public string $aluno; 
    public float $notaTrabalho;
    public float $notaProva;
    public static float $media;

    function __construct(string $aluno, float $notaTrabalho, float $notaProva)
    {
        $this->aluno = $aluno;
        $this->notaTrabalho = $notaTrabalho;
        $this->notaProva = $notaProva;
        self :: $media = ($notaTrabalho + $notaProva) / 2; // self é usado para acessar atributos estáticos. esse atributo é usado somente na classe disciplina
    }
    
    public function situacao(): string{
        if(self :: $media >= 7){
            return "Aprovado";
        }else{
            return "Reprovado";
        }

    }

    public static function situacaoAluno(float $nota): string{

        if($nota >= 7){
            return "Aprovado";
        }else{
            return "Reprovado";
        }

    }


}



?>