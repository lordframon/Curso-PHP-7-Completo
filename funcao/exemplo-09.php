<?php 
	
	$hierarquia = array (
		array(
			'nome_cargo' => 'CEO',
			'subordinados' => array (
				//Inicio: Direitor Comercial
				array(
					'nome_cargo' => 'Direitor Comercial',
					'subordinados' =>array(
						//Inicio: Gerente de Vendas
						array(
							'nome_cargo' => 'Gerente de Vendas'
						)
						//Termino: Gerente de vendas
					)
				),
				//Termino Direito comecial
				//Inicio: Direito Financeiro
				array(
					'nome_cargo'=>'Direitor Financeiro',
					'subordinados' => array(
						//Inicio: Gerente de contas
						array(
							'nome_cargo' =>'Gerente de Contas a Paga',
							'subordinados'=>array (
								//Inicio: Supervisor de pagamentos
								array(
									'nome_cargo'=>'Superviso de Contas a Paga'
								)
								//Termino: Superviso de pagamentos
							)
						),
						//Termino: gerente de contas
						//Inicio: Gerente de Compras
						array(
							'nome_cargo'=>'GErente de compras',
							'subordinados'=>array(
								//Inicio: Superviso de Suprimentos
								array(
									'nome_cargo'=>'Supervisor de Suprimentos'
								)
								//Termino: Superviso de Suprimentos
							)
						)
						//Termino: Gerente de Compras
					)
				)
				//Termino: Dreitor Financeiro
			)
		)
	);

	function exibir($cargos){

		$html = '<ul>';

		foreach ($cargos as $cargo) {
			
			$html .= "<li>";

			$html .= $cargo ['nome_cargo'];

			if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
				$html .= exibir($cargo['subordinados']);
			}

			$html .= "</li>";
		}

		$html .= '</ul>';

		return $html;
	}

	echo exibir($hierarquia);
 ?>