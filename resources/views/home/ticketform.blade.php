<x-home-layout>

    @if(session()->has('success'))
        <div class="alert alert-success">
            <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
            </button>
            <span>{{session('success')}}</span>
        </div>
    @endif

    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Book the event</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <div class="container mt-40">
        <div class="row">
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{ route('home.store', $event) }}" method="post" novalidate="novalidate">
                @csrf
                    <input type="hidden" name="event_id" value="{{ $event->id }}">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Enter your full name">
                            </div>
                            @if($errors->has('name'))
                                <div class="alert alert-danger">
                                    <button type="button" aria-hidden="true" class="close">
                                        <i class="now-ui-icons ui-1_simple-remove"></i>
                                    </button>
                                    <span>{{$errors->first('name')}}</span>
                                </div>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                            </div>
                            @if($errors->has('email'))
                                <div class="alert alert-danger">
                                    <button type="button" aria-hidden="true" class="close">
                                        <i class="now-ui-icons ui-1_simple-remove"></i>
                                    </button>
                                    <span>{{$errors->first('email')}}</span>
                                </div>
                            @endif
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="ticket_quantity" id="ticket_quantity" type="number" min="1" onfocus="this.placeholder = ''" onblur="this.placeholder = 'How many tickets?'" placeholder="How many tickets?">
                            </div>
                            @if($errors->has('ticket_quantity'))
                                <div class="alert alert-danger">
                                    <button type="button" aria-hidden="true" class="close">
                                        <i class="now-ui-icons ui-1_simple-remove"></i>
                                    </button>
                                    <span>{{$errors->first('ticket_quantity')}}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Book</button>
                    </div>
                </form>
            </div>


            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Buttonwood, California.</h3>
                        <p>Rosemead, CA 91770</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>+1 253 565 2365</h3>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>support@colorlib.com</h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-home-layout>
