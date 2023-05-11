<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RecommendationsController extends BaseController
{
    public function index()
    {
        return view("recommendations/index");
    }
}
