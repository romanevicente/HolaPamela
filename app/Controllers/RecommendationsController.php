<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RecommendationsModel;

$this->load->database();

class RecommendationsController extends BaseController
{
    public function index()
    {
        return view("recommendations/index");
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

}
