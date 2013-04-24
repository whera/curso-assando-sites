<?php
class Inscricao extends AppModel {

	//public $useTable     = 'inscricoes';
	public $displayField = 'nome';
	public $order        = array('nome' => 'ASC');

	public $validate = array(
        'nome' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Você deve preencher o Nome.',
            ),
        ),
        'email' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Você deve preencher o Email.',
            ),
            array(
                'rule' => 'email',
                'message' => 'Você deve preencher um email válido.',
            ),
            array(
                'rule' => 'isUnique',
                'message' => 'Este email já existe em nosso cadastro.',
            ),
        ),
        'telefone' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Você deve preencher o Telefone.',
            ),
            array(
                'rule' => 'naturalNumber',
                'message' => 'Somente são aceitos números para este campo.',
            ),
        ),
        'endereco' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Você deve preencher o Endereço.',
            ),
            array(
                'rule' => array('minLength', 10),
                'message' => 'Você deve informar no mínimo 10 caracteres para o endereço.',
            ),
        )
    );




	public function estados(){
		return array(
			"AC"=>"Acre",
			"AL"=>"Alagoas",
			"AP"=>"Amapá",
			"AM"=>"Amazonas",
			"BA"=>"Bahia",
			"CE"=>"Ceará",
			"DF"=>"Distrito Federal",
			"ES"=>"Espírito Santo",
			"GO"=>"Goiás",
			"MA"=>"Maranhão",
			"MT"=>"Mato Grosso",
			"MS"=>"Mato Grosso do Sul",
			"MG"=>"Minas Gerais",
			"PA"=>"Pará",
			"PB"=>"Paraíba",
			"PR"=>"Paraná",
			"PE"=>"Pernambuco",
			"PI"=>"Piauí",
			"RJ"=>"Rio de Janeiro",
			"RN"=>"Rio Grande do Norte",
			"RS"=>"Rio Grande do Sul",
			"RO"=>"Rondônia",
			"RR"=>"Roraima",
			"SC"=>"Santa Catarina",
			"SP"=>"São Paulo",
			"SE"=>"Sergipe",
			"TO"=>"Tocantins"
		);
	}



}
?>