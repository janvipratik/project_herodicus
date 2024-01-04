@extends('frontend.partial.master')


@section('content')
    <!-- navbar  end  -->
    <!-- home page  banner  img  start  -->
    <div class="home-banner-imgsection">
        <img class="img-fluid" src="{{ asset('frontend/img/home-banner.png') }}" alt="">
        <div class="container">
            <div class="homebanner-text">
                <p>SUPERIOR EXPERTISE</p>
                <h2>We are a unique physical therapy clinic</h2>
                <button>Learn More</button>
            </div>
        </div>
    </div>
    <!-- home page  banner  img  end -->
    <!-- how  it  work  start  -->
    <div class="container">
        <div class="how-it-worksection">
            <h4 class="how-it-worktext">HOW IT WORKS</h4>
            <div class="how-itwork-gridbhag">
                <div class="hiw-grid-item">
                    <div class="number-imagemain">
                        <p>1</p>
                        <img src="{{ asset('frontend/img/searchplay.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="hit-sign-uptext">
                        <h4>Sign up the Platform</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="hiw-grid-item">
                    <div class="number-imagemain">
                        <p>2</p>
                        <img src="{{ asset('frontend/img/peopleplus.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="hit-sign-uptext">
                        <h4>Browse Videos</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="hiw-grid-item">
                    <div class="number-imagemain">
                        <p>3</p>
                        <img src="{{ asset('frontend/img/taj.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="hit-sign-uptext">
                        <h4>Find your Pro</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="hiw-grid-item">
                    <div class="number-imagemain">
                        <p>4</p>
                        <img src="{{ asset('frontend/img/bookclick.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="hit-sign-uptext">
                        <h4>Book Your Sessions</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="hiw-grid-item">
                    <div class="number-imagemain">
                        <p>5</p>
                        <img src="{{ asset('frontend/img/star.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="hit-sign-uptext">
                        <h4>Rate your Pro</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- how it work  end  -->
    <!-- happy  client start  -->
    <div class="happy-client-bg">
        <div class="container">
            <div class="happy-client-grid">
                <div class="hc-grid-item">
                    <div class="hc-grid-item-innerdata">
                        <img src="{{ asset('frontend/img/happy-client-1.png') }}" alt="">
                        <div>
                            <p class="hc-giinnr-numbers">778+</p>
                            <p class="hc-giinnr-text">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="hc-grid-item">
                    <div class="hc-grid-item-innerdata">
                        <img src="{{ asset('frontend/img/happy-client-2.png') }}" alt="">
                        <div>
                            <p class="hc-giinnr-numbers">106+</p>
                            <p class="hc-giinnr-text">Message Therapy</p>
                        </div>
                    </div>
                </div>
                <div class="hc-grid-item">
                    <div class="hc-grid-item-skiled">
                        <img src="{{ asset('frontend/img/happy-client-3.png') }}"alt="">
                        <div>
                            <p class="hc-giinnr-numbers">880+</p>
                            <p class="hc-giinnr-text">Skiled Therapy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- happy  client end  -->
    <!-- top physio start  -->
    <div class="container">
        <div class="top-physio-section">
            <h2 class="top-physio-text">TOP physio therapies </h2>
            <div id="top-physio-carousel" class="owl-carousel owl-theme">
                <div class="item">
                    <div>
                        <img src="{{ asset('frontend/img/doctor-1.png') }}" class="img-fluid doctor-slider-img"
                            alt="">
                        <div class="doctor-data">
                            <p class="doctor-name">Dr. Yikine Linka</p>
                            <p class="doctor-exp">12 Yrs Exp</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <img src="{{ asset('frontend/img/doctor-2.png') }}" class="img-fluid doctor-slider-img" alt="">
                        <div class="doctor-data">
                            <p class="doctor-name">Dr. Sharry kinta</p>
                            <p class="doctor-exp">10 Yrs Exp</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <img src="{{ asset('frontend/img/doctor-3.png') }}" class="img-fluid doctor-slider-img" alt="">
                        <div class="doctor-data">
                            <p class="doctor-name">Dr. Handry Moscow</p>
                            <p class="doctor-exp">8 Yrs Exps</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <img src="{{ asset('frontend/img/doctor-1.png') }}" class="img-fluid doctor-slider-img" alt="">
                        <div class="doctor-data">
                            <p class="doctor-name">Dr. Yikine Linka</p>
                            <p class="doctor-exp">12 Yrs Exp</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <img src="{{ asset('frontend/img/doctor-2.png') }}" class="img-fluid doctor-slider-img" alt="">
                        <div class="doctor-data">
                            <p class="doctor-name">Dr. Sharry kinta</p>
                            <p class="doctor-exp">10 Yrs Exp</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div>
                        <img src="{{ asset('frontend/img/doctor-3.png') }}" class="img-fluid doctor-slider-img" alt="">
                        <div class="doctor-data">
                            <p class="doctor-name">Dr. Handry Moscow</p>
                            <p class="doctor-exp">8 Yrs Exps</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top physio end  -->
    <!-- video  section  start  -->
    <div class="video-bg">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div>
                        <!-- <video src="https://youtu.be/FOF71Lb5SkA?si=8zyYQsikupPZAJwL" height="250" width="400" ></video> -->
                        <iframe width="85%" height="315"
                            src="https://www.youtube.com/embed/FOF71Lb5SkA?si=tl7qhKaRgTczwDtV"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <p class="video-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque finibus
                            nibh
                            congue nunc aliquet, ac posuere quam feugiat.</p>
                    </div>
                </div>
                <div class="col-6">
                    <div id="video-physio-carousel" class="owl-carousel owl-theme">
                        <div class="item">
                            <iframe width="100%" height="315"
                                src="https://www.youtube.com/embed/FOF71Lb5SkA?si=tl7qhKaRgTczwDtV"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        <div class="item">
                            <div>
                                <iframe width="100%" height="315"
                                    src="https://www.youtube.com/embed/FOF71Lb5SkA?si=tl7qhKaRgTczwDtV"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="item">
                            <div>
                                <iframe width="100%" height="315"
                                    src="https://www.youtube.com/embed/FOF71Lb5SkA?si=tl7qhKaRgTczwDtV"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="item">
                            <div>
                                <iframe width="100%" height="315"
                                    src="https://www.youtube.com/embed/FOF71Lb5SkA?si=tl7qhKaRgTczwDtV"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="item">
                            <div>
                                <iframe width="100%" height="315"
                                    src="https://www.youtube.com/embed/FOF71Lb5SkA?si=tl7qhKaRgTczwDtV"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="item">
                            <div>
                                <iframe width="100%" height="315"
                                    src="https://www.youtube.com/embed/FOF71Lb5SkA?si=tl7qhKaRgTczwDtV"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- video  section  end -->
    <!-- subscription  start  -->
    <div class="container">
        <div class="subscription-section">
            <h2 class="subscription-head">subscription </h2>
            <div class="grid-subscription">
                <div>
                    <div class="subscrit-card-item">
                        <p class="subscrit-free-btn">free</p>
                        <div class="subscrit-free-datatext">
                            <span class="free-month-text"><span class="euro-text"><i class="fa-solid fa-euro-sign"></i>
                                    0</span> /month</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Quisque finibus nibh congue nunc aliquet, a</p>
                            <p>Sed pretium mi est, quis porta ligula fringilla in. Pellentesque a pellentesque dui.</p>
                            <a href="#" class="card-subscription-btn">SUBSCRIBE NOW</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="subscrit-card-item">
                        <p class="subscrit-free-btn">Silver</p>
                        <div class="subscrit-free-datatext">
                            <span class="free-month-text"><span class="euro-text"><i class="fa-solid fa-euro-sign"></i>
                                    150</span> /month</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Quisque finibus nibh congue nunc aliquet, a</p>
                            <p>Sed pretium mi est, quis porta ligula fringilla in. Pellentesque a pellentesque dui.</p>
                            <a href="#" class="card-subscription-btn">SUBSCRIBE NOW</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="subscrit-card-item">
                        <p class="subscrit-free-btn">Gold</p>
                        <div class="subscrit-free-datatext">
                            <span class="free-month-text"><span class="euro-text"><i class="fa-solid fa-euro-sign"></i>
                                    250</span> /month</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Quisque finibus nibh congue nunc aliquet, a</p>
                            <p>Sed pretium mi est, quis porta ligula fringilla in. Pellentesque a pellentesque dui.</p>
                            <a href="#" class="card-subscription-btn">SUBSCRIBE NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscription  end  -->
    <!-- get  in touch  start  -->
    <div class="container">
        <div class="get-in-touchsection">
            <div class="grid-get-in-touch row">
                <div class="col-6">
                    <h2 class="get-in-touchtext">GET IN TOUCH</h2>
                    <div>
                        <form>
                            <div class="name-input">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" placeholder="Ex.Ralph Davies">
                            </div>
                            <div class="name-input">
                                <label for="name">Email</label>
                                <input class="form-control" type="email" placeholder="Ex.ralphdavies@gmail.com">
                            </div>
                            <div class="name-input">
                                <label for="name">Message</label>
                                <textarea class="form-control" rows="2" placeholder="Mention additional details about your needs?"></textarea>
                            </div>
                            <button class="git-request-btn">Request Information</button>
                        </form>
                    </div>
                </div>
                <div class="col-6">
                    <img src="{{ asset('frontend/img/gt-in-touch.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
