<x-admin-layout>
    @if(session()->has('success'))
        <div class="alert alert-success">
            <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
            </button>
            <span>{{session('success')}}</span>
        </div>
    @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Simple Table</h4>
                        <a href="{{route('events.create')}}">Add an event</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Title
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Start Date
                                </th>
                                <th>
                                    End Date
                                </th>
                                <th>
                                    Location
                                </th>
                                <th>
                                    Tickets Available
                                </th>
                                <th>
                                    Actions
                                </th>
                                </thead>
                                <tbody>
                                @foreach($events as $event)
                                <tr>
                                    <td>
                                        {{$event->title}}
                                    </td>
                                    <td>
                                        {{$event->description}}
                                    </td>
                                    <td>
                                        {{$event->status}}
                                    </td>
                                    <td>
                                        {{$event->start_date->format('d/m/Y H:i')}}
                                    </td>
                                    <td>
                                        {{$event->end_date->format('d/m/Y H:i')}}
                                    </td>
                                    <td>
                                        {{$event->location}}
                                    </td>
                                    <td>
                                        @foreach($event->tickets as $ticket)
                                            {{$ticket->quantity}}
                                        @endforeach

                                    </td>
                                    <td>
                                        <a href="{{route('bookings.show', $event)}}">View all bookings</a>
                                        <a href="{{route('events.edit', $event)}}">Edit</a>
                                        <form action="{{route('events.destroy', $event)}}" method="post" onsubmit="return confirm('Are you sure you want to delete {{$event->title}}?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</x-admin-layout>
