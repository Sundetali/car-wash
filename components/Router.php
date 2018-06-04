<?php

class Router
{

	private $routes;

	public function __construct()
	{
                session_start();
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);
	}

// Return type

	private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI'])) {
		return trim($_SERVER['REQUEST_URI'], '/');
		}
	}

	public function run()
	{
		$uri = $this->getURI();
                
                $uri = trim($uri, "/");
               
		foreach ($this->routes as $uriPattern => $path) {

			if(preg_match("~$uriPattern~", $uri)) {

				// Получаем внутренний путь из внешнего согласно правилу.

				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                                 
				$segments = explode('/', $internalRoute);
				$controllerName = array_shift($segments).'Controller';
				$controllerName = ucfirst($controllerName);
                                
				$actionName = 'action'.ucfirst(array_shift($segments));
                                $parameters = $segments;


				$controllerFile = ROOT . '/controllers/' .$controllerName. '.php';
				if (file_exists($controllerFile)) {
					include_once($controllerFile);
				}
				$controllerObject = new $controllerName;
				/*$result = $controllerObject->$actionName($parameters); - OLD VERSION */
				/*$result = call_user_func(array($controllerObject, $actionName), $parameters);*/
				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);
				echo "$controllerName $actionName";
				if ($result != null) {
					break;
				}
			}

		}
	}
}