<?php

namespace App\Controllers;

class Components extends BaseController
{
    public function tables(): string
    {
        return view('tables');
    }

    public function charts(): string
    {
        return view('charts');
    }

    public function layoutStatic(): string
    {
        return view('layout-static');
    }

    public function layoutSidenav(): string
    {
        return view('layout-sidenav-light');
    }
}
