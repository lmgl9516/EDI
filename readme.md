# Crear una view
###Para desarrollar una pantalla

1. Crear un directorio en la ruta:

	```
	/resources/views/suDirectorio
	```

	> Nombren el directorio con un título lógico que describa todas las vistas que englobará. 

	> Usen notación **camelCase** 

2. Crear todas las **views** que necesiten dentro de su directorio.

	```
	nombreView.blade.php
	```

	> No olviden la extensión ``blade.php``
	
3. Analicen el **layout** sobre el cual van a insertar esa view y definan sus etiquetas

	> Con ``extends`` definan qué layout se usará:

	```
	@extends('subdirectory.layoutName')
	```

	> Para llamar un layout dentro de un subdirectorio usen un **.** para describir la ruta.

	> Con ``section`` definan la sección que se insertará en el ``yield`` del layout que están usando.
		
	```
	@section('sectionName')
		/*
		 * Your code here...
		/*
	@stop

	```
