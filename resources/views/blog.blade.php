@extends('layout.app')

@section('isicontent')
    <div class="tm-blog-img-container">
    </div>

    <section class="tm-section">
        <div class="container-fluid">
            <div class="row text-center">
                <h2 class="text-center">{{ $judulheader }}</h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                    @if ($datablog->count() > 0)               
                        @if ($judul !== "Category")    
                            <div class="tm-blog-post">
                                <h3 class="tm-gold-text">{{ $datadisplay->title }}</h3>
                                <p>Created by <a href="#">{{ $datadisplay->author }}</a> | Category <a href="/category/{{ $datadisplay->category->slug }}">{{ $datadisplay->category->name }}</a></p>
                                <img src="{{ asset("assets/img/tm-img-1010x336-1.jpg") }}" alt="Image" class="img-fluid tm-img-post">
                                {!! $datadisplay->content !!}
                            </div>
                        @endif
                    @else
                        <h1 style="margin-top: 2.5rem;text-align: center">No Blog</h1>
                    @endif
                    
                    <div class="row tm-margin-t-big">
                        @if ($judul === "Blog Review")
                            <h3 style="text-align: center" class="tm-gold-text tm-title tm-margin-b-30">More Latest Posts</h3>
                        @endif
                        @if ($judul === "Blog")
                            @foreach ($datablog->skip(1) as $datablogsatuan)
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 2rem">
                                    <div class="tm-content-box">
                                        <img src="{{ asset("assets/img/$datablogsatuan->image") }}" alt="{{ $datablogsatuan->title }}" class="tm-margin-b-30 img-fluid">
                                        <h4 class="tm-margin-b-20 tm-gold-text">{{ $datablogsatuan->title }}</h4>
                                        <p>Created by <a href="#">{{ $datablogsatuan->author }}</a> | Category <a href="/category/{{ $datablogsatuan->category->slug }}">{{ $datablogsatuan->category->name }}</a></p>
                                        <p class="tm-margin-b-20">{{ $datablogsatuan->content_cover }}</p>
                                        <a href="{{ url("blog") }}/{{ $datablogsatuan->slug }}" class="tm-btn text-uppercase">Detail</a>    
                                    </div>  
                                </div>
                            @endforeach
                        @else
                            @foreach ($datablog as $datablogsatuan)
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" style="margin-bottom: 2rem">
                                    <div class="tm-content-box">
                                        <img src="{{ asset("assets/img/$datablogsatuan->image") }}" alt="{{ $datablogsatuan->title }}" class="tm-margin-b-30 img-fluid">
                                        <h4 class="tm-margin-b-20 tm-gold-text">{{ $datablogsatuan->title }}</h4>
                                        <p>Created by <a href="#">{{ $datablogsatuan->author }}</a> | Category <a href="/category/{{ $datablogsatuan->category->slug }}">{{ $datablogsatuan->category->name }}</a></p>
                                        <p class="tm-margin-b-20">{{ $datablogsatuan->content_cover }}</p>
                                        <a href="{{ url("blog") }}/{{ $datablogsatuan->slug }}" class="tm-btn text-uppercase">Detail</a>    
                                    </div>  
                                </div>
                            @endforeach
                        @endif        
                    </div>
                    
                </div>

                <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-aside-r">
                    <div class="tm-aside-container">
                        @include('layout.categories')
                        <hr class="tm-margin-t-small">   
                        @include('layout.usefull')
                        <hr class="tm-margin-t-small"> 
                    </div>
                    
                    
                </aside>

            </div>
            
        </div>
    </section>
@endsection