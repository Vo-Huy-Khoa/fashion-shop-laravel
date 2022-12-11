@extends('layout.index')
@section('title')
{{$value}}
@endsection
@section('content')
<!-- Blog Section Begin -->
<section class="blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="blog__sidebar">
                    <div class="blog__sidebar__search">
                        <form action="search-blog" method="POST">
                            @csrf
                            <input type="text" name="value" placeholder="Search...">
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div>
                    <div class="blog__sidebar__item">
                        <h4>Categories</h4>
                        <ul>
                            @foreach ($list_categories as $categories)
                            <li><a href="search-category-blog/{{$categories->id}}">{{$categories->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="blog__sidebar__item">
                        <h4>Recent News</h4>
                        <div class="blog__sidebar__recent">
                            @foreach ($list_blogs as $blog)
                            <a href="blog-detail/{{$blog->id}}" class="blog__sidebar__recent__item">
                                <div class="blog__sidebar__recent__item__pic">
                                    <img width="60px" height="60px" src="uploads/blogs/{{$blog->image}}" alt="">
                                </div>
                                <div class="blog__sidebar__recent__item__text">
                                    <h6>{{$blog->title}}</h6>
                                    <span>{{$blog->created_at}}</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="blog__sidebar__item">
                        <h4>Search By</h4>
                        <div class="blog__sidebar__item__tags">
                            <a href="#">Apple</a>
                            <a href="#">Beauty</a>
                            <a href="#">Vegetables</a>
                            <a href="#">Fruit</a>
                            <a href="#">Healthy Food</a>
                            <a href="#">Lifestyle</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="row">
                    @foreach ($list_blogs_search as $blogs)
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img style="width: 30px ;height:400px" src="uploads/blogs/{{$blogs->image}}" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i>{{$blogs->created_at}}</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                                <h5><a href="blog_details/{{$blogs->id}}">{{$blogs->title}}</a></h5>
                                <p>{{substr($blogs->brief,0,500)}}...</p>
                                <a href="blog_details/{{$blogs->id}}" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12">
                        <div class="product__pagination blog__pagination">
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->
@endsection