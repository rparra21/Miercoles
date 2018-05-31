<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use Illuminate\Support\Facades\Response;

class WidgetController extends Controller
{
    //
    public function index(){
        
        $categories = Category::all();
        return view("widget/setup")
                    ->with('categories', $categories);
    }

    public function getWidget($snippets, $quantity, $categories){

        header("Access-Control-Allow-Origin: *");
        $host = gethostname();
        $server = $_SERVER['SERVER_NAME'];
        
        $slug[] = "";
        
        $categorys = explode(",", $categories);

        for($i = 0; $i < count($categorys); ++$i)
            $slug[$i] = $categorys[$i];
       


       $articles = Article::whereHas('categories', function($q) use ($slug)
               {
                    $q->whereIn('category', $slug);
               })->take($quantity)->get();

         /*      $articles = Article::whereHas('categories', function($q)
               {
                   // $catego = $categories;
                    $q->whereIn('category', ['sports', 'technology']);
               })->get();
                
       
        /*$articles = Article::with('categories')
                            ->orderBy('order', 'desc')
                            ->take($quantity)
                            ->get();*/                     
      
        //$posts = Article::has('categories')->get();          
        /*$articles = Article::whereHas('categories', function($q)
        {   
            $categoryss = explode(",", $categories);
            $categorys = ['sports', 'technology'];
            $q->whereIn('category', $categorys);

        })->get();*/

        return view("widget.widget")
                    ->with('articles', $articles)
                    ->with('quantity', $quantity)
                    ->with('host', $host)
                    ->with('server', $server);
    }


    public function widgetAll(){
        $html = "<div> <h1>HOla mundo </h1> </div>";
        header("Access-Control-Allow-Origin: *");
        return $html;
    }
}
