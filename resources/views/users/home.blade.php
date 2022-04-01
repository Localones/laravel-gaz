@include('users.layout.header')

<!-- Hero section  -->
<section class="hero-section">
    <div class="hero-slider owl-carousel">
        <div class="hero-item set-bg" data-setbg="img/hero-slider/1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <h2><span>Power</span><span>& Energy</span><span>Industry</span></h2>
                        <a href="#" class="site-btn sb-white mr-4 mb-3">Read More</a>
                        <a href="#" class="site-btn sb-dark">our Services</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-item set-bg" data-setbg="img/hero-slider/2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <h2><span>Power</span><span>& Energy</span><span>Industry</span></h2>
                        <a href="#" class="site-btn sb-white mr-4 mb-3">Read More</a>
                        <a href="#" class="site-btn sb-dark">our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end  -->

<!-- Services section  -->
<section class="services-section">
    <div class="services-warp">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="si-head">
                            <div class="si-icon">
                                <img src="img/icons/cogwheel.png" alt="">
                            </div>
                            <h5>Mechanical Engineering</h5>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="si-head">
                            <div class="si-icon">
                                <img src="img/icons/helmet.png" alt="">
                            </div>
                            <h5>Profesional Workers</h5>
                        </div>
                        <p>Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="si-head">
                            <div class="si-icon">
                                <img src="img/icons/wind-engine.png" alt="">
                            </div>
                            <h5>Green Energy</h5>
                        </div>
                        <p>Sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec con-sequat arcu et commodo interdum. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="si-head">
                            <div class="si-icon">
                                <img src="img/icons/pollution.png" alt="">
                            </div>
                            <h5>Power Engineering</h5>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="si-head">
                            <div class="si-icon">
                                <img src="img/icons/pumpjack.png" alt="">
                            </div>
                            <h5>Oil & Lubricants</h5>
                        </div>
                        <p>Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="si-head">
                            <div class="si-icon">
                                <img src="img/icons/light-bulb.png" alt="">
                            </div>
                            <h5>Power & Energy</h5>
                        </div>
                        <p>Sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec con-sequat arcu et commodo interdum. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
@elseif(session()->has('info'))
    <div class="alert alert-primary" role="alert">
        {{session('info')}}
    </div>
@elseif(session()->has('warning'))
    <div class="alert alert-warning" role="alert">
        {{session('warning')}}
    </div>
@endif
<!-- Services section end  -->

{{--MODEL--}}

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Рассчитать сумму</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('home-store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="zakaz" class="form-label">Название заказа</label>
                        {{--<input type="text" class="form-control" id="zakaz">--}}
                        <select class="form-select" aria-label="Default select example" name="title">
                            @foreach($cards as $card)
                                <option selected>{{$card->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Номер телефона</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Введите ваш телефон">
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

{{--ENDMODEL--}}

<!-- Features section   -->
<section class="features-section spad set-bg" data-setbg="img/features-bg.jpg">
    <div class="container">
        <div class="row">
            @foreach($cards as $card)
                <div class="col-lg-4 col-md-6">
                    <div class="feature-box">
{{--                        <img src="img/features/1.jpg" alt="">--}}
                        <div class="fb-text">
                            <h5>{{$card->title}}</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. </p>
                            <ol class="list-card">
                                <li class="item-card">
                                    <h2 class="headline">{{$card->trk}}</h2>
                                </li>
                                <li class="item-card">
                                    <h2 class="headline">{{$card->cube}}</h2>
                                </li>
                                <li class="item-card">
                                    <h2 class="headline">{{$card->capacity}}</h2>
                                </li>
                                <li class="item-card">
                                    <h2 class="headline">{{$card->valve}}</h2>
                                </li>
                                <li class="item-card">
                                    <h2 class="headline">{{$card->system}}</h2>
                                </li>
                            </ol>
                            <a href="" class="fb-more-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Рассчитать сумму</a>

                        </div>
                    </div>
                </div>
            @endforeach
            {{--<div class="col-lg-4 col-md-6">
                <div class="feature-box">
                    <img src="img/features/2.jpg" alt="">
                    <div class="fb-text">
                        <h5>Engineering</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. </p>
                        <a href="" class="fb-more-btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-box">
                    <img src="img/features/3.jpg" alt="">
                    <div class="fb-text">
                        <h5>Manufactoring</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. </p>
                        <a href="" class="fb-more-btn">Read More</a>
                    </div>
                </div>
            </div>--}}
        </div>
    </div>
</section>
<!-- Features section end  -->


<!-- Clients section  -->
<section class="clients-section spad">
    <div class="container">
        <div class="client-text">
            <h2>A group of productive enterprises that produce or supply Goods, Services, or Sources of Income</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est.</p>
        </div>
        <div id="client-carousel" class="client-slider owl-carousel">
            <div class="single-brand">
                <a href="#">
                    <img src="img/clients/1.png" alt="">
                </a>
            </div>
            <div class="single-brand">
                <a href="#">
                    <img src="img/clients/2.png" alt="">
                </a>
            </div>
            <div class="single-brand">
                <a href="#">
                    <img src="img/clients/3.png" alt="">
                </a>
            </div>
            <div class="single-brand">
                <a href="#">
                    <img src="img/clients/4.png" alt="">
                </a>
            </div>
            <div class="single-brand">
                <a href="#">
                    <img src="img/clients/5.png" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Clients section end  -->


<!-- Testimonial section -->
<section class="testimonial-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="testimonial-bg set-bg" data-setbg="img/testimonial-bg.jpg"></div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="testimonial-box">
                    <div class="testi-box-warp">
                        <h2>Client’s Testimonials</h2>
                        <div class="testimonial-slider owl-carousel">
                            <div class="testimonial">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consecte-tur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est.</p>
                                <img src="img/testimonial-thumb.jpg" alt="" class="testi-thumb">
                                <div class="testi-info">
                                    <h5>Michael Smith</h5>
                                    <span>CEO Industrial INC</span>
                                </div>
                            </div>
                            <div class="testimonial">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consecte-tur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est.</p>
                                <img src="img/testimonial-thumb.jpg" alt="" class="testi-thumb">
                                <div class="testi-info">
                                    <h5>Michael Smith</h5>
                                    <span>CEO Industrial INC</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial section end  -->


<!-- Call to action section  -->
<section class="cta-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 d-flex align-items-center">
                <h2>We produce or supply Goods, Services, or Sources</h2>
            </div>
            <div class="col-lg-3 text-lg-right" >
                <a href="#" class="site-btn sb-dark">contact us</a>
            </div>
        </div>
    </div>
</section>
<!-- Call to action section end  -->

@include('users.layout.footer')



