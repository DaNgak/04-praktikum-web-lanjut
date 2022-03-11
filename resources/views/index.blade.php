@extends('layout.app')

@section('isicontent')
    <div class="tm-home-img-container">
        <img src="{{ asset('assets/img/tm-home-img.jpg"') }}" alt="Image" class="hidden-lg-up img-fluid">
    </div>

    <section class="tm-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                    <h2 class="tm-gold-text tm-title">AFH IYH Home</h2>
                    <p class="tm-subtitle">Suspendisse ut magna vel velit cursus tempor ut nec nunc. Mauris vehicula, augue in tincidunt porta, purus ipsum blandit massa.</p>
                </div>
            </div>
            <div class="row">
                @foreach ($datablog as $datablogsatuan)
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                    <div class="tm-content-box">
                        <img src="{{ asset('assets/img/tm-img-310x180-1.jpg') }}" alt="Image" class="tm-margin-b-20 img-fluid">
                        <h4 class="tm-margin-b-20 tm-gold-text">{{ $datablogsatuan->title }}</h4>
                        <p class="tm-margin-b-20">{{ $datablogsatuan->content_cover }}</p>
                        <a href="/blog/{{ $datablogsatuan->slug }}" class="tm-btn text-uppercase">Detail</a>    
                    </div>  

                </div>
                @endforeach


            </div> 

            <div class="row tm-margin-t-big">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="tm-2-col-left">
                        
                        <h3 class="tm-gold-text tm-title">Pellentesque fermentum mauris et posuere</h3>
                        <p class="tm-margin-b-30">Vivamus accumsan blandit ligula. Sed lobortis efficitur sapien</p>
                        <img src="{{ asset('assets/img/tm-img-660x330-1.jpg') }}" alt="Image" class="tm-margin-b-40 img-fluid">
                        <p>
                            Donec tempor lobortis tortor, in feugiat massa facilisis sed. Ut dignissim viverra pretium. In eu justo maximus turpis feugiat finibus scelerisque nec eros. Cras nec lectus tempor nibh vestibulum eleifend et ac elit.
                        </p>
                        <p>Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id. Fusce sagittis ultricies felis, non luctus mauris lacinia quis.</p>
                        <p class="m-b-2"> Ut fringilla lacus ac tempor ullamcorper. Mauris iaculis placerat ex et mattis. Mauris id vulputate lectus, id fermentum sapien.
                        </p>
                        <a href="#" class="tm-btn text-uppercase">Read More</a>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                    <div class="tm-2-col-right">

                        <div class="tm-2-rows-md-swap">
                            <div class="tm-overflow-auto row tm-2-rows-md-down-2">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    @include("layout.categories")
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 tm-xs-m-t">
                                    @include("layout.usefull")
                                </div>
                            </div>                        
                            
                            <div class="row tm-2-rows-md-down-1 tm-margin-t-mid">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <h3 class="tm-gold-text tm-title tm-margin-b-30">Related Posts</h3>
                                    <div class="media tm-related-post">
                                        <div class="media-left media-middle">
                                            <a href="#">
                                            <img class="media-object" src="{{ asset('assets/img/tm-img-240x120-1.jpg') }}" alt="Generic placeholder image">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15">Lorem ipsum dolor</h4></a>
                                            <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                                        </div>
                                        </div>
                                        <div class="media tm-related-post">
                                        <div class="media-left media-middle">
                                            <a href="#">
                                            <img class="media-object" src="{{ asset('assets/img/tm-img-240x120-2.jpg') }}" alt="Generic placeholder image">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15">Lorem ipsum dolor</h4></a>
                                            <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                                        </div>
                                        </div>
                                        <div class="media tm-related-post">
                                        <div class="media-left media-middle">
                                            <a href="#">
                                            <img class="media-object" src="{{ asset('assets/img/tm-img-240x120-3.jpg') }}" alt="Generic placeholder image">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15">Lorem ipsum dolor</h4></a>
                                            <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
@endsection