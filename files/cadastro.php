<!DOCTYPE html> <!--fiz em html pois estava sem servidor tem que mudar pra php depois-->
<html>
<head>
	<meta charset="utf-8">
	<!--titulo da pagina-->
	<title>Cadastro</title> 
	<link rel="stylesheet" type="text/css" href="cadastro.css">
	
</head>
<body>
	<form  method="POST" action="Cadastro.php">
	<!--DADOS PESSOAIS-->
	<fieldset class="borda">
	<legend>Dados Pessoais</legend>
	<table cellspacing="10">
	<div class="textinput">
	<tr>
		<td>
			<label for ="nome"> Nome:</label>
		</td>
		
		<td align="left">
			<input type="text"  name="nome">
		</td>
		<td>
			<label for ="sobrenome">Sobrenome:</label>
		</td>
		<td align="left">
			<input type="text" name="sobrenome">
		</td>
	</tr>
	</div>
	<div class="textinput">
	<tr>
		<td>
			<label for ="nascimento">Nascimento:</label>
		</td>
		<td align="left">
			<input type="text" name="dia" size="2" maxlength="2" value="dd">
		</td>
		<td align="left">
			<input type="text" name="mes" size="2" maxlength="2" value="mm">
		</td>
		<td align="left">
			<input type="text" name="ano" size="4" maxlength="4" value="aa">
		</td>

	</tr>
	</div>
	<div class="textinput">
	<tr>	
		<td>
			<label for ="rg">RG:</label>
		</td>
		<td align="left">
			<input type="text" name="rg" size="12" maxlength="12">
		</td>
	</tr>
	</div>
	<div class="textinput">
	<tr>
		<td>
			<label for="cpf">CPF:</label>
		</td>
		<td align="left">
			<input type="text" name="cpf" size="11" maxlength="11">
		</td>
	</tr>
	</div>
	</table>	
	</fieldset>
	
	<br>
	<!-- DADOS DE ENDEREÇO-->	
	<fieldset class="borda">

	<legend> Dados de Endereço</legend>
		<table cellspacing="10">
	<div class="textinput">	
	<tr>
		<td>
			<label for="rua">Rua:</label>
		</td>
		<td align="left">
			<input type="text" name="rua">
		</td>
		<td>
			<label for="numero">Número:</label>
		</td>
		<td align="left">
			<input type="text" name="numero" size="4">
		</td>
	</tr>
	</div>
	<div class="textinput">
	<tr>
		<td>
			<label for="bairro">Bairro:</label>
		</td>
		<td align="left">
			<input type="text" name="bairro">
		</td>
	</tr>
	</div>
	<div class="textinput">
	<tr>
		<td>
			<label for="estado">Estado:</label>
		</td>
		<td align="left">
			<select id="estado" name="estado">
			<option>---------------</option>
			<option value="ac">Acre</option> 
			<option value="al">Alagoas</option> 
			<option value="am">Amazonas</option> 
			<option value="ap">Amapá</option> 
			<option value="ba">Bahia</option> 
			<option value="ce">Ceará</option> 
			<option value="df">Distrito Federal</option> 
			<option value="es">Espírito Santo</option> 
			<option value="go">Goiás</option> 
			<option value="ma">Maranhão</option> 
			<option value="mt">Mato Grosso</option> 
			<option value="ms">Mato Grosso do Sul</option> 
			<option value="mg">Minas Gerais</option> 
			<option value="pa">Pará</option> 
			<option value="pb">Paraíba</option> 
			<option value="pr">Paraná</option> 
			<option value="pe">Pernambuco</option> 
			<option value="pi">Piauí</option> 
			<option value="rj">Rio de Janeiro</option> 
			<option value="rn">Rio Grande do Norte</option> 
			<option value="ro">Rondônia</option> 
			<option value="rs">Rio Grande do Sul</option> 
			<option value="rr">Roraima</option> 
			<option value="sc">Santa Catarina</option> 
			<option value="se">Sergipe</option> 
			<option value="sp">São Paulo</option> 
			<option value="to">Tocantins</option> 
		   </select>
		</td>
	</tr>
	</div>
	<div class="textinput">
	<tr>
		<td>
			<label for="cidade">Cidade:</label>
		</td>
		<td align="left">
			<input type="text" name="cidade">
		</td>
	</tr>
	</div>
	<div class="textinput">
	<tr>
		<td>
			<label for="cep">CEP:</label>
		</td>
		<td align="left">
			<input type="text" name="cep" size="5" maxlength="5">
			<input type="text" name="digcep" size="3" maxlength="3">
		</td>
	</tr>
	</div>
	</table>
	</fieldset>
	</form>
	<br>
	
	<!--DADOS DE LOGIN-->
	<fieldset class="borda">
	<legend> Dados de Login</legend>
	<table cellspacing="10">
	<div class="textinput">
	<tr>
		<td>
			<label for="email">E-mail:</label>
		</td>
		<td align="left">
			<input type="text" name="email">
		</td>
	</tr>
	</div>
	<div class="textinput">
	<tr>
		<td>
			<label for="login">Login de usuário:</label>
		</td>
		<td align="left">
			<input type="text" name="login">
		</td>
	</tr>
	</div>
	<div class="textinput">
	<tr>
		<td>
			<label  for="senha">Senha:</label>
		</td>
		<td align="left">
			<input type="password" name="senha">
		</td>
	</tr>
	</div>
	<div class="textinput">
	<tr>
		<td>
			<label for="confirmasenha">Confirme a senha</label>
		</td>
		<td align="left">
			<input type="password" name="confirmasenha">
		</td>
	</tr>
	</div>
	</table>
	</fieldset>
	
	<br>
	<!--botão confirmar cadastro e botão limpar para limpar todo o cadastro-->
	<input class="btn" type="submit" value="Ok">
	<input class="btn" type="reset"  value="Limpar">
		
	</form>
</body>
</html>