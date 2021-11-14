<?php

namespace App\Http\Controllers;

class MethodsController extends Controller
{

    public function example()
    {
        return "example";
    }

    public function __invoke()
    {
        return "invoke method";
    }

    public function get()
    {
        return "GET Method";
    }

    public function post()
    {
        return "post Method";
    }

    public function put()
    {
        return "put Method";
    }
    public function patch()
    {
        return "patch Method";
    }

    public function delete()
    {
        return "delete Method";
    }

    public function options()
    {
        return "options Method";
    }

    public function hello(?string  $name = "Default name")
    {
        return "Hello $name";
    }
}
