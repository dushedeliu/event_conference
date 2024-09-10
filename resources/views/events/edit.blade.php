<x-admin-layout>
    @if(session()->has('errors'))
        <div class="alert alert-danger">
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
                    <h2 class="title">Edit '{{$event->title}}'</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('events.update', $event)}}" method="POST">
                        @csrf
                        @method('patch')

                        <div class="row">
                            <div class="col-md-12 px-1">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title..." value="{{$event->title}}">
                                </div>
                                @if($errors->has('title'))
                                    <div class="alert alert-danger">
                                        <button type="button" aria-hidden="true" class="close">
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button>
                                        <span>{{$errors->first('title')}}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-12 pl-1">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description">{{$event->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input type="datetime-local" class="form-control" name="start_date" value="{{$event->start_date}}">
                                </div>
                                @if($errors->has('start_date'))
                                    <div class="alert alert-danger">
                                        <button type="button" aria-hidden="true" class="close">
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button>
                                        <span>{{$errors->first('start_date')}}</span>
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>End Date</label>
                                    <input type="datetime-local" class="form-control" name="end_date" value="{{$event->end_date}}">
                                </div>
                                @if($errors->has('end_date'))
                                    <div class="alert alert-danger">
                                        <button type="button" aria-hidden="true" class="close">
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button>
                                        <span>{{$errors->first('end_date')}}</span>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="quantity">Ticket Quantity:</label>
                                <input type="number" name="quantity" id="quantity" class="form-control" required min="1" value="{{ $ticket ? $ticket->quantity : 1 }}">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-danger">Update</button>
                        <button class="btn btn-black"><a href="{{route('events.index')}}">Cancel</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
