<?php declare(strict_types=1);


namespace App\Controllers;

use App\Controller;
use App\Ret;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return Ret::ok([
            'status' => 'running'
        ]);
    }
}
