<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Category;

class WebBlogController extends Controller
{
    public function web_blog()
    {
        $blog = Blog::where('status', 1)->get();
        $faq = Faq::where('status', 1)->where(function ($query) {
            $query->where('page_id', 17)
                  ->orWhere(function($query1) {
                      $query1->whereNull('pade_detail_id')
                             ->whereNull('page_id');
                  });
        })->get();
        $data = array(
            'title' => 'Blog',
            'blog' => $blog,
            'faq' => $faq,

        );
        return view('frontend.blog')->with($data);
    }

    public function web_blog_detail($id)
    {
        $blog = Blog::where('status', 1)->where('slug', $id)->first();
        $blogs = Blog::where('status', 1)->limit(3)->orderBy('id', 'DESC')->get();
        $servic = Category::where('status',1)->select('id','title','slug')->orderBy('order_data', 'ASC')->where('order_data','!=','')->get();
        $faq = Faq::where('status', 1)->where(function ($query) {
            $query->where('page_id', 17)
                  ->orWhere(function($query1) {
                      $query1->whereNull('pade_detail_id')
                             ->whereNull('page_id');
                  });
        })->get();
        // p($blog);
        $data = array(
            'title' => $blog['title'],
            'blog' => $blog,
            'blogs' => $blogs,
            'servic' => $servic,
            'faq' => $faq,


        );
        return view('frontend.blog_detail')->with($data);
    }
}
