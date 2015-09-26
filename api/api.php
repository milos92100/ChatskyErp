<?php
require './../conf/conf.php';

/**
 *
 * @var Request
 */
$request = Request::createFromGlobals();

$controller_name = $request->get("controller") . "Controller";
$action = $request->get("action");

$controller = new $controller_name($request);
$data = $controller->$action();

$response = new Response();
$response->setData($data)->send();