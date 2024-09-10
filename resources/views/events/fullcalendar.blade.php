<x-admin-layout>
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h4 class="card-title"> Full Calendar</h4>
            </div>


{{--            <!-- Button trigger modal -->--}}
{{--            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">--}}
{{--                Launch demo modal--}}
{{--            </button>--}}

            <!-- Modal -->
            <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Event Title...">
                            <span id="titleError" class="text-danger"></span>
{{--                            <label>Start Time</label>--}}
{{--                            <input type="time" class="form-control" name="start_date" id="start_date">--}}
{{--                            <label>End Time</label>--}}
{{--                            <input type="time" class="form-control" name="end_date" id="end_date">--}}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger" id="saveBtn">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div id='calendar'></div>
            </div>
        </div>
    </div>


</x-admin-layout>
