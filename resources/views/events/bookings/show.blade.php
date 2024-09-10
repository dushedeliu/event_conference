<x-admin-layout>
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header">
                <h4 class="card-title"> All bookings for {{$event->title}} ({{$event->bookings()->count()}})</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>
                            Names
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Tickets
                        </th>
                        <th>
                            Booking Date
                        </th>
                        </thead>
                        <tbody>
                        @foreach($bookings as $booking)
                        <tr>
                            <td>
                                {{$booking->user->name}}
                            </td>
                            <td>
                                {{$booking->user->email}}
                            </td>
                            <td>
                                {{$booking->ticket_quantities}}
                            </td>
                            <td>
                                {{$booking->booking_date}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
