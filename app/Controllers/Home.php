<?php

namespace App\Controllers;

use App\Models\CategoriesModel;
use App\Models\RecommendationsModel;

class Home extends BaseController
{
    public function index()
    {

        $categoriesModel = new CategoriesModel();
        $categoriesList = $categoriesModel->findAll();


        $recommendationsModel = new RecommendationsModel();
        $recommendationsList = $recommendationsModel->orderBy('id', 'desc')
                                                    ->limit(5)
                                                    ->where('id !=', 45)
                                                    ->findAll();

        $data = [
            "categoriesList" => $categoriesList
        ];

        $data2 = [
            "recommendationsList" => $recommendationsList
        ];

        return 
            view('templates/header', $data).
            view("pages/index", $data2).
            view('templates/footer');
    }
}
