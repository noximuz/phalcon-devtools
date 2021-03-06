<?php 

namespace Phalcon\Cli {

	/**
	 * Phalcon\Cli\Router
	 *
	 * <p>Phalcon\Cli\Router is the standard framework router. Routing is the
	 * process of taking a command-line arguments and
	 * decomposing it into parameters to determine which module, task, and
	 * action of that task should receive the request</p>
	 *
	 *<code>
	 *	$router = new \Phalcon\Cli\Router();
	 *	$router->handle(array(
	 *		'module' => 'main',
	 *		'task' => 'videos',
	 *		'action' => 'process'
	 *	));
	 *	echo $router->getTaskName();
	 *</code>
	 *
	 */
	
	class Router implements \Phalcon\Di\InjectionAwareInterface {

		protected $_dependencyInjector;

		protected $_module;

		protected $_task;

		protected $_action;

		protected $_params;

		protected $_defaultModule;

		protected $_defaultTask;

		protected $_defaultAction;

		protected $_defaultParams;

		protected $_routes;

		protected $_matchedRoute;

		protected $_matches;

		protected $_wasMatched;

		/**
		 * \Phalcon\Cli\Router constructor
		 *
		 * @param boolean defaultRoutes
		 */
		public function __construct($defaultRoutes=null){ }


		/**
		 * Sets the dependency injector
		 *
		 * @param \Phalcon\DiInterface dependencyInjector
		 */
		public function setDI(\Phalcon\DiInterface $dependencyInjector){ }


		/**
		 * Returns the internal dependency injector
		 *
		 * @return \Phalcon\DiInterface
		 */
		public function getDI(){ }


		/**
		 * Sets the name of the default module
		 *
		 * @param string moduleName
		 */
		public function setDefaultModule($moduleName){ }


		/**
		 * Sets the default controller name
		 *
		 * @param string taskName
		 */
		public function setDefaultTask($taskName){ }


		/**
		 * Sets the default action name
		 *
		 * @param string actionName
		 */
		public function setDefaultAction($actionName){ }


		/**
		 * Sets an array of default paths. If a route is missing a path the router will use the defined here
		 * This method must not be used to set a 404 route
		 *
		 *<code>
		 * $router->setDefaults(array(
		 *		'module' => 'common',
		 *		'action' => 'index'
		 * ));
		 *</code>
		 *
		 * @param array defaults
		 * @return \Phalcon\Mvc\Router
		 */
		public function setDefaults($defaults){ }


		/**
		 * Handles routing information received from command-line arguments
		 *
		 * @param array arguments
		 */
		public function handle($arguments=null){ }


		/**
		 * Adds a route to the router
		 *
		 *<code>
		 * $router->add('/about', 'About::main');
		 *</code>
		 *
		 * @param string pattern
		 * @param string/array paths
		 * @return \Phalcon\Cli\Router\Route
		 */
		public function add($pattern, $paths=null){ }


		/**
		 * Returns proccesed module name
		 *
		 * @return string
		 */
		public function getModuleName(){ }


		/**
		 * Returns proccesed task name
		 *
		 * @return string
		 */
		public function getTaskName(){ }


		/**
		 * Returns proccesed action name
		 *
		 * @return string
		 */
		public function getActionName(){ }


		/**
		 * Returns proccesed extra params
		 *
		 * @return array
		 */
		public function getParams(){ }


		/**
		 * Returns the route that matchs the handled URI
		 *
		 * @return \Phalcon\Cli\Router\Route
		 */
		public function getMatchedRoute(){ }


		/**
		 * Returns the sub expressions in the regular expression matched
		 *
		 * @return array
		 */
		public function getMatches(){ }


		/**
		 * Checks if the router macthes any of the defined routes
		 *
		 * @return bool
		 */
		public function wasMatched(){ }


		/**
		 * Returns all the routes defined in the router
		 *
		 * @return \Phalcon\Cli\Router\Route[]
		 */
		public function getRoutes(){ }


		/**
		 * Returns a route object by its id
		 *
		 * @param int id
		 * @return \Phalcon\Cli\Router\Route
		 */
		public function getRouteById($id){ }


		/**
		 * Returns a route object by its name
		 *
		 * @param string name
		 * @return \Phalcon\Cli\Router\Route | boolean
		 */
		public function getRouteByName($name){ }

	}
}
