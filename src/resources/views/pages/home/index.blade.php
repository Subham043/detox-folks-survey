<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="template" content="Detox-Folks">
    <meta name="title" content="Home - Detox-Folks">
    <meta name="keywords"
        content="Home - Detox-Folks">
    <title>Home - Detox-Folks</title>
    <link rel="icon" href="{{ asset('admin/images/logo-sm.png') }}">
    <link rel="stylesheet" href="{{ asset('main/fonts/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('main/fonts/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/fonts/fontawesome/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/vendor/venobox/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/vendor/slickslider/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/vendor/niceselect/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/index.css') }}">
</head>

<body>
    <div class="backdrop"></div><a class="backtop fas fa-arrow-up" href="#"></a>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="header-top-welcome text-center">
                        <p>Welcome to Detox-Folks!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header-part">
        <div class="container">
            <div class="header-content justify-content-between">
                {{-- <div class="header-media-group">
                    <button class="header-user">
                        <img src="{{ asset('main/images/user.png') }}" alt="user">
                    </button>
                    <a href="{{route('home')}}">
                        <img src="{{ asset('main/images/logo.png') }}" alt="logo">
                    </a>
                    <button class="header-src">
                        <i
                            class="fas fa-search"></i>
                    </button>
                </div> --}}
                <a href="{{route('home')}}" class="header-logo">
                    <img
                        src="{{ asset('admin/images/logo.png') }}" alt="logo">
                </a>
                <div class="header-widget-group">
                    <div class="navbar-info-group">
                        <div class="navbar-info"><i class="icofont-ui-touch-phone"></i>
                            <p><small>call us</small><span>(+880) 183 8288 389</span></p>
                        </div>
                        <div class="navbar-info"><i class="icofont-ui-email"></i>
                            <p><small>email us</small><span>support@example.com</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="home-index-slider slider-arrow slider-dots">
        <div class="banner-part banner-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-content">
                            <h1>free home delivery within 24 hours now.</h1>
                            <p>Lorem ipsum dolor consectetur adipisicing elit modi consequatur eaque expedita porro
                                necessitatibus eveniet voluptatum quis pariatur Laboriosam molestiae architecto
                                excepturi</p>
                            <div class="banner-btn">
                                <a class="btn btn-inline" href="{{route('order_form_create')}}" target="_blank"><i
                                        class="fas fa-shopping-basket"></i><span>order now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-img"><img src="https://static.vecteezy.com/system/resources/previews/009/886/744/original/brown-paper-box-file-png.png" style="height: 70vh;object-fit:contain;"
                                alt="index"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-part banner-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-img"><img src="https://i.pinimg.com/originals/45/4d/f9/454df968118a124807d3c7fe7155a63d.png" style="height: 70vh;object-fit:contain;"
                                alt="index"></div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-content">
                            <h1>free home delivery within 24 hours now.</h1>
                            <p>Lorem ipsum dolor consectetur adipisicing elit modi consequatur eaque expedita porro
                                necessitatibus eveniet voluptatum quis pariatur Laboriosam molestiae architecto
                                excepturi</p>
                            <div class="banner-btn">
                                <a class="btn btn-inline" href="{{route('order_form_create')}}" target="_blank"><i
                                        class="fas fa-shopping-basket"></i><span>order now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="inner-section about-company pt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2>Our Motive is to Provide Best for Those Who Deserve</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis exercitationem commodi
                            aliquam necessitatibus vero reiciendis quaerat illo est fuga ea temporibus natus doloremque
                            ipsum voluptas quod deserunt expedita reprehenderit pariatur quidem quisquam, recusandae
                            animi non! Voluptas totam repudiandae rerum molestiae possimus quis numquam sapiente sunt
                            architecto quisquam Aliquam odio optio</p>
                    </div>
                    <ul class="about-list">
                        <li>
                            <h3>34785</h3>
                            <h6>registered users</h6>
                        </li>
                        <li>
                            <h3>2623</h3>
                            <h6>per day visitors</h6>
                        </li>
                        <li>
                            <h3>189</h3>
                            <h6>total products</h6>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="about-img"><img src="{{ asset('main/images/about/01.jpg') }}" alt="about"><img
                            src="{{ asset('main/images/about/02.jpg') }}" alt="about"><img
                            src="{{ asset('main/images/about/03.jpg') }}" alt="about"><img
                            src="{{ asset('main/images/about/04.jpg') }}" alt="about"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-choose">
        <div class="container">
            <div class="row">
                <div class="col-11 col-md-9 col-lg-7 col-xl-6 mx-auto">
                    <div class="section-heading">
                        <h2>Why People Choose Their Daily Organic Life With Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="choose-card">
                        <div class="choose-icon"><i class="icofont-fruits"></i></div>
                        <div class="choose-text">
                            <h4>100% fresh organic food</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error
                                dignissimo cumque minus facere dolores cupiditate debitis</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-card">
                        <div class="choose-icon"><i class="icofont-vehicle-delivery-van"></i></div>
                        <div class="choose-text">
                            <h4>Delivery within one hour</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error
                                dignissimo cumque minus facere dolores cupiditate debitis</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-card">
                        <div class="choose-icon"><i class="icofont-loop"></i></div>
                        <div class="choose-text">
                            <h4>quickly return policy</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error
                                dignissimo cumque minus facere dolores cupiditate debitis</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-card">
                        <div class="choose-icon"><i class="icofont-support"></i></div>
                        <div class="choose-text">
                            <h4>instant support team</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error
                                dignissimo cumque minus facere dolores cupiditate debitis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section feature-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>our featured items</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><a
                                class="feature-image" href="{{route('order_form_create')}}" target="_blank"><img
                                    src="data:image/jpeg;base64,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" alt="product"></a>

                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="{{route('order_form_create')}}" target="_blank">fresh organic green chilis</a>
                            </h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="{{route('order_form_create')}}" target="_blank">(3 Reviews)</a></div>
                            <h6 class="feature-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet
                                olor ut eveniet commodi...</p><a href="{{route('order_form_create')}}" target="_blank" class="btn btn-outline-success btn-sm" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>order</span></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><a
                                class="feature-image" href="{{route('order_form_create')}}" target="_blank"><img
                                    src="https://3.imimg.com/data3/RY/JL/MY-11348186/aluminium-foil-pouch-1000x1000.jpg" alt="product"></a>

                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="{{route('order_form_create')}}" target="_blank">fresh organic green chilis</a>
                            </h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="{{route('order_form_create')}}" target="_blank">(3 Reviews)</a></div>
                            <h6 class="feature-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet
                                olor ut eveniet commodi...</p><a href="{{route('order_form_create')}}" target="_blank" class="btn btn-outline-success btn-sm" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>order</span></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><a
                                class="feature-image" href="{{route('order_form_create')}}" target="_blank"><img
                                    src="https://5.imimg.com/data5/ANDROID/Default/2022/11/NH/SS/MO/4041306/product-jpeg-500x500.jpg" alt="product"></a>

                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="{{route('order_form_create')}}" target="_blank">fresh organic green chilis</a>
                            </h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="{{route('order_form_create')}}" target="_blank">(3 Reviews)</a></div>
                            <h6 class="feature-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet
                                olor ut eveniet commodi...</p><a href="{{route('order_form_create')}}" target="_blank" class="btn btn-outline-success btn-sm" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>order</span></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><a
                                class="feature-image" href="{{route('order_form_create')}}" target="_blank"><img
                                    src="https://m.media-amazon.com/images/I/51NfoHE61QL.jpg" alt="product"></a>

                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="{{route('order_form_create')}}" target="_blank">fresh organic green chilis</a>
                            </h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="{{route('order_form_create')}}" target="_blank">(3 Reviews)</a></div>
                            <h6 class="feature-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet
                                olor ut eveniet commodi...</p><a href="{{route('order_form_create')}}" target="_blank" class="btn btn-outline-success btn-sm" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>order</span></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><a
                                class="feature-image" href="{{route('order_form_create')}}" target="_blank"><img
                                    src="https://www.ikea.com/in/en/images/products/gamman-24-piece-cutlery-set-stainless-steel__0713267_pe729383_s5.jpg?f=s" alt="product"></a>

                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="{{route('order_form_create')}}" target="_blank">fresh organic green chilis</a>
                            </h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="{{route('order_form_create')}}" target="_blank">(3 Reviews)</a></div>
                            <h6 class="feature-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet
                                olor ut eveniet commodi...</p><a href="{{route('order_form_create')}}" target="_blank" class="btn btn-outline-success btn-sm" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>order</span></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">feature</label></div><a
                                class="feature-image" href="{{route('order_form_create')}}" target="_blank"><img
                                    src="http://atlas-content-cdn.pixelsquid.com/stock-images/trash-bag-garbage-e1XEqNE-600.jpg" alt="product"></a>

                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="{{route('order_form_create')}}" target="_blank">fresh organic green chilis</a>
                            </h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="{{route('order_form_create')}}" target="_blank">(3 Reviews)</a></div>
                            <h6 class="feature-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet
                                olor ut eveniet commodi...</p><a href="{{route('order_form_create')}}" target="_blank" class="btn btn-outline-success btn-sm" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>order</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25"><a href="{{route('order_form_create')}}" target="_blank" class="btn btn-outline"><i
                                class="fas fa-eye"></i><span>show more</span></a></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section testimonial-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>client's feedback</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider slider-arrow">
                        <div class="testimonial-card"><i class="fas fa-quote-left"></i>
                            <p>Lorem ipsum dolor consectetur adipisicing elit neque earum sapiente vitae obcaecati
                                magnam doloribus magni provident ipsam</p>
                            <h5>mahmud hasan</h5>
                            <ul>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                            </ul><img src="{{ asset('main/images/avatar/01.jpg') }}" alt="testimonial">
                        </div>
                        <div class="testimonial-card"><i class="fas fa-quote-left"></i>
                            <p>Lorem ipsum dolor consectetur adipisicing elit neque earum sapiente vitae obcaecati
                                magnam doloribus magni provident ipsam</p>
                            <h5>mahmud hasan</h5>
                            <ul>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                            </ul><img src="{{ asset('main/images/avatar/02.jpg') }}" alt="testimonial">
                        </div>
                        <div class="testimonial-card"><i class="fas fa-quote-left"></i>
                            <p>Lorem ipsum dolor consectetur adipisicing elit neque earum sapiente vitae obcaecati
                                magnam doloribus magni provident ipsam</p>
                            <h5>mahmud hasan</h5>
                            <ul>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                            </ul><img src="{{ asset('main/images/avatar/03.jpg') }}" alt="testimonial">
                        </div>
                        <div class="testimonial-card"><i class="fas fa-quote-left"></i>
                            <p>Lorem ipsum dolor consectetur adipisicing elit neque earum sapiente vitae obcaecati
                                magnam doloribus magni provident ipsam</p>
                            <h5>mahmud hasan</h5>
                            <ul>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                            </ul><img src="{{ asset('main/images/avatar/04.jpg') }}" alt="testimonial">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section brand-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Trusted By</h2>
                    </div>
                </div>
            </div>
            <div class="brand-slider slider-arrow">
                <div class="brand-wrap">
                    <div class="brand-media"><img src="{{ asset('main/images/brand/01.jpg') }}" alt="brand">
                        <div class="brand-overlay"><a href="#"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>natural greeny</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media"><img src="{{ asset('main/images/brand/02.jpg') }}" alt="brand">
                        <div class="brand-overlay"><a href="#"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>vegan lover</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media"><img src="{{ asset('main/images/brand/03.jpg') }}" alt="brand">
                        <div class="brand-overlay"><a href="#"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>organic foody</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media"><img src="{{ asset('main/images/brand/04.jpg') }}" alt="brand">
                        <div class="brand-overlay"><a href="#"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>ecomart limited</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media"><img src="{{ asset('main/images/brand/05.jpg') }}" alt="brand">
                        <div class="brand-overlay"><a href="#"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>fresh fortune</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media"><img src="{{ asset('main/images/brand/06.jpg') }}" alt="brand">
                        <div class="brand-overlay"><a href="#"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>econature</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="intro-part">
        <div class="container">
            <div class="row intro-content">
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-truck"></i></div>
                        <div class="intro-content">
                            <h5>free home delivery</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-sync-alt"></i></div>
                        <div class="intro-content">
                            <h5>instant return policy</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-headset"></i></div>
                        <div class="intro-content">
                            <h5>quick support system</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-lock"></i></div>
                        <div class="intro-content">
                            <h5>secure payment way</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-part">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xl-12">
                    <div class="footer-widget text-center">
                        <a class="footer-logo" href="{{route('home')}}"><img
                                src="{{ asset('admin/images/logo.png') }}" alt="logo"></a>
                        <ul class="footer-social">
                            <li><a class="icofont-facebook" href="#"></a></li>
                            <li><a class="icofont-twitter" href="#"></a></li>
                            <li><a class="icofont-linkedin" href="#"></a></li>
                            <li><a class="icofont-instagram" href="#"></a></li>
                            <li><a class="icofont-pinterest" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-12 mt-5">
                    <div class="footer-widget contact">
                        <ul class="footer-contact d-flex align-items-center gap-5 flex-wrap justify-content-center">
                            <li class="m-0"><i class="icofont-ui-email"></i>
                                <p><span>support@example.com</span><span>carrer@example.com</span></p>
                            </li>
                            <li class="m-0"><i class="icofont-ui-touch-phone"></i>
                                <p><span>+120 279 532 13</span><span>+120 279 532 14</span></p>
                            </li>
                            <li class="m-0"><i class="icofont-location-pin"></i>
                                <p>1Hd- 50, 010 Avenue, NY 90001 United States</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer-bottom">
                        <p class="footer-copytext">&copy; All Copyrights Reserved by <a
                                href="#">Detox-Folks</a></p>
                        <div class="footer-card"><a href="#"><img
                                    src="{{ asset('main/images/payment/jpg/01.jpg') }}" alt="payment"></a><a
                                href="#"><img src="{{ asset('main/images/payment/jpg/02.jpg') }}"
                                    alt="payment"></a><a href="#"><img
                                    src="{{ asset('main/images/payment/jpg/03.jpg') }}" alt="payment"></a><a
                                href="#"><img src="{{ asset('main/images/payment/jpg/04.jpg') }}"
                                    alt="payment"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('main/vendor/bootstrap/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('main/vendor/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('main/vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('main/vendor/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('main/vendor/niceselect/nice-select.min.js') }}"></script>
    <script src="{{ asset('main/vendor/slickslider/slick.min.js') }}"></script>
    <script src="{{ asset('main/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('main/js/nice-select.js') }}"></script>
    <script src="{{ asset('main/js/countdown.js') }}"></script>
    <script src="{{ asset('main/js/accordion.js') }}"></script>
    <script src="{{ asset('main/js/venobox.js') }}"></script>
    <script src="{{ asset('main/js/slick.js') }}"></script>
    <script src="{{ asset('main/js/main.js') }}"></script>
</body>

</html>
