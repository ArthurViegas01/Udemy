<?php

    class Funcionario {
        public $nome = 'Caneta azul';
        public $telefone = '11 99999-8888';
        public $numFilhos = 2;

        //getters setters (overloading / sobrecargar)
		function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		function __get($atributo) {
			return $this->$atributo;
		}

		/*
		function setNome($nome) {
			$this->nome = $nome;
		}

		function setNumFilhos($numFilhos) {
			$this->numFilhos = $numFilhos;
		}

		function getNome() {
			return $this->nome;
		}

		function getNumFilhos() {
			return $this->numFilhos;
		}
		*/

        function resumirCadFunc(){
            return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filho(s)";
  
        }

        function modificarNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
            //numFilhos: variavel do objeto que pertence a class
            //$numFilhos: variavel do método recebido por parametro
        }
    }

    //PARA ACESSAR ATRIBUTOS OU METODOS, USAMOS O "->"

    $funcionario1 = new Funcionario();
    echo $funcionario1->resumirCadFunc(); 
    echo '<br />';
    $funcionario1->modificarNumFilhos(3);
    echo $funcionario1->resumirCadFunc();
    //echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s)';
    
    echo '<hr />';

    $funcionario2 = new Funcionario();
    echo $funcionario2->resumirCadFunc();
    echo '<br />';
    $funcionario2->modificarNumFilhos(1);
    echo $funcionario2->resumirCadFunc();
    //echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s)';
?>