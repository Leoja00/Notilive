<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function getIndex(): string
    {
        return view('pagina');
    }
}