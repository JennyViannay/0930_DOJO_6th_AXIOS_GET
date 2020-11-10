<?php

namespace App\Controller;

use App\Model\ArticleManager;
use Exception;

// 200 ok
// (404 not found)
// 500 (server)
// 300 (redirect)

class ApiController extends AbstractController
{
    public function get_age(int $age)
    {
        $now = 2020;
        return json_encode($now - $age, 200);
    }
    
    public function all_articles()
    {
        $articleManager = new ArticleManager();
        $articles = $articleManager->selectAll();
        return json_encode($articles, 200);
    }

    public function show_article(int $id)
    {
        $articleManager = new ArticleManager();
        $article = $articleManager->selectOneById($id);
        return json_encode($article, 200);
    }
}
