<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RecommendationsModel;
use App\Models\CategoriesModel;

class RecommendationsController extends BaseController
{
    public function index()
    {
        return view("recommendations/index");
    }

    public function show($id)
    {
        $recommendationsModel = new RecommendationsModel();
        $recommendation = $recommendationsModel->find($id);

        // $recommendation = $recommendationsModel->join('categories', 'categories.id = recommendations.category_id')
        // ->find($id);
        $data = [
            "title" => $recommendation["title"],
            "address" => $recommendation["address"],
            "description" => $recommendation["description"],
            "author" => $recommendation["author"],
            "picture" => $recommendation["picture"]
        ];

        return view("pages/recommendation", $data);

    }
    public function edit($id)
    {
        $recommendationModel = new RecommendationsModel();
        $recommendation = $recommendationModel->find($id);

        $data = [
            "title" => $recommendation["title"],
            "address" => $recommendation["address"],
            "description" => $recommendation["description"],
            "picture" => $recommendation['picture']
        ];

        return view("recommendations/edit", $data);
    }

    public function update($id)
    {
        $params = $this->request->getPost();
        
        $data = [
            "title" => $recommendation["title"],
            "address" => $recommendation["address"],
            "description" => $recommendation["description"],
            "picture" => $recommendation['picture']
        ];

        $recommendationModel = new RecommendationsModel();
        $recommenationModel->update($id, $data);

        return redirect()->route("RecommendationsController::show/$1", [$id]);
    }

    public function delete($id)
    {
        $recommendationModel = new RecommendationsModel();
        $recommendationModel->delete($id);

        return redirect("recommendations");
    }


}
