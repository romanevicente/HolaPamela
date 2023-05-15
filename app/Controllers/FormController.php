<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class FormController extends BaseController
{
    public function form()
    {
        return
            view('templates/header').
            view("pages/form").
            view('templates/footer');
    }
}
