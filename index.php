<?php 

/*MVC
M = Model
V = View
C = Controler

	/Página Contato/
		Contato Controler => Controlador geral, podemos executar o modelo e a view
		Contato View => Resposável por renderizar a página.
		Contato Model => Onde tem todas as funções necessárias
	----------------------------------------------------------	*/

	$autoload = function($class){
		include($class.'.php');
	};

	spl_autoload_register($autoload);

	$app = new Application();
	$app->executar();


?>