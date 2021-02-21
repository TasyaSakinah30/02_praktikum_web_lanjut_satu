<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function eduGames() {
        echo 'Marbel - Educational Games<a href="https://www.educastudio.com/category/marbel-edu-games"> Klik disini</a>';
    }
    public function kidsGames() {
        echo 'Marbel and Friends - Kids Games <a href="https://www.educastudio.com/category/marbel-and-friends-kids-games"> Klik disini</a>';
    }
    public function books() {
        echo 'Riri - Story Books <a href="https://www.educastudio.com/category/riri-story-books"> Klik disini</a>';
    }
    public function songs() {
        echo 'Kolak - Kids Songs <a href="https://www.educastudio.com/category/kolak-kids-songs"> Klik disini</a>';
    }
}
