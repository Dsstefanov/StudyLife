@extends('layouts.master')
@section('content')
    <!--Interests-->
    <div id="2" class="slide">
        <div class="row">
            <!-- Party -->
            <section class="col s12 col m10 offset-m1 col l4 top-offset hide-on-small-and-down">
                <img class=" responsive-img col s12 col m10 offset-m1" src="pictures/party.jpg" alt="party">
                <p class="col s12 col m10 offset-m1">
                    If you are the interested in experiencing the best of the parties around the city – keep an eye on our red logo – StudyLife Party! Amazing atmosphere, great fun and cool people are just some of the things that you could find at each of our parties. No matter if you’re into experiencing new cultures through listening to great music (yes, we mean our one of a kind Balkan parties) or prefer chilling with friends, drinking beer and just having fun, make sure that you won’t miss any of our events!
                </p>
                <img class="circle responsive-img col s12 col m10 offset-m1 offset-p " src="pictures/party2.jpg" alt="slParty">
            </section>
            {{--MOBILE--}}
            <section class="col s12 col m10 offset-m1 col l4 top-offset hide-on-med-and-up">
                <img class="responsive-img col s12 col m10 offset-m1" src="pictures/party.jpg" alt="party">
                <img class="circle responsive-img col s12 col m10 offset-m1 offset-p top-offset" src="pictures/party2.jpg" alt="slParty">
                <p class="col s12 col m10 offset-m1">
                    If you are the interested in experiencing the best of the parties around the city – keep an eye on our red logo – StudyLife Party! Amazing atmosphere, great fun and cool people are just some of the things that you could find at each of our parties. No matter if you’re into experiencing new cultures through listening to great music (yes, we mean our one of a kind Balkan parties) or prefer chilling with friends, drinking beer and just having fun, make sure that you won’t miss any of our events!
                </p>

            </section>

            <!-- Travel -->
            <section class="col s12 col m10 offset-m1 col l4 top-offset hide-on-small-and-down">
                <img class="circle responsive-img col s12 col m10 offset-m1 offset-p " src="pictures/travel1.jpg" alt="slTravel">
                <p class="col s12 col m10 offset-m1">
                    We know that being a successful student requires some proper rests in between the studies and that’s why we created StudyLife Travel! If you would like to see some of the amazing places around Denmark that you’ve heard so much about, make sure that you follow the events marked with our yellow logo. Student-friendly prices, great organization and thousands of amazing memories – yes, this is a short description of our trips. Sounds like fun, right?
                </p>
                <img class=" responsive-img col s12 col m10 offset-m1" src="pictures/travel.jpg" alt="travel">
            </section>
            {{--MOBILE--}}
            <section class="col s12 col m10 offset-m1 col l4 top-offset hide-on-med-and-up">
                <img class=" responsive-img col s12 col m10 offset-m1" src="pictures/travel.jpg" alt="travel">
                <img class="circle responsive-img col s12 col m10 offset-m1 offset-p top-offset" src="pictures/travel1.jpg" alt="slTravel">
                <p class="col s12 col m10 offset-m1">
                    We know that being a successful student requires some proper rests in between the studies and that’s why we created StudyLife Travel! If you would like to see some of the amazing places around Denmark that you’ve heard so much about, make sure that you follow the events marked with our yellow logo. Student-friendly prices, great organization and thousands of amazing memories – yes, this is a short description of our trips. Sounds like fun, right?
                </p>
            </section>
            <!--Learn-->
            <section class="col s12 col m10 offset-m1 col l4 top-offset hide-on-small-and-down">
                <img class=" responsive-img col s12 col m10 offset-m1" src="pictures/learn.png" alt="party">
                <p class="col s12 col m10 offset-m1">
                    Don’t think that we are only parties and chilling. When it comes to education, we do our best to make sure that we could be helpful for all the students around the city. If you are interested in free workshops, presentations and seminars related to both education and professional development, StudyLife Learn is just for you! Keep an eye on the events marked with our green logo. Make sure that you grab every chance you have when it comes to improving your skills. We guarantee that we could help!
                </p>
                <img class="circle responsive-img col s12 col m10 offset-m1 offset-p " src="pictures/slparty.jpg" alt="slLearn">
            </section>
            {{--MOBILE--}}
            <section class="col s12 col m10 offset-m1 col l4 top-offset hide-on-med-and-up">
                <img class=" responsive-img col s12 col m10 offset-m1" src="pictures/learn.png" alt="party">
                <img class="circle responsive-img col s12 col m10 offset-m1 offset-p top-offset" src="pictures/slparty.jpg" alt="slLearn">
                <p class="col s12 col m10 offset-m1">
                    Don’t think that we are only parties and chilling. When it comes to education, we do our best to make sure that we could be helpful for all the students around the city. If you are interested in free workshops, presentations and seminars related to both education and professional development, StudyLife Learn is just for you! Keep an eye on the events marked with our green logo. Make sure that you grab every chance you have when it comes to improving your skills. We guarantee that we could help!
                </p>
            </section>

        </div>
        <div class="row">
            <div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1 center">
                <h2>Past events</h2>
            </div>
        </div>
        <div class="row">
            <ul class="collapsible" data-collapsible="accordion">
                <li class="col s10 m4 l4">
                    <img src="pictures/party1.jpg" alt="placeholderImage" class="collapsible-header responsive-img">
                    <div class="collapsible-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
                            <div class="center">
                                <a href=""># we use for the event</a>
                            </div>
                        </p>
                    </div>
                </li>
                <li class="col s10 m4 l4">
                    <img src="pictures/party1.jpg" alt="placeholderImage" class="collapsible-header responsive-img">
                    <div class="collapsible-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
                        <div class="center">
                            <a href=""># we use for the event</a>
                        </div>
                        </p>
                    </div>
                </li>
                <li class="col s10 m4 l4">
                    <img src="pictures/party1.jpg" alt="placeholderImage" class="collapsible-header responsive-img">
                    <div class="collapsible-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
                            <div class="center">
                                <a href=""># we use for the event</a>
                            </div>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection