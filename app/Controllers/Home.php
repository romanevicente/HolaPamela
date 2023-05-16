<?php

namespace App\Controllers;

use App\Models\CategoriesModel;

class Home extends BaseController
{
    public function index()
    {

        $categoriesModel = new CategoriesModel();
        $categoriesList = $categoriesModel->findAll();

        $data = [
            "categoriesList" => $categoriesList
        ];

        return 
            view('templates/header', $data).
            view("pages/index").
            view('templates/footer');
    }
}
