<?php
/**
 * Slim - a micro PHP 5 framework
 *
 * @author      Josh Lockhart
 * @link        http://www.slimframework.com
 * @copyright   2011 Josh Lockhart
 *
 * MIT LICENSE
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

require_once '../slim/Router.php';
require_once '../slim/Request.php';
require_once '../slim/Route.php';
require_once 'PHPUnit/Framework.php';

class RouterTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        $_SERVER['REDIRECT_STATUS'] = "200";
        $_SERVER['HTTP_HOST'] = "slim";
        $_SERVER['HTTP_CONNECTION'] = "keep-alive";
        $_SERVER['HTTP_CACHE_CONTROL'] = "max-age=0";
        $_SERVER['HTTP_ACCEPT'] = "application/xml,application/xhtml+xml,text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
        $_SERVER['HTTP_USER_AGENT'] = "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_4; en-US) AppleWebKit/534.3 (KHTML, like Gecko) Chrome/6.0.472.63 Safari/534.3";
        $_SERVER['HTTP_ACCEPT_ENCODING'] = "gzip,deflate,sdch";
        $_SERVER['HTTP_ACCEPT_LANGUAGE'] = "en-US,en;q=0.8";
        $_SERVER['HTTP_ACCEPT_CHARSET'] = "ISO-8859-1,utf-8;q=0.7,*;q=0.3";
        $_SERVER['PATH'] = "/usr/bin:/bin:/usr/sbin:/sbin";
        $_SERVER['SERVER_SIGNATURE'] = "";
        $_SERVER['SERVER_SOFTWARE'] = "Apache";
        $_SERVER['SERVER_NAME'] = "slim";
        $_SERVER['SERVER_ADDR'] = "127.0.0.1";
        $_SERVER['SERVER_PORT'] = "80";
        $_SERVER['REMOTE_ADDR'] = "127.0.0.1";
        $_SERVER['DOCUMENT_ROOT'] = rtrim(dirname(__FILE__), '/');
        $_SERVER['SERVER_ADMIN'] = "you@example.com";
        $_SERVER['SCRIPT_FILENAME'] = __FILE__;
        $_SERVER['REMOTE_PORT'] = "55426";
        $_SERVER['REDIRECT_URL'] = "/";
        $_SERVER['GATEWAY_INTERFACE'] = "CGI/1.1";
        $_SERVER['SERVER_PROTOCOL'] = "HTTP/1.1";
        $_SERVER['REQUEST_METHOD'] = "GET";
        $_SERVER['QUERY_STRING'] = "";
        $_SERVER['REQUEST_URI'] = "/";
        $_SERVER['SCRIPT_NAME'] = basename(__FILE__);
        $_SERVER['PHP_SELF'] = '/'.basename(__FILE__);
        $_SERVER['REQUEST_TIME'] = "1285647051";
        $_SERVER['argv'] = array();
        $_SERVER['argc'] = 0;
    }

    /**
     * Router::urlFor should return a full route pattern
     * even if no params data is provided.
     */
    public function testUrlForNamedRouteWithoutParams() {
        $request = new Request();
        $router = new Router($request);
        $route = $router->map('/foo/bar', function () {}, 'GET');
        $router->cacheNamedRoute('foo', $route);
        $this->assertEquals($router->urlFor('foo'), '/foo/bar');
    }

    /**
     * Router::urlFor should eturn a full route pattern if
     * param data is provided.
     */
    public function testUrlForNamedRouteWithParams() {
        $request = new Request();
        $router = new Router($request);
        $route = $router->map('/foo/:one/and/:two', function ($one, $two) {}, 'GET');
        $router->cacheNamedRoute('foo', $route);
        $this->assertEquals($router->urlFor('foo', array('one' => 'Josh', 'two' => 'John')), '/foo/Josh/and/John');
    }

    /**
     * Router::urlFor should throw an exception if Route with name
     * does not exist.
     */
    public function testUrlForNamedRouteThatDoesNotExist() {
        $this->setExpectedException('RuntimeException');
        $request = new Request();
        $router = new Router($request);
        $route = $router->map('/foo/bar', function () {}, 'GET');
        $router->cacheNamedRoute('bar', $route);
        $router->urlFor('foo');
    }

    /**
     * Router::cacheNamedRoute should throw na exception if named Route
     * with same name already exists.
     */
    public function testNamedRouteWithExistingName() {
        $this->setExpectedException('RuntimeException');
        $request = new Request();
        $router = new Router($request);
        $route1 = $router->map('/foo/bar', function () {}, 'GET');
        $route2 = $router->map('/foo/bar/2', function () {}, 'GET');
        $router->cacheNamedRoute('bar', $route1);
        $router->cacheNamedRoute('bar', $route2);
    }

    /**
     * Router should keep reference to a callable NotFound callback
     */
    public function testNotFoundHandler() {
        $request = new Request();
        $router = new Router($request);
        $notFoundCallback = function () { echo "404"; };
        $callback = $router->notFound($notFoundCallback);
        $this->assertSame($notFoundCallback, $callback);
    }

    /**
     * Router should NOT keep reference to a callback that is not callable
     */
    public function testNotFoundHandlerIfNotCallable() {
        $request = new Request();
        $router = new Router($request);
        $notFoundCallback = 'foo';
        $callback = $router->notFound($notFoundCallback);
        $this->assertEquals($callback, null);
    }

    /**
     * Router considers HEAD requests as GET requests
     */
    public function testRouterConsidersHeadAsGet() {
        $_SERVER['REQUEST_METHOD'] = 'HEAD';
        $router = new Router(new Request());
        $route = $router->map('/', function () {}, Request::METHOD_GET);
        $numberOfMatchingRoutes = 0;
        foreach( $router->getMatchedRoutes() as $matchingRoute ) {
            $numberOfMatchingRoutes++;
        }
        $this->assertEquals(1, $numberOfMatchingRoutes);
    }

}

?>