@extends('frontend.partial.master')

@section('content')
<div class="be-apart-bg">
    <div class="container">
        <div>
            <p>Be a part of the fitness revolution</p>
            <h4>Become A Physio  <i class="fa-solid fa-arrow-turn-down"></i></h4>
        </div>
    </div>
</div>

<div class="container">
    <div class="become-herodicus-box">
        <div  class="become-herodicus-img-box">
            <img src="{{ asset('frontend/img/become-physio-detail.png') }}" class="become-herodicus-img" alt="">    
        </div>
        <div class="become-herodicus-coachbox">
            <h4>Become a Herodicus Coach</h4>
            <p>Herodicus Coaches have helped more than 300,000 people achieve their fitness goals and regularly guide over 3 million community members looking to transform themselves.</p>
            <p>As a coach, you'll educate and support the Herodicus community while influencing and motivating members to live their best lives. You will serve as a health ambassador who constantly strives to bring the benefits of fitness and nutrition to people from around the globe.</p>
            <p>If you're ready to take your career in online fitness to the next level, consider becoming a FITTR Coach today!
            Become a fitness coach</p>
            <button>Become A fitness Coach</button>
        </div>
    </div>
</div>

<div class="row m-0">
    <div class="col-3 p-0">
        <div class="mastery-box">
            <img src="{{ asset('frontend/img/mastery-img.png') }}" class="img-fluid" alt="">
            <h4 class="mastery-texthead">Mastery</h4>
            <div class="mastery-box-hovershow">
                <h4>Mastery</h4>
                <p>"I’m so proud to be connected to BetterUp and its mission. I am proud to be part of this community. More than ever I am dedicated to being an expert in what we do because. I am grateful to BetterUp for the work they do to put Coaches out onto the “frontlines” in a way that is scalable and allows us as a community to make a tectonic impact."</p>
            </div>
        </div>
    </div>
    <div class="col-3 p-0">
        <div class="mastery-box">
            <img src="{{ asset('frontend/img/connection-img.png') }}" class="img-fluid" alt="">
            <h4 class="mastery-texthead">Connection</h4>
            <div class="mastery-box-hovershow">
                <h4>Connection</h4>
                <p>"I’m so proud to be connected to BetterUp and its mission. I am proud to be part of this community. More than ever I am dedicated to being an expert in what we do because. I am grateful to BetterUp for the work they do to put Coaches out onto the “frontlines” in a way that is scalable and allows us as a community to make a tectonic impact."</p>
            </div>
        </div>
    </div>
    <div class="col-3 p-0">
        <div class="mastery-box">
            <img src="{{ asset('frontend/img/community-img.png') }}" class="img-fluid" alt="">
            <h4 class="mastery-texthead">Community</h4>
            <div class="mastery-box-hovershow">
                <h4>Community</h4>
                <p>"I’m so proud to be connected to BetterUp and its mission. I am proud to be part of this community. More than ever I am dedicated to being an expert in what we do because. I am grateful to BetterUp for the work they do to put Coaches out onto the “frontlines” in a way that is scalable and allows us as a community to make a tectonic impact."</p>
            </div>
        </div>
    </div>
    <div class="col-3 p-0">
        <div class="mastery-box">
            <img src="{{ asset('frontend/img/purpose-img.png') }}" class="img-fluid" alt="">
            <h4 class="mastery-texthead">Purpose</h4>
            <div class="mastery-box-hovershow">
                <h4>Purpose</h4>
                <p>"I’m so proud to be connected to BetterUp and its mission. I am proud to be part of this community. More than ever I am dedicated to being an expert in what we do because. I am grateful to BetterUp for the work they do to put Coaches out onto the “frontlines” in a way that is scalable and allows us as a community to make a tectonic impact."</p>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <div id="our-clients" class="owl-carousel owl-theme">
        <div class="item">
            <div class="row align-items-center">
                <div class="col-4">
                    <img src="{{ asset('frontend/img/our-clients-img.png') }}" alt="">
                </div>
                <div class="col-1"></div>
                <div class="col-7">
                    <h4 class="our-clients-heading">Our Clients</h4>
                    <div class="our-client-box">
                        <p> <i class="fa-solid fa-quote-left"></i>  “ Ncupidatat Lorem culpa loboretion veniam cupidatat deserunt do cons eiusmod officia magnam idatat  cillum reprehenderit  ea excepteur”</p>
                        <div >
                            <span class="ourclient-doctor-name">Kinjal Bhatt</span>
                            <span class="clients-status-docter">CEO of Heridcus</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="row align-items-center">
                <div class="col-4">
                    <img src="{{ asset('frontend/img/our-clients-img.png') }}" alt="">
                </div>
                <div class="col-1"></div>
                <div class="col-7">
                    <h4 class="our-clients-heading">Our Clients</h4>
                    <div class="our-client-box">
                        <p> <i class="fa-solid fa-quote-left"></i>  “ Ncupidatat Lorem culpa loboretion veniam cupidatat deserunt do cons eiusmod officia magnam idatat  cillum reprehenderit  ea excepteur”</p>
                        <div >
                            <span class="ourclient-doctor-name">Kinjal Bhatt</span>
                            <span class="clients-status-docter">CEO of Heridcus</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="row align-items-center">
                <div class="col-4">
                    <img src="{{ asset('frontend/img/our-clients-img.png') }}" alt="">
                </div>
                <div class="col-1"></div>
                <div class="col-7">
                    <h4 class="our-clients-heading">Our Clients</h4>
                    <div class="our-client-box">
                        <p> <i class="fa-solid fa-quote-left"></i>  “ Ncupidatat Lorem culpa loboretion veniam cupidatat deserunt do cons eiusmod officia magnam idatat  cillum reprehenderit  ea excepteur”</p>
                        <div >
                            <span class="ourclient-doctor-name">Kinjal Bhatt</span>
                            <span class="clients-status-docter">CEO of Heridcus</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="row align-items-center">
                <div class="col-4">
                    <img src="{{ asset('frontend/img/our-clients-img.png') }}" alt="">
                </div>
                <div class="col-1"></div>
                <div class="col-7">
                    <h4 class="our-clients-heading">Our Clients</h4>
                    <div class="our-client-box">
                        <p> <i class="fa-solid fa-quote-left"></i>  “ Ncupidatat Lorem culpa loboretion veniam cupidatat deserunt do cons eiusmod officia magnam idatat  cillum reprehenderit  ea excepteur”</p>
                        <div >
                            <span class="ourclient-doctor-name">Kinjal Bhatt</span>
                            <span class="clients-status-docter">CEO of Heridcus</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
</div>
<!-- become Physio end  -->

<!-- join today for free  start  -->
    <div class="join-free-bg">
        <img src="{{ asset('frontend/img/join-today-free.png') }}" class="img-fluid" alt="">
        <div class="join-free-text">
            <h4>Ready to become an Expert?
                Join today for free</h4>
            <button>Join As an Expert</button>
        </div>
    </div>
<!-- join today for free  end  -->

 <!-- get  in touch  start  -->
 <div class="container">
    <div class="get-in-touchsection">
        <div class="grid-get-in-touch row">
            <div class="col-6">
                <h2 class="get-in-touchtext">GET IN TOUCH</h2>
                <div>
                    <form >
                        <div class="name-input">
                            <label for="name">Name</label>
                            <input  class="form-control"  type="text" placeholder="Ex.Ralph Davies">
                        </div>
                        <div class="name-input">
                            <label for="name">Email</label>
                            <input  class="form-control"  type="email" placeholder="Ex.ralphdavies@gmail.com">
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