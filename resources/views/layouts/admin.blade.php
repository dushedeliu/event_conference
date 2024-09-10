<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{csrf_token()}}"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('../assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('../assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Event List Dashboard
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{asset('../assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('../assets/css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />

{{--    FullCalendar Js     --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="red">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
            <a href="#" class="simple-text logo-mini">
                EM
            </a>
            <a href="/" class="simple-text logo-normal">
                Event Management
            </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">

                @if(auth()->user()->hasRole('organizer'))
                <li class="active ">
                    <a href="{{route('dashboard')}}" >
                        <i class="now-ui-icons design_app"></i>
                        <p>Dashboard</p>
                    </a>
                </li>


                <li class="active nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="now-ui-icons ui-1_simple-add"></i>
                        Events
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('events.index')}}">Table</a>
                        <a class="dropdown-item" href="{{route('events.fullcalendar')}}">Calendar</a>
                    </div>
                </li>
                    @endif

                @if(auth()->user()->hasRole('user'))
                    <li class="active ">
                        <a href="{{route('bookings.index')}}" >
                            <i class="now-ui-icons design_app"></i>
                            <p>Bookings</p>
                        </a>
                    </li>
                    @endif

                @if(auth()->user()->hasRole('admin'))
                    <li class="active nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="now-ui-icons ui-1_simple-add"></i>
                            Events List
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{route('admin.events.index')}}">View all events</a>
                            <a class="dropdown-item" href="{{route('admin.events.updated')}}">View new updated events</a>
{{--                            <a class="dropdown-item" href="{{route('admin.events.fullcalendar')}}">Calendar</a>--}}
                        </div>
                    </li>

                    <li class="active nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="now-ui-icons ui-1_simple-add"></i>
                            User Management
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{route('admin.users.index')}}">Users</a>
                            <a class="dropdown-item" href="{{route('admin.roles.index')}}">Roles</a>
                        </div>
                    </li>

                @endif

                    <li class="active ">
                        <a href="/" >
                            <i class="now-ui-icons arrows-1_minimal-left"></i>
                            <p>Turn Back to Home</p>
                        </a>
                    </li>

            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form action="{{route('events.index')}}" method="get">
                        <div class="input-group no-border">
                            <input type="text" name="search" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="now-ui-icons users_single-02"></i>
                                <p>
                                    <span class="d-lg-none d-md-block text-black">Account</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        <x-dropdown-link :href="route('profile.edit')">
                                            {{ __('Profile') }}
                                        </x-dropdown-link>

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')"
                                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

{{--       Main          --}}
        <div class="panel-header panel-header-sm">
        </div>
        <div class="content">
            {{$slot}}
        </div>



    </div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('../assets/js/core/jquery.min.js')}}"></script>
<script src="{{asset('../assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('../assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('../assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!-- Chart JS -->
<script src="{{asset('../assets/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('../assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('../assets/js/now-ui-dashboard.min.js?v=1.5.0')}}" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('../assets/demo/demo.js')}}"></script>

</body>

{{--   FullCalendar script --}}
<script type="module">

    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
              left: 'prev,next,today',
                center: 'title',
                right: 'dayGridMonth, timeGridWeek, timeGridDay, listWeek'
            },
            initialView: 'dayGridMonth',
            events: '{{route('events.getEvents')}}',
            // Select date and create an event
            selectable: true,
            select: function (info){
                $('#eventModal').modal('toggle');
                $('#saveBtn').off('click').on('click', function() {
                    var title = $('#title').val();

                    // var startDate = info.startStr;
                    // var endDate = info.endStr ? info.endStr : startDate;
                    var startDate = info.start;
                    var endDate = info.end ? info.end : startDate;

                    var start_date = startDate.toISOString();
                    var end_date = endDate.toISOString();


                    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                    $.ajax({
                        url: '{{route('events.addEvent')}}',
                        type: 'POST',
                        dataType: 'json',
                        data:{title, start_date, end_date},
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success:function(response){
                            calendar.addEvent({
                                title: response.title,
                                start: response.start_date,
                                end: response.end_date
                            });
                            $('#eventModal').modal('hide');
                        },
                        error:function (error){
                           if(error.responseJSON.errors){
                               $('#titleError').html(error.responseJSON.errors.title);
                           }
                        }
                    })
                })
            },

            // Drag & drop/update event date
            editable: true,
            eventDrop: function (info){
                var eventId = info.event.id;
                var newStartDate = info.event.startStr;
                var newEndDate = info.event.endStr || newStartDate;


                var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                $.ajax({
                    method: 'PUT',
                    url: `/calendar/events/update/${eventId}`,
                    data: {
                        start_date: newStartDate,
                        end_date: newEndDate
                    },
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success:function(){
                        console.log('Event moved successfully');
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "Event moved successfully",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    },
                    error:function (error){
                        console.log(error);
                    }
                })
            },

            // resize the event
            eventResize: function (info){
                var eventId = info.event.id;
                var newEndDate = info.event.endStr;

                var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                $.ajax({
                    method: 'PATCH',
                    url: `/calendar/events/${eventId}/resize`,
                    data: {
                        end_date: newEndDate
                    },
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success:function(){
                        console.log('Event resized successfully');
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "Event resized successfully",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    },
                    error:function (error){
                        console.log(error);
                    }
                })

            },

            // delete an event
            eventClick: function(info) {
                var event = info.event;
                var eventId = event.id;

                var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                if(confirm('Are you sure you want to remove it?')){
                    $.ajax({
                        method: 'DELETE',
                        url:  `/calendar/events/destroy/${eventId}`,
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success:function(response){
                            console.log(response);
                            Swal.fire("Event deleted successfully");
                            calendar.refetchEvents();
                        },
                        error: function(error) {
                            console.log(error.responseText);
                        }
                    })
                }
            },
        });
        calendar.render();
    });

</script>

</html>
