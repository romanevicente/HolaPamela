<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RecommendationsModel;
use App\Models\CategoriesModel;

class CategoriesController extends BaseController
{
    public function cat($id)
    {
        $categoriesModel = new CategoriesModel();
        $categoriesList = $categoriesModel->findAll();

        $data = [
            "categoriesList" => $categoriesList
        ];
       
        $recommendationsModel = new RecommendationsModel();
        $recommandationList = $recommendationsModel->where('category_id', $id)->findAll();
                                                   
        $data2 = [
            "recommandationList" => $recommandationList
        ];

        return 
            view('templates/header', $data).
            view("pages/cat", $data2).
            view('templates/footer');
    }
}
