@extends('layouts.master')
@section('content')
    <div class="row">
        <section class="col s10 offset-s1 col m10 offset-m1 col l5 offset-l1">
            <h4 class="center">Volunteer</h4>
            <p>
                Being a volunteer in StudyLife will enable you to work together with other students which are interested in the same areas as you are. The main departments in which you will be able to volunteer, are Marketing, Design and IT. In each department there are several opportunities for you, based on what your interests are. At SudyLife we encourage everybody to implement their ideas, as long as you come with the initiative, all other members will help you achieve them. Within StudyLife, we expect the volunteers to:
            </p>
            <ul >
                <li id="list-items" class="tab col s12 ">Work between 2 and 5 hours a week</li>
                <li id="list-items" class="tab col s12 ">Be present to our meetings, if it involves their tasks</li>
                <li id="list-items" class="tab col s12 ">Check out StudyLife’s intranet, to be up to date</li>
                <li id="list-items" class="tab col s12">Take initiative for their ideas and work to implement them</li>
            </ul>
            <p >
                Besides the volunteering opportunities from within StudyLife, there will be many more coming from our partners.
            </p>
        </section>
        <section class="col s10 offset-s1 col m10 offset-m1 col l4">
            <h4 class="center">Supporter</h4>
            <p>
                When you want to become a member of StudyLife you have two options: being a supporter or a volunteer. If you decide to become a StudyLife Supporter, you will have access to several attractive discounts. In order to become a supporter, all you have to do is pay the semester membership fee of 50 kr and enjoy the benefits.
            </p>
            <ul >
                <li id="list-items" class="tab col s12 ">Discount 1</li>
                <li id="list-items" class="tab col s12 ">Discount 2</li>
                <li id="list-items" class="tab col s12 ">Discount 3</li>
                <li id="list-items" class="tab col s12">Discount 4</li>
            </ul>
        </section>
    </div>
    <div class="row">
        <div class="col s10 offset-s1 col m10 offset-m1 col l10 offset-l1">
            <div class="center">
            <button class="btn waves-effect waves-light btn-format " onclick="window.location='{{url('contact')}}'">
                <i class="material-icons left">call</i>
                Contact us
            </button>
            </div>
        </div>
    </div>
@endsection