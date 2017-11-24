@extends('layouts.master')
@section('content')
            <form action="{{url('/create-event')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="col s4 offset-s4 col m4 offset-m4 col l4 offset-l4">
                        <label for="date_to_be_held">Select a date for the event</label>
                        <input id="date_to_be_held" type="date" name="date_to_be_held" class="datepicker">
                        <select name="type"><option value="" disabled selected>Choose event type</option>
                            <option value="travel" id="event_type" name="travel">Travel</option>
                            <option value="party" id="event_type" name="party">Party</option>
                            <option value="learn" id="event_type" name="learn">Learn</option>
                        </select><div class="input-field col s12">
                            <input id="eventName" name="name" type="text" class="validate">
                            <label for="eventName">Event name</label>
                        </div>
                        <div class="input-field col s12" >
                            <label for="description" >Description of the event</label>
                            <textarea id="description" name="description" class="materialize-textarea"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="center">
                        <button class="btn waves-effect waves-light btn-format " type="submit" name="action">
                            <i class="material-icons right">send</i>
                            Create
                        </button>
                    </div>
                </div>
            </form>

@endsection