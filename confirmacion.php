<?php 

//isset es verdadero si la variable que se le pasa como parámetro no está vacía

//si se ha pulsado el botón de enviar formulario
if (isset($_POST["enviar"])){
	
		//se crea la variable "de" y se le asigna lo que el usuario ha escrito en el campo "de" del formulario
		$de=$_POST["nombre"];
		
		//se crea la variable "asunto" y se le asigna lo que el usuario ha escrito en el campo "asunto" del formulario
		$asunto=$_POST["subject"];
				
		
		//se crea la variable "mensaje" y se le asigna lo que el usuario ha escrito en el campo "mensaje" del formulario
		$mensaje=$_POST["coments"];

		 
		//sintaxis mail(destino, asunto,mensaje,cabeceras);
		mail("franverde03@gmail.com",$asunto,$mensaje,"From:$de\n");
		
		//mensaje de confirmación de envío
		echo "El formulario ha sido enviado con exito.";
}
?>