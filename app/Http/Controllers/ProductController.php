<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function marbeledugames(){
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    }
    public function marbelandfriendskidsgames(){
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    }
    public function riristorybooks(){
        return redirect('https://www.educastudio.com/category/riri-story-books');
    }
    public function kolakkidssongs(){
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    }
    public function kabi(){
        return redirect('https://www.educastudio.com/category/kabi-islamic-books');
    }
    public function marbeljunior(){
        return redirect('https://www.educastudio.com/category/marbel-junior');
    }
    public function keonggames(){
        return redirect('https://www.educastudio.com/category/keong-casual-games');
    }
}
