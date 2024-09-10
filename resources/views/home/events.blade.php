<x-home-layout>

    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Events</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!--? accordion -->
    <section class="accordion fix section-padding10">
        <div class="container">
        @foreach($events as $event)
        <div class="container">
            <!-- Nav Card -->
            <div class="tab-content" id="nav-tabContent">
                <!-- card one -->
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-lg-11">
                            <div class="accordion-wrapper">
                                <div class="accordion" id="accordionExample">
                                    <!-- single-one -->
                                    <div class="card">
                                        <div class="card-header" id="heading{{ $loop->index }}">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapse{{ $loop->index }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapse{{ $loop->index }}">
                                                    <span>{{$event->start_date->format('d/m/Y H:i')}}</span> - <span>{{$event->end_date->format('d/m/Y')}}</span>
                                                    <p>{{$event->title}}</p>
                                                    <span>Location:</span> <span>{{$event->location}}</span>
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapse{{ $loop->index }}" class="collapse" aria-labelledby="heading{{ $loop->index }}" data-parent="#accordionExample">
                                            <div class="card-body">
                                                {{$event->description}}
                                            </div>
                                            @php
                                                $currentDateTime = \Carbon\Carbon::now();
                                                $eventStartDate = \Carbon\Carbon::parse($event->start_date);
                                                $isPastEvent = $currentDateTime->greaterThan($eventStartDate);
                                            @endphp
                                            <button class="btn btn-primary {{ $isPastEvent ? 'disabled' : '' }}">
                                                @if($isPastEvent)
                                                    Event has started
                                                @else
                                                    <a href="{{ route('home.book', $event) }}" class="text-white">Attend</a>
                                                @endif
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Nav Card -->
        </div>
        @endforeach
    </section>
    <!-- accordion End -->

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center mb-30">
            {{$events->links()}}
        </ul>
    </nav>

</x-home-layout>
