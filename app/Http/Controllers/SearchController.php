<?php
namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Classify;
use App\Models\Message;
use App\Models\Product;
use App\Models\Product_Attribute;
use App\Models\Attribute;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
class SearchController extends Controller
{
    public function __construct()
    {
        $list_categories = Category::all();
        $list_classify = Classify::all();
        $list_products = Product::take(500)->paginate(12);
        $list_products_shop = Product::take(500)->paginate(9);
        $list_blogs_home = Blog::take(500)->paginate(3);
        $list_blogs = Blog::take(500)->paginate(4);
        $list_products_sale = Product::whereNotNull('sale_price')->take(50)->paginate(12);
        $list_products_shirt = Product::where('category_id',6)->take(50)->paginate(3);
        $list_products_hoodie = Product::where('category_id',3)->take(50)->paginate(3);
        $list_products_somi = Product::where('category_id',9)->take(50)->paginate(3);
        $list_products_shoe = Product::where('category_id',8)->take(50)->paginate(3);
        $list_products_au = Product::where('category_id',7)->take(50)->paginate(3);
        $list_colors = Attribute::where('name','color')->get();
        $list_sizes = Attribute::where('name','size')->get();
        view()->share('list_colors',$list_colors);
        view()->share('list_sizes',$list_sizes);
        view()->share('list_categories',$list_categories);
        view()->share('list_classify',$list_classify);
        view()->share('list_products',$list_products);
        view()->share('list_blogs_home',$list_blogs_home);
        view()->share('list_blogs',$list_blogs);
        view()->share('list_products_sale',$list_products_sale);
        view()->share('list_products_shirt',$list_products_shirt);
        view()->share('list_products_hoodie',$list_products_hoodie);
        view()->share('list_products_somi',$list_products_somi);
        view()->share('list_products_shoe',$list_products_shoe);
        view()->share('list_products_au',$list_products_au);
        view()->share('list_products_shop',$list_products_shop);
    }


    public function Search(Request $request)
    {
        $value = $request->value;
        $products_search = Product::where('name','like','%' . $value . '%')->take(50)->paginate(12);
        return view('pages.search',['products_search'=>$products_search,'value'=>$value]);
    }

    public function Search_classify($id)
    {
        $classify = Classify::find($id);
        $products_search = $classify->product;
        return view('pages.search',['products_search'=>$products_search,'value'=>$classify->name]);
    }

    public function Search_categories($id)
    {
  
        $products_search = Product::where('category_id',$id)->take(50)->paginate(12);
        $categories = Category::find($id);
        return view('pages.search',['products_search'=>$products_search,'value'=>$categories->name]);

    }
    public function Search_blogs(Request $request)
    {
        $value = $request->value;
        $list_blogs_search = Blog::where('title','like','%'.$value.'%')->take(50)->paginate(12);
        return view('pages.search-blog',['list_blogs_search'=>$list_blogs_search,'value'=>$value]);
    }

    public function Search_categories_blogs($id)
    {
        $list_blogs_search = Blog::where('categories_id',$id)->take(50)->paginate(12);
        $categories = Category::find($id);
        return view('pages.search-blog',['list_blogs_search'=>$list_blogs_search,'value'=>$categories->name]);

    }
    public function Search_color($id)
    {
        $value = "color";
        $list_product_id = Product_Attribute::where('attribute_id',$id)->pluck('product_id')->toArray();
        $list_products = Product::all();
        return view('pages.search',['list_product_id'=>$list_product_id,'value'=>$value,'list_products'=>$list_products]);
    }

    public function Search_size($id)
    {

        $attribtute = Attribute::find($id);
        $name = $attribtute->value;
        $value = "size ".$name;
        $list_product_id = Product_Attribute::where('attribute_id',$id)->pluck('product_id')->toArray();
        $list_products = Product::all();
        return view('pages.search',['list_product_id'=>$list_product_id,'value'=>$value,'list_products'=>$list_products]);
    }
}
