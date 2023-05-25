<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RecommendationsModel;
use App\Models\CategoriesModel;
use Cloudinary\Api\Upload\UploadApi;

class RecommendationsController extends BaseController
{
    public function index()
    {
        return view("recommendations/index");
    }

    public function show($id)
    {
        $categoriesModel = new CategoriesModel();
        $categoriesList = $categoriesModel->findAll();

        $data = [
            "categoriesList" => $categoriesList
        ];

        $recommendationsModel = new RecommendationsModel();
        $recommendation = $recommendationsModel->find($id);
        $db = \Config\Database::connect();
        $builder = $db->table('recommendations');
        $builder->select('*, recommendations.title AS recommendationsTitle, categories.title AS categoryTitle');
        $builder->join('categories', 'recommendations.category_id = categories.id');
        $builder->where('recommendations.id', $id);
        $recommendation = $builder->get()->getResultArray();

        // $recommendation = $recommendationsModel->join('categories', 'categories.id = recommendations.category_id')
        // ->find($id);
        $data2 = [
            "id" => $id,
            "title" => $recommendation[0]["recommendationsTitle"],
            "address" => $recommendation[0]["address"],
            "description" => $recommendation[0]["description"],
            "author" => $recommendation[0]["author"],
            "picture" => $recommendation[0]["picture"]
        ];



        return view('templates/header', $data).
               view("pages/recommendation", $data2).
               view('templates/footer');

    }

    public function new()
    {
        $categoriesModel = new CategoriesModel();
        $categoriesList = $categoriesModel->findAll();

        $data = [
            "categoriesList" => $categoriesList
        ];

        // $recommendationModel = new RecommendationsModel();
        // $recommendationList = $recommendationModel->findAll();

        // $data2 = [
        //     "recommendationList" => $recommendationList
        // ];


        return
            view('templates/header', $data).
            view("pages/form", $data).
            view('templates/footer');
    }

    public function create()
    {
        $params = $this->request->getPost();
        $picture = $this->request->getFile("picture");
 

        $title = $params['title'];
        $address = $params['address'];
        $description = $params['description'];
        $author = $params['author'];
        // $picture = $params['picture'];
        $category = $params['category'];
        d($category);
        $recommendationModel = new RecommendationsModel();
        $categoriesModel = new CategoriesModel();

        $category_datas = $categoriesModel->where('title', $category)->findAll();
        $category_id = $category_datas[0];
    //    $category_id = $category_datas[0]['id'];

        $newRecommendation = [
            'title' => $title,
            'address' => $address,
            'description' => $description,
            'author' => $author,
            // 'picture' => $picture,
            'category_id' => $category_id,
        ];

        if ($picture->isValid()) { 	
            $uploadApi = new UploadApi(); 	
            $res = $uploadApi->upload($picture->getTempName(), ['folder' => 'upload']); 	 	
            $url = $res["secure_url"]; 	 	
            $newRecommendation["picture"] = $url; 	
        }

        $recommendationModel->insert($newRecommendation);
        return redirect('/');
    }


    public function edit($id)
    {
        $recommendationModel = new RecommendationsModel();
        $recommendation = $recommendationModel->find($id);

        $data = [
            "id" => $id,
            "title" => $recommendation["title"],
            "address" => $recommendation["address"],
            "description" => $recommendation["description"],
            "picture" => $recommendation['picture']
        ];

        return view("pages/edit", $data);
    }

    public function update($id)
    {
        $recommendation = $this->request->getPost();
        
        $data = [
            "id" => $id,
            "title" => $recommendation["title"],
            "address" => $recommendation["address"],
            "description" => $recommendation["description"],
            "picture" => $recommendation['picture']
        ];

        $recommendationModel = new RecommendationsModel();
        $recommendationModel->update($id, $data);

        return redirect()->route("RecommendationsController::show/$1", [$id]);
    }

    public function delete($id)
    {
        $recommendationModel = new RecommendationsModel();
        $recommendationModel->delete($id);

        return redirect("recommendations");
    }


}


