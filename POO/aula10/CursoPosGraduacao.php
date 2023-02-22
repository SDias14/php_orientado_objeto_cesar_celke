<?php



class CursoPosGraduacao implements Icurso{

    private String $nomeDaDisciplina;
    private String $nomeDoProfessor;

    public function __construct(String $nomeDaDisciplina, String $nomeDoProfessor){
        $this->nomeDaDisciplina = $nomeDaDisciplina;
        $this->nomeDoProfessor = $nomeDoProfessor;
    }

    public function getNomeDaDisciplina() : String {
        return $this->nomeDaDisciplina;
    }

    public function getNomeDoProfessor() : String {
        return $this->nomeDoProfessor;
    }

    public function disciplina(String $nomeDaDisciplina){
        $this->nomeDaDisciplina = $nomeDaDisciplina;
    }

    public function professor(String $nomeDoProfessor){
        $this->nomeDoProfessor = $nomeDoProfessor;
    }

}



?>