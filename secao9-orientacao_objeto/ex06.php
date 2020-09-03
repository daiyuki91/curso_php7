<?php

    /* Encapsulamento */
    //proteger as informações
    //controlar acesso e a forma que o usuário poderá interagir
    //chaves de escapsulamento:
    // - public: todo mundo tem acesso
    // - protected: atributos e métodos da mesma classe e classes estendidas (herdeiras)
    // - private: somente os atributos e métodos da própria classe tem acesso

    class Pessoa {
        public $nome = "Rasmus Leordorf";
        protected $idade = 48;
        private $senha = "123456";

        public function verDados(){

            echo get_class($this)."<br>"; //obter note da classe

            echo $this->nome."<br>";
            echo $this->idade."<br>";
            echo $this->senha."<br>";
        }
    };

    //exemplo de herança
    class Programador extends Pessoa {
        
        public function verDados2(){

            echo get_class($this)."<br>"; //obter note da classe

            echo $this->nome."<br>";
            echo $this->idade."<br>";
            echo $this->senha."<br>"; //esta classe não tem acesso ao atributo privado da classe mãe
        }

    };

    $obj = new Pessoa(); //agora, estamos usando a classe estendida
    $obj2 = new Programador(); //agora, estamos usando a classe estendida

    //echo $obj->nome."<br>"; //tem acesso

    //echo $obj->idade."<br>"; //não consegue acessar o atributo protegido (somente as classes herdeiras)

    //echo $obj->senha."<br>"; //não consegue acessar o atributo privado

    /////////////////////////////
    echo "<br><br>";
    /////////////////////////////

    $obj->verDados(); //o método é público, por isso, o objeto tem acesso.

    /////////////////////////////
    echo "<br><br>";
    /////////////////////////////

    $obj2->verDados2(); //não consegue ver o atributo "senha"

?>