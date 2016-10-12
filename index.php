<?php 

class Pico {

    public function addPico() {
        $this->placa = $_POST['placa'];
    }

}
$worker = new Pico();

if(isset($_POST['placa'])){ $placa = $_POST['placa']; } 

if ( isset( $_POST['Submit1'] ) ) {
	$placa=$_POST['placa'];
	$fecha=$_POST['fecha'];
	
	$dias = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
	$dia = $dias[date('N', strtotime($fecha))-1]; 
	//echo $dia ;
	$placa2=substr($placa,-1,1);
		
		if ($placa2==1 or $placa2==2){
			echo "De acuerdo a su placa <strong>".$placa."</strong> usted debe parar el día Miercoles<br><br>";
		}
		if ($placa2==3 or $placa2==4){
			echo "De acuerdo a su placa <strong>".$placa."</strong> usted debe parar el día Jueves<br><br>";
		}
		if ($placa2==5 or $placa2==6){
			echo "De acuerdo a su placa <strong>".$placa."</strong> usted debe parar el día Viernes<br><br>";
		}
		if ($placa2==7 or $placa2==8){
			echo "De acuerdo a su placa <strong>".$placa."</strong> usted debe parar el día Sabado<br><br>";
		}
		if ($placa2==9){
			echo "De acuerdo a su placa <strong>".$placa."</strong> usted debe parar el día Martes<br><br>";
		}
		
		//AQUI VEREMOS SEGUN FECHA ESCOGIDA
		
		if($dia=='Martes' and $placa2==9){
			echo "<span style='background-color:red; color:#ffffff; padding:5px'>".$fecha."</span> - En la fecha que consulto NO puede circular";
		}elseif($dia=='Miercoles' and $placa2==1 or $placa2==2){
			echo "<span style='background-color:red; color:#ffffff; padding:5px'>".$fecha."</span> - En la fecha que consulto NO puede circular";
		}elseif($dia=='Jueves' and $placa2==3 or $placa2==4){
			echo "<span style='background-color:red; color:#ffffff; padding:5px'>".$fecha."</span> - En la fecha que consulto NO puede circular";
		}elseif($dia=='Viernes' and $placa2==5 or $placa2==6){
			echo "<span style='background-color:red; color:#ffffff; padding:5px'>".$fecha."</span> - En la fecha que consulto NO puede circular";
		}elseif($dia=='Sabado' and $placa2==7 or $placa2==8){
			echo "<span style='background-color:red; color:#ffffff; padding:5px'>".$fecha."</span> - En la fecha que consulto NO puede circular";
		}else{
			echo "<span style='background-color:green; color:#ffffff; padding:5px'>".$fecha."</span> - En la fecha que consulto SI puede circular";
		}

			echo "<br><br><input type='submit' onclick='JavaScript: window.history.back(1);' value='Consultar nuevamente' />";
	}else {

?>

<form method="post">
	<p style="color:blue; font-size:20px">
		VERIFICACIÓN DE PICO Y PLACA
	</p>
	<span>
		Por favor, ingrese los siguientes datos.
	</span>
	<br><br>
	
	
<table>
	<tr>
		<td>
			Placa:
		</td>
		<td>
			Fecha:		
		</td>
	</tr>

	<tr>
		<td>
			<input type="text" required placeholder="GOS-111" name="placa" style="width:100px" />
		</td>
		<td>
			<input required type="date" name="fecha" />		
		</td>
	</tr>	

	<tr>
		<td colspan="2"> <br>
			<input name="Submit1" id="Submit1" type="submit" value="Consultar">
		</td>
	</tr>
</table>
</form>
<?php 
}
?>
