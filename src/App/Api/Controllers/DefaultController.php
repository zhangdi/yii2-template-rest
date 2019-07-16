<?php


namespace App\Api\Controllers;

use App\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return [
            'name' => 'API'
        ];
    }
}