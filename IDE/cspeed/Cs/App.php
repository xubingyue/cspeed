<?php

namespace Cs;


class App
{
    /**
     * App constructor.
     * @param null $diObject  The Cs\di\Di class object
     */
    function __construct($diObject = NULL)
    {

    }

    /**
     * Match GET request
     * @param $url          The url which you want to match from the request
     * @param $closure      The Closure will be invoked when the matching process success
     */
    function get($url, $closure)
    {

    }

    /**
     * Match POST request
     * @param $url          The url which you want to match from the request
     * @param $closure      The Closure will be invoked when the matching process success
     */
    function post($url, $closure)
    {

    }

    /**
     * Match PUT request
     * @param $url          The url which you want to match from the request
     * @param $closure      The Closure will be invoked when the matching process success
     */
    function put($url, $closure)
    {

    }

    /**
     * Match PATCH request
     * @param $url          The url which you want to match from the request
     * @param $closure      The Closure will be invoked when the matching process success
     */
    function patch($url, $closure)
    {

    }

    /**
     * Match DELETE request
     * @param $url          The url which you want to match from the request
     * @param $closure      The Closure will be invoked when the matching process success
     */
    function delete($url, $closure)
    {

    }

    /**
     * Match HEAD request
     * @param $url          The url which you want to match from the request
     * @param $closure      The Closure will be invoked when the matching process success
     */
    function head($url, $closure)
    {

    }

    /**
     * Match OPTIONS request
     * @param $url          The url which you want to match from the request
     * @param $closure      The Closure will be invoked when the matching process success
     */
    function options($url, $closure)
    {

    }

    /**
     * Autoload function, invoked by CSpeed extension
     * @param $className WHICH file you want to load
     */
    private function autoload($className)
    {

    }

    /**
     * Setting the alias which you want let the CSpeed to load the class file automatically
     * @param $aliasKey         The alias key
     * @param $aliasFullPath    The full path assigned by the alias key
     */
    function setAlias($aliasKey, $aliasFullPath)
    {

    }

    /**
     * Run the WEB MVC process
     */
    function run()
    {

    }

    /**
     * Register the needed modules, to let the CSpeed only parsing the given module.
     * $param array $modules  The module which you allowed to parse.
     * for example :
     * registerModules(['admin', 'frontend']);
     */
    function registerModules(array $modules)
    {

    }
}