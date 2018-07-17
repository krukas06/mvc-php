<?php
class Router
 {
  private $routes;

  public function __construct()
  {
    $routesPath= ROOT.'/config/routes.php';
    $this->routes=include($routesPath);
  }
  
  //ПОЛУЧАЕМ СТРОКУ ЗАПРОСА
  public function getURI(){
  		if(!empty($_SERVER['REQUEST_URI'])){
  		return trim($_SERVER['REQUEST_URI'],'/');
  	}
  }
  

  public function run()
  {
  	//ПОЛУЧАЕМ СТРОКУ ЗАПРОСА
  	$uri=$this->getURI();
  	
  	//ПРОВЕРИТЬ НАЛИЧИЕ ТАКОГО ЗАПРОСА В routes.php
  	foreach ($this->routes as $uriPattern => $path) {
  		if (preg_match("~$uriPattern~", $uri)){

  			
  			//ОПРЕДЕЛЯЕМ КАКОЙ КОНТРОЛЛЕР 
  			//И ACTION ОБРАБАТЫВАЕТ ЗАПРОС
  			$segments=explode('/', $path);

  			$controllerName = array_shift($segments).'Controller';
  			$controllerName=ucfirst($controllerName);

  			$actionName= 'action'.ucfirst(array_shift($segments));


  			//ПОДКЛЮЧИТЬ ФАЙЛ КЛАССА КОНТОЛЛЕРА
  			$controllerFile = ROOT.'/controllers/'.$controllerName.'.php';

  	        if (file_exists($controllerFile)){
  	        	include_once($controllerFile);
  	        }	


  	        //СОЗДАТЬ ОБЪЕКТ, ВЫЗВАТЬ МЕТОД (Т Е action)
  	        $controllerObject= new $controllerName;
  	        $result=$controllerObject->$actionName();
  	        if ($result !=null){
  	        	break;
  	        }
  		}
  	}
  }
 }
 ?> 