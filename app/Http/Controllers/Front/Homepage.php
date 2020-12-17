<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use Validator;
use Illuminate\Support\Facades\Validator;

//Models
use App\Models\Category;
use App\Models\Article;
use App\Models\Contact;

class Homepage extends Controller
{
    public function __construct()
    {
        // tüm metodlarda kullanmak için
         view()->share('categories', Category::inRandomOrder()->get());
    }

    public function index(){
        $data['articles'] = Article::orderBy('created_at', 'DESC')->paginate(1);
        $data['articles']->withPath(url('sayfa'));
        return view('front.homepage', $data);
    }

    public function single($category, $slug){
        $category = Category::whereSlug($category)->first() ?? abort(403, 'Böyle bir kategori bulunamadı');
        $article = Article::whereSlug($slug)->whereCategoryId($category->id)->first() ?? abort(403, 'Böyle bir yazı bulunamadı'); // slugda gelen kategorinin içerikteki gibi bir yazısı varmı diye ekstra kontrol ediliyor
        $article->increment('hit');
        $data['article'] = $article;
        return view('front.single', $data);
    }

    public function category($slug){
        $category = Category::whereSlug($slug)->first() ?? abort(403, 'Böyle bir kategori bulunamadı');
        $data['category'] = $category;
        $data['articles'] = Article::where('category_id', $category->id)->orderBy('created_at', 'DESC')->paginate(1);
        return view('front.category', $data);
    }

    public function contact(){
        return view('front.contact');
    }

    public function contactpost(Request $request){
        $rules = [
            'name' => 'required|min:5',
            'surname' => 'required|min:5',
            'message' => 'required|min:10',
        ];

        $validate = Validator::make($request->post(),$rules);

        if ($validate->fails()) {
            return redirect('contact')->withErrors($validate)->withInput(); // with input ile kullanıcın girdiği verileri tekrar yazdırabiliyoruz
        }


        $contact = new Contact;
        $contact->name = $request->name;
        $contact->surname = $request->surname;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->route('contact')->with('success', 'Mesajınız Bize İletildi Teşekkür Ederiz');
    }

}
