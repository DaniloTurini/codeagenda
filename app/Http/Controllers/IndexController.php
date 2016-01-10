<?php
/**
 * Created by PhpStorm.
 * User: danilo
 * Date: 10/01/16
 * Time: 09:02
 */

namespace CodeAgenda\Http\Controllers;


class IndexController extends Controller
{
    public function index()
    {
        return view('layout');
    }

}