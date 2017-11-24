@extends('layouts.master')
@section('content')
    <div class="row">
        <section class="col s10 offset-s1 col m10 offset-m1 col l5 offset-l1">
            <h4 class="center">Contact information</h4>

            <ul >
                <li  class=" col s12 ">Contact 1</li>
                <li  class=" col s12 ">Contact 2</li>
                <li  class=" col s12 ">Contact 3</li>
                <li  class=" col s12 ">Contact 4</li>
            </ul>
        </section>
        <section class="col s10 offset-s1 col m10 offset-m1 col l4 top-offset">
            <form action="{{action('MailingController@newMemberNotification')}}" method="post" class="col s12">
                {{csrf_field()}}
                <div class="row"><div class="input-field col s12">
                        <input id="first_name" name="first_name" type="text" class="validate">
                        <label for="first_name">First name</label>
                    </div><div class="input-field col s12">
                        <input id="surname" name="surname" type="text" class="validate">
                        <label for="surname">Surname</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="email" name="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div><div class="input-field col s12">
                        <select name="member_type">
                            <option value="" disabled selected>Choose your option</option>
                            <option  value="Volunteer">Volunteer</option>
                            <option value="Supporter">Supporter</option>
                        </select></div><div class="input-field col s12" >
                        <label for="icon_prefix2">Insert your message</label>
                        <textarea name="user_message" id="icon_prefix2" class="materialize-textarea" length="255"></textarea>
                    </div>

                    <div class="center">
                        <button class="btn waves-effect waves-light btn-format " type="submit" name="action">
                            <i class="material-icons right">send</i>
                            Send
                        </button>
                    </div>

                </div>
            </form>
        </section>
    </div>
@endsection