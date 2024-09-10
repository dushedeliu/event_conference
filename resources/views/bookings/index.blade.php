<x-admin-layout>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Simple Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                Event Title
                            </th>
                            <th>
                                Event Description
                            </th>
                            <th>
                                Event Date
                            </th>
                            <th>
                                Event Booking Date
                            </th>
                            <th>
                                Location
                            </th>
                            <th>
                                Booked Tickets
                            </th>
                            <th>
                                Actions
                            </th>
                            </thead>
                            <tbody>
                            @foreach($bookings as $booking)
                                <tr>
                                    <td>
                                        {{$booking->event->title}}
                                    </td>
                                    <td>
                                        {{$booking->event->description}}
                                    </td>
                                    <td>
                                        {{$booking->event->start_date->format('d/m/Y H:i')}}  {{$booking->event->end_date->format('d/m/Y')}}
                                    </td>
                                    <td>
                                        {{$booking->booking_date}}
                                    </td>
                                    <td>
                                        {{$booking->event->location}}
                                    </td>
                                    <td>
                                        {{$booking->ticket_quantities}}
                                    </td>
                                    <td>
                                        <form action="{{route('bookings.destroy', $booking)}}" method="post" class="btn btn-danger" onsubmit="return confirm('Are you sure you want to cancel this booking {{$booking->event->title}} ?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit">Cancel this booking</button>
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

