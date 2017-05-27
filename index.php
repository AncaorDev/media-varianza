<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Media y Varianza</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="jquery/1.11.0/jquery.min.1.11.0.js"></script>
	<script>
		$("document").ready(function(){
			$("#addinput").click(function(){
				// var intId = $("#inputs div").length + 1;
				var fieldWrapper = $("<span>");
				var fName = $("<input required type=\"text\" class=\"fieldname\" name=\"valor[]\"/>");
				var removeButton = $("<input type=\"button\" class=\"remove\" value=\"-\" /></br>");
				removeButton.click(function() {
		            $(this).parent().remove();
		        });
				fieldWrapper.append(fName);
		        fieldWrapper.append(removeButton);
		        $("#inputs").append(fieldWrapper);
		        return false;
			});

			$("#addinput2").click(function(){
				// var intId = $("#inputs div").length + 1;
				var fieldWrapper = $("<tr>");
				var rango = $("<td><input required type=\"text\" class=\"fieldname\" name=\"rango[]\"/></td>");
				var xi = $("<td><input required type=\"text\" class=\"fieldname\" name=\"xi[]\"/></td>");
				var fi = $("<td><input required type=\"text\" class=\"fieldname\" name=\"fi[]\"/></td>");
				var removeButton = $("<td style=\"text-align:center;\"><input type=\"button\" class=\"remove\" value=\"-\" /></td>");
				removeButton.click(function() {
		            $(this).parent().remove();
		        });
				fieldWrapper.append(rango);
				fieldWrapper.append(xi);
				fieldWrapper.append(fi);
		        fieldWrapper.append(removeButton);
		        $("#table").append(fieldWrapper);
		        return false;
			});

		});
	</script>	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="jumbotron">
				  <h2>MEDIA ARITMETICA Y VARIANZA (DATOS AGRUPADOS)</h2>
				  <h3>Datos : <a id="addinput" class="btn btn-primary" href="">+</a></h3>
				  <form action="media.php" method="POST">
				  	<div id="inputs">
						<span>
							<input required type="text" name="valor[]">
						</span>
						</br>
					</div>
					<br>
					<input type="submit" value="Calcular">
				  </form>
				  <!-- <p><a id="btn-calcular" class="btn btn-primary btn-lg"></a></p> -->
				</div>
			</div>
		</div>
	</div>

		<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="jumbotron">
				  <h2>MEDIA ARITMETICA Y VARIANZA (DATOS NO AGRUPADOS)</h2>
				  <h3>Datos : <a id="addinput2" class="btn btn-primary" href="">+</a></h3>
				  <form action="media2.php" method="POST">
				  	<div >
				  	<table id="table" border="2" >
				  		<th width="180" style="text-align: center;">Rango</th>
				  		<th width="120" style="text-align: center;" >x<sub>i</sub></th>
				  		<th width="120" style="text-align: center;">f<sub>i</sub></th>
				  		<th width="50" style="text-align: center;">-</th>
				  		<tr>
				  			<td><input required type="text" name="rango[]"></td>
				  			<td><input required type="text" name="xi[]"> </td>
				  			<td><input required type="text" name="fi[]"></td>
				  			<td> </td>
				  		</tr>
				  	</table>
					</div>
					<br>
					<input type="submit" value="Calcular">
				  </form>
				  <!-- <p><a id="btn-calcular" class="btn btn-primary btn-lg"></a></p> -->
				</div>
			</div>
		</div>
	</div>

<!-- Bootstrap -->
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>