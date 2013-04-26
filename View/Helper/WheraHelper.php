<?php
App::uses('AppHelper', 'View/Helper');

class WheraHelper extends AppHelper {

	function limita_caracteres($texto, $limite = 200, $quebra = false) {
	    $tamanho = strlen($texto);

	    // Verifica se o tamanho do texto é menor ou igual ao limite
	    if ($tamanho <= $limite) {
	        $novo_texto = $texto;
	    // Se o tamanho do texto for maior que o limite
	    } else {
	        // Verifica a opção de quebrar o texto
	        if ($quebra == true) {
	            $novo_texto = trim(substr($texto, 0, $limite)).'...';
	        // Se não, corta $texto na última palavra antes do limite
	        } else {
	            // Localiza o útlimo espaço antes de $limite
	            $ultimo_espaco = strrpos(substr($texto, 0, $limite), ' ');
	            // Corta o $texto até a posição localizada
	            $novo_texto = trim(substr($texto, 0, $ultimo_espaco)).'...';
	        }
	    }

	    // Retorna o valor formatado
	    return $novo_texto;
	}

}
?>