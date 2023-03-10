<?php
		
		$funcionario1 = array(
			"nome" => "Gusta Pouca Pinca",
			"cargo" => "Faxineiro",
			"cpf" => "123.456.789-00",
			"salario" => 6000.00,
			"telefone" => "(11) 99999-9999",
			"email" => "Gusta.pinca@empresa.com"
		);

		
		$funcionario2 = array(
			"nome" => "Milim Nega",
			"cargo" => "Coordenador",
			"cpf" => "987.654.321-00",
			"salario" => 15000.00,
			"telefone" => "(11) 88888-8888",
			"email" => "milim.nega@empresa.com"
		);
	?>

	<h1>Informações de Funcionários</h1>
	<table>
		<tr>
			<th>Nome <br></th>
			<th>Cargo<br></th>
			<th>CPF<br></th>
			<th>Salário<br></th>
			<th>Telefone<br></th>
			<th>Email<br></th>
		</tr>
		<tr>
			<td><?php echo $funcionario1["nome"]; "<br>" ?></td>
			<td><?php echo $funcionario1["cargo"]; "<br>" ?></td>
			<td><?php echo $funcionario1["cpf"]; "<br>" ?></td>
			<td><?php echo "R$ " . number_format($funcionario1["salario"], 2, ',', '.'); "<br>" ?></td>
			<td><?php echo $funcionario1["telefone"]; "<br>" ?></td>
			<td><?php echo $funcionario1["email"]; "<br>" ?></td>
		</tr>
		<tr>
			<td><?php echo $funcionario2["nome"]; "<br>" ?></td>
			<td><?php echo $funcionario2["cargo"]; "<br>" ?></td>
			<td><?php echo $funcionario2["cpf"]; "<br>" ?></td>
			<td><?php echo "R$ " . number_format($funcionario2["salario"], 2, ',', '.'); "<br>" ?></td>
			<td><?php echo $funcionario2["telefone"]; "<br>" ?></td>
			<td><?php echo $funcionario2["email"]; "<br>" ?></td>
		</tr>
	</table>

