<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RecommendationsModel;
use App\Models\CategoriesModel;

class FormController extends BaseController
{
    public function new()
    {
        $categoriesModel = new CategoriesModel();
        $categoriesList = $categoriesModel->findAll();

        $data = [
            "categoriesList" => $categoriesList
        ];

        return
            view('templates/header', $data).
            view("pages/form").
            view('templates/footer');
    }

    public function create()
    {
        $params = $this->request->getPost();
        $title = $params['title'];
        $address = $params['address'];
        $description = $params['description'];
        $author = $params['author'];
        $picture = $params['picture'];
        // $category_id = $params['category_id'];
        $recommendationModel = new RecommendationsModel();
        $newRecommendation = [
            'title' => $title,
            'addres' => $address,
            'description' => $description,
            'author' => $author,
            'picture' => $picture,
            // 'category_id' => $category_id,
        ];
        $recommendationModel->insert($newRecommendation);
        return redirect('index');
    }

}
