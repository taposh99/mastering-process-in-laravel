
@extends('frontEnd.master')

@section('tittle')
    about
@endsection

@section('content')
    <section class="testimonial">
        <div class="row c-mr-0">
            <div class="col-md-12">
                <div class="testimonial-text">
                    <h1>What Our Student Says</h1>
                    <p>We commit to meet the financial need of every admitted undergraduate student. We don’t consider your ability to pay when we review your application, and we don’t base our decision on whether you can cover the cost. If you’re accepted here, you belong here.</p>
                </div>
            </div>
        </div>

        <div class="row c-mr-0 mt-5 mb-5 ">
            <div class="col-md-6 ">
                <div class="row testimonial-content">
                    <div class="col-md-2 col-2">
                        <img class="img-fluid" src="{{asset('frontEndAsset')}}/image/user1.jpg" alt="">
                    </div>
                    <div class="col-md-10 col-10">
                        <div>
                            <p>“Eduford is home to me not because of the fancy buildings like Healy Hall, or its prestigious reputation, but rather because of the university’s care for the whole person as each of us attempts to live our lives for others.” </p>
                            <h5>Anamika Saha</h5>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="row testimonial-content">
                    <div class="col-md-2 col-2">
                        <img class="img-fluid" src="{{asset('frontEndAsset')}}/image/user2.jpg" alt="">
                    </div>
                    <div class="col-md-10 col-10">
                        <div>
                            <p class="pb-6">“It’s likely that you will come to love some of the most amazing souls this campus has to offer. That love may come in the form of friendships that you know will last forever.”</p>
                            <h5>Abhishek Roy</h5>
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="row c-mr-0">
            <div class="col-md-12 ">
                <div class="cta-content">
                    <h1>Enroll For Our Various Online Courses </h1>
                    <h1 class="mt-5 mb-5">Anywhere from the World</h1>
                    <p class="text-center">
                        <a href="" class="btn btn-outline-primary hero-btn">Contact Us</a>
                    </p>
                </div>
            </div>
        </div>
    </section>


@endsection

