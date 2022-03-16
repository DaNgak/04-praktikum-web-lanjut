@extends('layout.app')

@section('isicontent')
    <div class="tm-contact-img-container">
    </div>

    <section class="tm-section">
        <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-contact-right" >
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 align-items-start">
                        <div class="tm-aside-container">
                            @include('layout.categories')
                            <hr class="tm-margin-t-small">   
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 align-items-start">
                            @include('layout.usefull')
                            <hr class="tm-margin-t-small">   
                        {{-- <div class="tm-content-box tm-content-box-contact">
                            <img src="assets/img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #1</h4>
                            <p class="tm-margin-b-20 tm-p-small">Aenean cursus tellus mauris, quis
                            consequat mauris dapibus id. Donec
                            scelerisque porttitor pharetra</p>
                            <a href="#" class="tm-btn text-uppercase">Detail</a>    
                        </div> 
                        <div class="tm-content-box tm-margin-t-mid tm-content-box-contact">
                            <img src="assets/img/tm-img-310x180-2.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #2</h4>
                            <p class="tm-margin-b-20 tm-p-small">Aenean cursus tellus mauris, quis
                            consequat mauris dapibus id. Donec
                            scelerisque porttitor pharetra</p>
                        </div>   --}}
                    </div>
                </div>
                <hr class="tm-margin-t-mid">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <section>
                    <h3 class="tm-gold-text tm-form-title">Contact Us</h3>
                    <p class="tm-form-description">Kontak kami untuk informasi lebih lanjut dengan mengisikan form dibawah ini</p> 
                    <form action="index.html" method="post" class="tm-contact-form">                                
                        <div class="form-group">
                            <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                        </div>
                        <div class="form-group">
                            <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                        </div>
                        <div class="form-group">
                            <textarea id="contact_message" name="contact_message" class="form-control" rows="4" placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" class="tm-btn">Submit</button>                          
                    </form>   
                </section>
                {{-- <section class="tm-margin-t-mid tm-map-section">
                    <h3 class="tm-gold-text tm-form-title">Pellentesque fermentum mauris</h3>
                    <div id="google-map"></div>
                    <p class="tm-form-description">Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id.</p>
                    <p class="m-b-0">Donec mattis ipsum in erat viverra commodo. 
                        Proin sapien lacus, euismod eget nisl in, 
                        elementum posuere massa. Curabitur a odio
                        eros. Cras aliquam lectus erat, non semper est
                        volutpat eget. Ut eget erat tincidunt.</p>
                    <a href="#" class="tm-btn tm-margin-t-small">Detail</a> 
                </section>                         --}}
            </div>
            <div class="row tm-contact-row-related-posts">
                <div class="col-xs-12">
                    <div class="tm-contact-related-posts-container">
                        <h3 class="tm-gold-text tm-title tm-margin-b-30">Latest Posts</h3>
                        @foreach ($datablog as $datablogsatuan)
                            <div class="row post" style="margin-bottom: 2.5rem" >
                                <div class="media-left media-middle">
                                    <a href="{{ url("blog") }}/{{ $datablogsatuan->slug }}">
                                    <img class="media-object" src="{{ asset("assets/img/$datablogsatuan->image") }}" alt="Generic placeholder image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="{{ url("blog") }}/{{ $datablogsatuan->slug }}"><h4 class="media-heading tm-gold-text tm-margin-b-15">{{ $datablogsatuan->title }}</h4></a>
                                    <p>Created by <a href="#">{{ $datablogsatuan->author }}</a> | Category <a href="/category/{{ $datablogsatuan->category->slug }}">{{ $datablogsatuan->category->name }}</a></p>
                                    <p class="tm-small-font tm-media-description">{{ $datablogsatuan->content_cover }}</p>
                                </div>
                            </div>
                        @endforeach

                        <div class="row text-center">
                            <a href="{{ url("blog") }}" class="tm-btn text-uppercase">More Post</a>    
                        </div>
                    </div>                                
                </div>
            </div>
        </div>
    </section>
@endsection