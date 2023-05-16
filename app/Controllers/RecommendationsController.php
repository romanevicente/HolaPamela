<?php

namespace App\Controllers;

use App\Controllers\BaseController;

$this->load->database();

class RecommendationsController extends BaseController
{
    public function index()
    {
        return view("recommendations/index");
    }
}
