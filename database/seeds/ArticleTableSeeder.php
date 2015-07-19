<?php

use Byng\Article;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articlesJson = File::get(storage_path() . "/jsondata/news.json");
        $articles = json_decode($articlesJson);
        foreach ($articles as $article) {
            Article::create(array(
                'type'     => $article->type,
                'url'      => $article->url,
                'media_id' => $article->mediaId,
                'title'    => $article->title,
                'summary'  => $article->summary,
                'posted'   => $article->posted,
                'author'   => $article->author,
                'source'   => $article->source
            ));
        }
    }
}
