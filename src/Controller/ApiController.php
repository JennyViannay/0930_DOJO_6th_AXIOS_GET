<?php

namespace App\Controller;

use App\Model\ArticleManager;
use Exception;

class ApiController extends AbstractController
{
    
    public function get_age(int $age)
    {
        $now = 2020;
        return json_encode($now - $age, 200);
    }
    
    public function all_article()
    {
        // Call ArticleManager->selectAll()
        return json_encode();
    }

    public function show_article(int $id)
    {
        // Call ArticleManager->selectOneById()
        return json_encode();
    }
}
