<?php
abstract class ClassConexao{
	/*conexao com o bd*/
	protected function conectaDB(){
		try{
			$Con = new mysqli("localhost", "root", "", "funcionarios");
			return $Con;
		}catch(Exception $Erro){
			return $Erro->getMessage();
		}
	}
}