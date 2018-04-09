<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::prefix('polygonpanel', function ($routes) {
    $routes->connect('/', ['prefix'=>'Admin','controller' => 'Home', 'action' => 'index']);
    $routes->connect('/confirm', ['prefix'=>'Admin','controller' => 'Admin', 'action' => 'confirmAdmin']);
    $routes->connect('/maintenance', ['prefix'=>'Admin','controller' => 'Admin', 'action' => 'maintenance']);
    $routes->connect('/loginmaintain', ['prefix'=>'Admin','controller' => 'Admin', 'action' => 'loginmaintain']);
    $routes->connect('/onoff', ['prefix'=>'Admin','controller' => 'Admin', 'action' => 'onoff']);
    $routes->connect('/logout', ['prefix'=>'Admin','controller' => 'Admin', 'action' => 'logout']);
    $routes->connect('/settings', ['prefix'=>'Admin','controller' => 'Home', 'action' => 'settings']);
    $routes->connect('/setconfig', ['prefix'=>'Admin','controller' => 'Home', 'action' => 'setconfig']);
    $routes->connect('/setconfigLogin', ['prefix'=>'Admin','controller' => 'Home', 'action' => 'setconfiglogin']);
    $routes->connect('/templateElement', ['prefix'=>'Admin','controller'=>'Webview','action'=>'templateElement']);
    
    $routes->fallbacks(DashedRoute::class);
});

Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'index','home']);
    $routes->connect('/login', ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('/logout', ['controller' => 'Users', 'action' => 'logout']);
    $routes->connect('/fblogin', ['controller' => 'Users', 'action' => 'facebookLogin']);
    $routes->connect('/maintenance', ['controller' => 'Maintenance', 'action' => 'maintenance']);
    $routes->connect('/panel', ['controller' => 'Dashboard', 'action' => 'index']);
    $routes->connect('/api/:version/:node/*', 
        ['controller' => 'BlockChain', 'action' => 'dispatcher'])
    ->setPass(['version','node']);
    $routes->connect('/mce', ['controller' => 'Pages', 'action' => 'mce']);
    $routes->connect('/editor_preview', ['controller' => 'Pages', 'action' => 'editorPreview']);
    $routes->connect('/video/*', ['controller' => 'Pages', 'action' => 'video']);
    $routes->connect('/kanji/*', ['controller' => 'Pages', 'action' => 'kanji']);
    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    //$routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks(DashedRoute::class);
});

/**
 * Load all plugin routes. See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
