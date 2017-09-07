<div class="row" style="color:#000;margin-top: 2%;">
	<div class="col s1 m1 l1"></div>
	<table class="col s10 m10 l10 striped responsive-table subcontainer">
		<thead>
			<tr>
			<th>Cliente</th>
			<th>Data</th>
			<th>Vendedor</th>
			<th>Total</th>
			<th>XML</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				require_once("php/conexao.php");
				$query = mysqli_query($con, "SELECT * FROM orcamento");
				while($result = mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?=$result['nomeusuario']?></td>
				<td><?=$result['dtemissao']?></td>
				<td><?=$result['idusuariovendedor']?></td>
				<td><?=$result['valortotalorcamento']?></td>
				<td><a class="waves-effect waves-light btn">Download</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
<div class="col s1 m1 l1"></div>
</div>