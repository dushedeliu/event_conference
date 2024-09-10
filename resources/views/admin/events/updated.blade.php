<x-admin-layout>

    @if(session()->has('success'))
        <div class="alert alert-success">
            <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
            </button>
            <span>{{session('success')}}</span>
        </div>
    @endif
    @if(session()->has('errors'))
        <div class="alert alert-success">
            <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
            </button>
            <span>{{session('errors')}}</span>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Updated Events Table</h4>
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
                                Organizer
                            </th>
                            <th>
                                Start Date
                            </th>
                            <th>
                                End Date
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
                                        {{$event->user->name}}
                                    </td>
                                    <td>
                                        {{$event->pending_start_date}}
                                    </td>
                                    <td>
                                        {{$event->pending_end_date}}
                                    </td>
                                    <td>
                                        <a href="#">View</a>
                                        <form action="{{ route('admin.events.approve', $event) }}" method="POST" style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-success">Approve</button>
                                        </form>
                                        <form action="{{ route('admin.events.reject', $event) }}" method="POST" style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Reject</button>
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
