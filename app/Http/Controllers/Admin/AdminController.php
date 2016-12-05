<?php
/**
 * Created by PhpStorm.
 * User: forever-pc
 * Date: 05/07/2016
 * Time: 10:15 CH
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view("admin.index");
    }
}