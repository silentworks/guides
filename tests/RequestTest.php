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

require_once '../slim/Request.php';
require_once 'PHPUnit/Framework.php';

class RequestTest extends PHPUnit_Framework_TestCase {

    public function setUp(){
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
        $_SERVER['DOCUMENT_ROOT'] = '/home/slimTest/public';
        $_SERVER['SERVER_ADMIN'] = "you@example.com";
        $_SERVER['SCRIPT_FILENAME'] = __FILE__;
        $_SERVER['REMOTE_PORT'] = "55426";
        $_SERVER['GATEWAY_INTERFACE'] = "CGI/1.1";
        $_SERVER['SERVER_PROTOCOL'] = "HTTP/1.1";
        $_SERVER['REQUEST_METHOD'] = "GET";
        $_SERVER['QUERY_STRING'] = "";
        $_SERVER['REQUEST_URI'] = '/foo/bar/';
        $_SERVER['SCRIPT_NAME'] = basename(__FILE__);
        $_SERVER['PHP_SELF'] = '/foo/bar/bootstrap.php';
        $_SERVER['REQUEST_TIME'] = "1285647051";
        $_SERVER['argv'] = array();
        $_SERVER['argc'] = 0;
    }

    /**
     * Test request Root is set when not in subdirectory
     *
     * Pre-conditions:
     * The HTTP request URI is /foo/bar/. The mock HTTP request simulates
     * a scenario where the Slim app resides in the subdirectory /foo/bar/.
     *
     * Post-conditions:
     * The Request root should be "/foo/bar"
     */
    public function testRequestRootWithSubdirectory(){
        $r = new Request();
        $this->assertEquals($r->root, '/foo/bar');
        $this->assertEquals($r->resource, '/');
    }

    /**
     * Test request Root is set when in subdirectory
     *
     * Pre-conditions:
     * The HTTP request URI is /foo/bar/. The mock HTTP request simulates
     * a scenario where the Slim app resides in the base document root directory.
     *
     * Post-conditions:
     * The Request root should be "/"
     */
    public function testRequestRootWithoutSubdirectory(){
        $_SERVER['PHP_SELF'] = '/bootstrap.php';
        $r = new Request();
        $this->assertEquals($r->root, '');
        $this->assertEquals($r->resource, '/foo/bar/');
    }

    /**
     * Test isAjax is set to true, when HTTP_X_REQUESTED_WITH is set to
     * 'XMLHttpRequest'.
     *
     * Pre-conditions:
     * Case A: HTTP_X_REQUESTED_WITH is set to XMLHttpRequest.
     * Case B: HTTP_X_REQUESTED_WITH is not set to XMLHttpRequest.
     * Case C: HTTP_X_REQUESTED_WITH is not set.
     *
     * Post-conditions:
     * Case A: Request::isAjax should be true.
     * Case B: Request::isAjax should be false.
     * Case C: Request::isAjax should be false.
     */
    public function testIsAjaxSet(){
        $_SERVER['HTTP_X_REQUESTED_WITH'] = 'XMLHttpRequest';
        $r = new Request();
        $this->assertTrue($r->isAjax);

        $_SERVER['HTTP_X_REQUESTED_WITH'] = 'foo';
        $r = new Request();
        $this->assertFalse($r->isAjax);

        unset($_SERVER['HTTP_X_REQUESTED_WITH']);
        $r = new Request();
        $this->assertFalse($r->isAjax);
    }

    /**
     * Test `stripSlashesFromRequestData` for $_COOKIE, $_GET, and $_POST data.
     * Keep in mind it is not possible to set `magic_quotes_gpc` in a runtime
     * context, therefore I am only testing the `stripSlashesFromRequestData`
     * method itself as it affects $_GET, $_POST, and $_COOKIE arrays.
     *
     * Pre-conditions:
     * $_COOKIE, $_GET, $_POST contains data with slashes
     *
     * Post-conditions:
     * $_COOKIE, $_GET, $_POST request data does not contain slashes
     */
    public function testStripSlashesFromRequestData() {
        $_GET['foo1'] = "bar\'d";
        $_POST['foo2'] = "bar\'d";
        $_COOKIE['foo3'] = "bar\'d";
        $getData = Request::stripSlashesFromRequestData($_GET);
        $postData = Request::stripSlashesFromRequestData($_POST);
        $cookieData = Request::stripSlashesFromRequestData($_COOKIE);
        $this->assertEquals($getData['foo1'], "bar'd");
        $this->assertEquals($postData['foo2'], "bar'd");
        $this->assertEquals($cookieData['foo3'], "bar'd");
    }

    /**
     * Test overriding HTTP request methods to force unsupported ones.
     *
     * Pre-conditions:
     * The key _METHOD must be present in POST data.
     *
     * Post-condition:
     * The method is now recognised as the specified _METHOD, and other
     * POST data is usable as PUT data.
     */
    public function testHttpMethodOverrides() {
        $_POST = array(
            'foo' => 'bar',
            '_METHOD' => 'PUT'
        );
        $request = new Request();
        $this->assertEquals($request->method, 'PUT');
        $this->assertEquals($request->put(), $request->post());
    }

    /**
     * Test setting the resource of the Request.
     *
     * Pre-conditions:
     * The REQUEST_URI is set.
     *
     * Post-conditions:
     * The resource is set to be the REQUEST_URI, without any extra GET data.
     */
    public function testSetResource() {
        $_SERVER['REQUEST_URI'] = '/foo.php?bar';
        $request = new Request();
        $this->assertEquals($request->resource, '/foo.php');

        $_SERVER['REQUEST_URI'] = '/bar.php';
        $request = new Request();
        $this->assertEquals($request->resource, '/bar.php');
    }

    /**
     * Test the params/get/put/post functions for retrieving input data.
     *
     * Pre-conditions:
     * Data is present in input arrays (POST, GET, COOKIE, etc)
     *
     * Post-conditions:
     * Requested data is returned if it is present, otherwise null.
     */
    public function testParamFunctions() {
        $_GET = array('get_foo' => 'get_bar');
        $_POST = array('post_foo' => 'post_bar',);
        $_COOKIE = array('cookie_foo' => 'cookie_bar');
        $_SERVER['REQUEST_URI'] = '';

        $request = new Request();
        $this->assertEquals($request->params('get_foo'), 'get_bar');
        $this->assertEquals($request->params('post_foo'), 'post_bar');
        $this->assertNull($request->params('null'));

        $this->assertEquals($request->get(), $_GET);
        $this->assertEquals($request->post(), $_POST);

        $this->assertEquals($request->get('get_foo'), 'get_bar');
        $this->assertEquals($request->post('post_foo'), 'post_bar');

        $this->assertEquals($request->cookie('cookie_foo'), 'cookie_bar');
        $this->assertEquals($request->header('HOST'), 'slim');

        // Handle overriding PUT
        $_POST = array(
            'put_foo' => 'put_bar',
            '_METHOD' => 'PUT'
        );
        $request = new Request();
        $this->assertEquals($request->put('put_foo'), 'put_bar');
        $this->assertEquals($request->put(), array('put_foo' => 'put_bar'));
    }

}

?>