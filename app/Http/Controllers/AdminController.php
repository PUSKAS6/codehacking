<?php
namespace App\Http\Controllers;
use App\Category;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    //
    public function index(){
//        return "ADMIN";
        $postsCount = Post::count();
        $categoriesCount = Category::count();
        $commentsCount = Comment::count();
        return view('admin/index', compact('postsCount','categoriesCount','commentsCount'));
//        return view('admin/index');
    }
}