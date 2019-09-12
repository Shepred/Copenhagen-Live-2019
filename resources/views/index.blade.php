@extends('layout.master')
    @section('content')        <!-- begin #home -->
        <div id="home" class="content has-bg home">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="{{ asset('assets/img/bg/bg-apron1.jpg') }}" alt="Home" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container home-content">
                <h1>{{ env('APP_NAME') }}</h1>
                <h3>Welcome to the annual gathering at Copenhagen, Kastrup</h3>
                <h4>
                    Saturday the 14th of September, 2019<br />
                    16 hours of controlling from 06:00 Z to 22:00 Z
                </h4>
                <a href="#briefing" class="btn btn-theme">Pilot Briefing</a> <a href="#competitions" class="btn btn-outline">Event Competitions</a><br />
                            </div>
            <!-- end container -->
        </div>
        <!-- end #home -->

        <!-- begin #about -->
        <div id="about" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <h2 class="content-title">About the Event</h2>
                <p class="content-desc">
                    The annual instalment of Copenhagen Live first appeared in 2017 & subsequently grew even larger for 2018.<br>Based upon the popularity of the first and second iterations, it was decided to repeat the event annually.
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-6 col-sm-12">
                        <!-- begin about -->
                        <div class="about">
                            <h3>Here's what to expect for <b>2019</b>..</h3>
                            <p>
                                For 2019 <b>Copenhagen Live actually comes to, well, Copenhagen!</b> This year controllers are gathering just a few minutes north of the actual airport itself on the island of Amager. From here an entire control room will be posted, complete with tower views, enroute, approach & ground sectors for coordination way above what you're used to on VATSIM. The aim is to create an environment that is mutually enjoyable for controllers & pilots alike. We look forward to welcoming <b>you</b> to Copenhagen for the 3rd installment of <b>Copenhagen Live!</b>
                            </p>
                            <p>
                                Last years event was a busy one. With 600+ movements over 16 hours, we are fairly confident we broke any and all records for events in Scandinavia. This year, we're counting on you to go even further. With numerous competitions during the day, prizes sponsored by the generous developers & publishers; Aerosoft, FS2Crew, Orbx & Vidan Design and all day coverage of the entirety of Denmark, we hope that you will join us in breaking our records from 2017 & 2018.
                            </p>
                        </div>
                        <!-- end about -->
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-6 col-sm-12">
                       	<img class="img-responsive img-rounded" src="{{ asset('assets/img/bg/cphlive.jpg') }}">
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #about -->

        <!-- begin #milestone -->

        <div class="content bg-black-darker has-bg" data-scrollview="true">

            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="../assets/img/bg/bg-stats.jpg" alt="Milestone" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container">
                <!-- begin row -->
                <div class="row">
                	<h2 class="content-header text-center">In 2018 we had..</h2>

                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number" data-final-number="1">1</div>
                            <div class="title">Airport</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number" data-final-number="600">600</div>
                            <div class="title">Flights</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number" data-final-number="20">20</div>
                            <div class="title">Controllers</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number" data-final-number="16">16</div>
                            <div class="title">Hours of coverage</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                </div>
                <div class="row">
                	<div class="col-md-12 col-sm-12">
                		<h2 class="text-center content-footer">Will you be a part of 2019?</h2>
                	</div>
                </div>
            </div>
            <!-- end container -->
        </div>
        <!-- end #milestone -->
<!-- beign #service -->
        <div id="competitions" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Competitions</h2>
                <p class="content-desc">
                    Just like last year, we've teamed up with numerous well known flight simulator developers, to give away some wonderful prizes.
                    <br>
                    Below you'll find a brief overview. Please use the form to sign up for the competitions you wish to participate in.
                </p>
                @if(count($errors))
                <div class="col-xs-12">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
                <form class="form-horizontal" method="POST" action="/competitions/signup">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xs-2">
                            &nbsp;
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group" style="margin-right:5px;">
                                <label class="sr-only" for="id">VATSIM ID</label>
                                <input type="text" class="form-control" id="id" name="id" placeholder="VATSIM ID" required>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group" style="margin-left:5px;">
                                <label class="sr-only" for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1">
                            &nbsp;
                        </div>
                        <div class="col-xs-2">
                            <div class="checkbox">
                                <label>
                                   <input type="checkbox" id="1" name="1"> Morning Rush
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="checkbox">
                                <label>
                                   <input type="checkbox" id="2" name="2"> Domestic Madness
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="checkbox">
                                <label>
                                   <input type="checkbox" id="3" name="3"> Afternoon Turnaround
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="checkbox">
                                <label>
                                   <input type="checkbox" id="4" name="4"> 6 Sector Challenge
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="checkbox">
                                <label>
                                   <input type="checkbox" id="5" name="5"> Back Before Curfew
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center content-header content-footer">
                        <div class="col-xs-12">
                            <p>By clicking "Submit" you are agreeing to our <a href="{{ url('/privacy') }}" target="_blank">privacy policy</a>.</p>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                    <div class="row content-header">
                    	<div class="col-md-3 col-sm-3">
                    		<a href="https://www.facebook.com/Aerosoft/" target="_blank"><img src="{{ asset('/assets/img/sponsors/aerosoft.png') }}" alt="Aerosoft" class="img-responsive"/></a>
                    	</div>
                    	<div class="col-md-3 col-sm-3">
                    		<a href="https://www.facebook.com/fs2crew/" target="_blank"><img src="{{ asset('/assets/img/sponsors/fs2crew.png') }}" alt="FS2Crew" class="img-responsive"/></a>
                    	</div>
                    	<div class="col-md-3 col-sm-3">
                    		<a href="https://www.facebook.com/orbxsystems/" target="_blank"><img src="{{ asset('/assets/img/sponsors/orbx.png') }}" alt="Orbx" class="img-responsive"/></a>
                    	</div>
                    	<div class="col-md-3 col-sm-3">
                    		<a href="https://www.facebook.com/vidandesign/" target="_blank"><img src="{{ asset('/assets/img/sponsors/vidandesign.png') }}" alt="Vidan Design" class="img-responsive" style="padding-top:10%;"/></a>
                    	</div>
                    </div>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">

                            <div class="info">
                                <h4 class="title">Morning Rush</h4>
                                <p class="desc">No sleep for the wicked! Arrive or depart Copenhagen between 06:00 & 08:00 Z or 08:00 & 10:00 Z.
                                <br><br>
                                <hr>
                                Fly between 06:00 & 08:00 Z for a chance to win a <b>FS2Crew product of your choosing</b>.
                                <br>
                                Fly between 08:00 & 10:00 Z for a chance to win a <b>Vidan Design scenery of your choosing</b>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">

                            <div class="info">
                                <h4 class="title">Domestic Madness</h4>
                                <p class="desc">Short on time? Complete a domestic two sector flight, originating in Copenhagen to any commercial airfield in Denmark & return to participate.
                                <hr>
                                Fly domestic for a chance to win a <b>€30 Aerosoft giftcard</b>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">

                            <div class="info">
                                <h4 class="title">Afternoon Turnaround</h4>
                                <p class="desc">Fly to Copenhagen & work in close co-operation with your ground crew to get your aircraft ready for departure - you've only got one hour between 10:00 & 14:00 Z.
                                <hr>
                                Complete a turnaround lasting of an hour or less between 10:00 & 14:00 Z for a chance to win a <b>Vidan Design scenery of your choosing</b>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-2 col-sm-2">&nbsp;</div>
                    <div class="col-md-4 col-sm-4">
                        <div class="service">

                            <div class="info">
                                <h4 class="title">6 Sector Challenge</h4>
                                <p class="desc">Got the whole day set aside? Complete at least 6 sectors during the event. Every sector has to either arrive or depart at Copenhagen.
                                <hr>
                                Complete 6 sectors for a chance to win the <b>Aerosoft Airbus A330</b>. You will receive the prize once the product releases.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">

                            <div class="info">
                                <h4 class="title">Back Before Curfew</h4>
                                <p class="desc">A long day of flying is slowly coming to an end, and it's time to head home once more. Touchdown in Copenhagen between 20:00 & 22:00 Z.
                                <hr>
                                Arrive into Copenhagen between 20:00 & 22:00 Z for a chance to win a <b>ORBX scenery of your choosing</b>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #about -->

        <!-- begin #quote -->
        <div id="virtualairlines" class="content bg-black-darker has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="../assets/img/bg/bg-apron.jpg" alt="Quote" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInLeft">
                <!-- begin row -->
            <div class="container">
                <h2 class="content-title">Virtual Airlines</h2>
                <p class="content-desc">
                    As a part of this eventful day, collaborations with various virtual airlines are in place. Are you a member of any them?
                    <br>
                    <br>
                    Check out these airlines for a fly-in notice or a group flight one the day. Some of them offer extra points for flying in, others have group flights during the day. 
                </p>
                    <div class="row content-header">
                        <div class="col-md-3 col-sm-3">
                            <a href="https://www.virtualnorwegian.net/" target="_blank"><img src="{{ asset('/assets/img/logo/vnas.png') }}" alt="Virtual Norwegian" class="center-block img-responsive"/></a>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <a href="https://www.bavirtual.co.uk/" target="_blank"><img src="{{ asset('/assets/img/logo/bav.png') }}" alt="BAVirtual" class="center-block img-responsive"/></a>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <a href="https://flyuk.aero/" target="_blank"><img src="{{ asset('/assets/img/logo/ukv.png') }}" alt="Fly UK" class="center-block img-responsive"/></a>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <a href="http://vryr.eu/" target="_blank"><img src="{{ asset('/assets/img/logo/vryr.png') }}" alt="vRYR" class="center-block img-responsive"/></a>
                        </div>
                    </div>
                    <div class="row content-header">
                        <div class="col-md-12 col-sm-12">
                            <a href="http://www.vezy.eu/" target="_blank"><img src="{{ asset('/assets/img/logo/vezy.png') }}" alt="vEZY" class="center-block img-responsive"/></a>
                        </div>
                    </div>
            </div>
            <!-- end container -->
        </div>
    </div>


        <!-- begin #briefing -->
        <div id="briefing" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <h2 class="content-title">Pilot Briefing</h2>
                <p class="content-desc">
                    Not quite sure how it all works in Denmark? We've got you covered!
                </p>
                <div class="row">
                    <div class="col-md-2">&nbsp;</div>
                    <div class="col-md-4">
                        <h4 class="title">Copenhagen, Kastrup</h4>
                        <p>
                            We hope that you'll want to be best prepared, when you visit us at Copenhagen. We've got a full, comprehensive briefing prepared that should cater to every type of flight possible. Read more by clicking the link below.
                        </p>
                        <h3>
                            <a href="http://vatsim-scandinavia.org/wp-content/uploads/2013/12/Briefing-Copenhagen-Kastrup-V2.pdf" target="_blank">Copenhagen, Kastrup</a>
                        </h3>
                    </div>
                    <div class="col-md-4">
                        <h4 class="title">Billund, Aarhus & Aalborg</h4>
                        <p>
                            While Copenhagen is the main focus of our event, we'd love to see you fly in and out of the country's regional airports. We've included short briefings with everything you need to know below.
                        </p>
                        <h3>
                            <a href="#bll" data-toggle="modal" data-target="#bll">Billund</a> | <a href="#aal" data-toggle="modal" data-target="#aar">Aarhus</a> | <a href="#aal" data-toggle="modal" data-target="#aal">Aalborg</a>
                        </h3>
                        <div id="bll" class="modal fade" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Billund Airport</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Billund Airport (EKBI) is the second largest airport in Denmark located just north of the city of Billund. If you're fancying some realistic cargo-flying, Billund should be your airport of choice.
                                        </p>
                                        <p>
                                            Take a look at the charts. A quick briefing is included on the second page giving you everything you need to know in an effective and "quick to familiarize" layout.
                                        </p>
                                        <h5>AIRSPACE</h5>
                                        <p>
                                            EKBI is located in a CTZ (Class D), which spans from GND to 1500’. This is
                                            controlled by EKBI_TWR when online. 1500'-FL120 is EKBI_APP (Class C).
                                            Copenhagen Control assumes all positions when all other is offline.
                                            Max speed is 250 knots below FL60.
                                        </p>
                                        <h5>AIRLINES</h5>
                                        <p>
                                            - Ryanair (several dest)<br>
                                            - Norwegian (Oslo, Barcelona, Alicante)<br>
                                            - Lufthansa (Frankfurt)<br>
                                            - KLM (Amsterdam)<br>
                                            - British Airways (London C+H, Bergen, Oslo, Stockholm, Düsseldorf,
                                            Manchester, Munich, Stavanger)<br>
                                            - JetTime (charter)<br>
                                            - Primera (charter)<br>
                                            - Scandinavian Airlines (Copenhagen, Oslo, Stockholm, Malaga, Bergen, Split, Nice)<br>
                                            - Many Others
                                        </p>
                                        <h5>FREQUENCIES</h5>
                                        <p>
                                            Billund Tower (EKBI_TWR): 119.000<br>
                                            Billund Approach (EKBI_APP): 127.575<br>

                                            Copenhagen Control (EKDK_V_CTR): 126.050 (if not online then 121.375)<br>
                                        </p>
                                        <h5>VFR</h5>
                                        <p>
                                            VFR traffic may enter via one of the five reporting points. For circuits expect those north of
                                            the airfield (points shown below.) Overflying of the city of Billund (South and
                                            southwest of aerodrome) is PROHIBITED. See the charts for VFR points.
                                        </p>
                                        <h5>APPROACH & LANDING</h5>
                                        <p>
                                            There are no published STARs in EKBI. Expect direct to GELBA or LOKSA for
                                            straight in approach to runway 09 or 27 respectively. Vectors may also be
                                            provided by appropiate unit.<br><br>Visual approaches are also available, but may only
                                            be executed north of the airfield.
                                        </p>
                                        <h5>AIRPORT LAYOUT</h5>
                                        <p>
                                            Billund airport has a commercial apron (NORTH) and cargo ramp (SOUTH) as
                                            well as general aviation (SOUTHEAST & SOUTHWEST)<br><br>
                                            NORTH AREA: Commercial Apron. Stands 25-40 are normally used for traffic.<br><br>
                                            Stand 25, 26, 38 & 40 are normally used for non-schengen flights. Expect taxi in
                                            via TWY F or TWY N, depending on runway configuration.
                                            <br><br>
                                            SOUTH AREA: Stands 0-10 are mainly used for cargo aircrafts. VFR can park either
                                            in the most western part of the south apron (VFR Flying club) or down at the
                                            hangar area in the southeastern part of the ramp area (By taxiway G)<br><br>
                                            When taxiing to runway 27 from the south area expect to cross the runway at TWY F,
                                            and then continue on TWY K.
                                        </p>
                                        <h5>TAKEOFF & DEPARTURES</h5>
                                        <p>
                                            Call for ATC clearence with the initial call. All SIDs has a stop altitude of FL60.<br><br>
                                            Runway 27: All SIDs require an immidiate right turn after departure to avoid the
                                            city of Billund. Intersection M may <b>NOT</b> be used for departure if you are flying a jet aircraft.<br><br>
                                            Runway 09: Intersection F, A, B and C may be used for departure.
                                            Expect NAPD 2 out of Billund.
                                        </p>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <div id="aar" class="modal fade" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Aarhus Airport</h4>
                                    </div>
                                    <div class="modal-body">
                                    <p>
                                        Aarhus Airport (EKAH) is the 4th largest airport in Denmark, located 40km
                                        northeast of the city of Aarhus. The airport consist of two parralel runways
                                        (28/10) as well as a ramp area with one terminal. Runway 28L/10R is the main
                                        runway and used for all commercial traffic.
                                    </p>
                                    <p>
                                        Take a look at the charts. A quick briefing is included on the second page giving you everything you need to know in an effective and "quick to familiarize" layout.
                                    </p>
                                    <p>
                                        Both runways are equipped with ILS. Runway 28L has CATII as well.<br><br>
                                        The airport is mainly served by SAS, Ryanair and British Airways. Other than that
                                        several charter airlines offer flights from Aarhus to southern destinations.
                                    </p>
                                    <h5>AIRSPACE</h5>
                                    <p>
                                        Aarhus is located in a CTZ with Tower prevailing when online.<br><br>Above is
                                        Aarhus TMA (Class D) controlled by Aarhus Approach when online. When local ATC is not online EKDK_CTR will assume control of all positions.
                                    </p>
                                    <h5>AIRLINES</h5>
                                    <p>
                                        -SAS (Copenhagen, Stockholm, Palma De Mallorca)<br>
                                        -British Airways (Stockholm Bromma, Oslo, Göteborg)<br>
                                        -Ryanair (Several destinations)<br>
                                        -Easyjet<br>
                                        -Thomas Cook Airlines Scandinavia (Charter)<br>
                                        -Primera (Charter)<br>
                                    </p>
                                    <h5>FREQUENCIES</h5>
                                    <p>

                                        Aarhus Tower (EKAH TWR): 118.525<br>
                                        Aarhus Approach (EKAH_APP): 119.275<br>

                                        Copenhagen Control (EKDK_D_CTR): 133.150 (if not online then 121.375)<br>

                                    </p>

                                    <h5>VFR TRAFFIC</h5>
                                    <p>
                                        Traffic may enter via different VFR reporting points. For circuits it's right traffic RWY
                                        10R and left traffic RWY 28L.
                                    </p>
                                    <h5>APPROACH & LANDING</h5>
                                    <p>
                                        There are no published STARs into Aarhus. Expect direct routings to ARDEK for
                                        ILS Runway 28L and GIPIN for ILS Runway 10R. Alternatively vectors
                                        may be used to final approach.<br><br>
                                        Max speed is 250 knots below FL100.<br><br>
                                        Visual approach is also available and should be executed south of the airfield.
                                    </p>
                                    <h5>RUNWAY & AIRPORT</h5>
                                    <p>
                                        The main runway (RWY 28L/10R) is used for all commercial traffic. Expect to vacate to the
                                        north for taxi to the apron.<br><br>
                                        The apron consists of four main stands. Stand 4 is normally used for flights out
                                        of schengen (Ryanair to Stansted).<br><br>All stands are selfmanouvering.<br><br>
                                        VFR parking is on the western end of the apron.
                                    </p>
                                    <h5>TAKEOFF AND DEPARTURES</h5>
                                    <p>
                                        There is no prefirential runway in EKAH. Opposite runway may be requested
                                        when conditions prevail.<br><br>
                                        RWY 10R: Intersection Y and W may be used for takeoff<br>
                                        RWY 28L: Intersection E and W may be used for takeoff<br><br>
                                        Prefered takeoff position should be stated on first contact with TWR.<br><br>
                                        Request ATC Clearence upon taxiing to the runway.<br><br>
                                        There are no published SIDs in EKAH, expect an omnidirectional departure.<br><br>
                                        All IFR aircraft must climb to a minimum of 700 feet before turning.<br><br>
                                        Expect NAPD 2 out of Aarhus.
                                    </p>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <div id="aal" class="modal fade" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Aalborg Airport</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Aalborg (EKYT) is the third largest airport in Denmark and located west of the
                                            city Aalborg co-located with a millitary base.<br><br>
                                            It is the main airport for all people in the northern part of Denmark and it's
                                            connected to Copenhagen, several major capitals in Europe and southern
                                            destinations.
                                        </p>
                                        <p>
                                            Take a look at the charts. A quick briefing is included on the second page giving you everything you need to know in an effective and "quick to familiarize" layout.
                                        </p>


                                        <h5>AIRLINES</h5>
                                        <p>
                                            Aalborg is mainly served by charter destinations. Companies such as Primera,
                                            Norwegian Air Shuttle and Thomas Cook Airlines Scandinavia operate a lot of charter
                                            flights, especially in the summer.<br><br>
                                            All year round airlines, such as SAS, Lufthansa, KLM, Norwegian Air
                                            Shuttle and British Airways are also operating from Aalborg.<br><br>
                                            The airport has two parralel main runways, one (RWY 08L/26R) is used for all
                                            commercial traffic, where the smaller one (RWY 08R/26L) is mainly used for VFR
                                            traffic.
                                        </p>

                                        <h5>FREQUENCIES</h5>
                                        <p>
                                            Aalborg ATIS (EKYT_ATIS): 120.475<br>
                                            Aalborg Tower (EKYT_TWR): 118.300<br>
                                            Aalborg Approach (EKYT_APP) 123.975<br>
                                            Copenhagen Control (EKDK_V_CTR): 126.050 (if not online then 121.375)<br><br>
                                        </p>
                                        <h5>APPROACH & LANDING</h5>
                                        <p>
                                            Aalborg is located in Class D airspace with class C airspace above.<br><br>
                                            Max speed is 250 below FL100.<br><br>
                                            Expect vectors, or direct points on final, by EKDK_CTR or
                                            EKYT_APP if online.<br><br>
                                            Both runway are equipped with ILS, RWY 26L includes
                                            CATIII.<br><br>
                                            No STARs are available in Aalborg. EKDK_CTR may clear you to direct AAL, GL,
                                            BAKIT or GIPUG for an ILS to the active runway. Alternatively radar vectors will be
                                            provided.<br><br>
                                            Visual approaches are also available, in case of visual approach IFR traffic must
                                            stay clear of the city of Aalborg.<br><br>
                                        </p>
                                        <h5>VFR</h5>
                                        <p>
                                            VFR traffic is to enter via one of the reporting points. Check the airport charts.
                                        </p>
                                        <h5>DEPARTURE</h5>
                                        <p>
                                            Request startup and pushback to appropiate ATC unit, as in all danish airports
                                            (except EKBI and EKCH), ATC clearence must be requested on taxi, not prior to
                                            startup.<br><br>
                                            There are no SIDs in EKYT. All departures are omnidirectional departures,
                                            minimum climb to 600’ is required before turning.<br><br>
                                            RWY 26R: All IFR traffic must climb to 2000 before turning.<br>
                                            RWY 08R: All IFR traffic must climb straight ahead until reaching 2 DME from AAL.<br>
                                        </p>
                                        <h5>AIRPORT LAYOUT</h5>
                                        <p>
                                            All aircrafts are expected to vacate the runway to the south, due to military
                                            activity on the north part of the aerodrome.<br><br>
                                            Taxi via RWY 26L/08R and TWY C to
                                            the apron area.<br><br>
                                            Caution TWY B is a narrow taxiways, and CANNOT be used by B737-series or
                                            larger.
                                        </p>

                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>
                    <div class="col-md-2">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h2 class="content-title" style="padding-top: 50px;">GSX Configuration Files</h2>
                        <p class="text-center">For Copenhagen especially, we are very proud to present our very own GSX configuration file. Our configuration is complete with correct, true to life pushbacks, SODE jetways & correct loading equipment placement.</p>
                        <p class="text-center">The pushback functionality of this file is especially crucial to the hourly rate of departures for Copenhagen. As such we strongly recommend every GSX user planning to visit Copenhagen to download & install it.</p>
                        <h3 class="text-center">
                            <a href="http://vatsim-scandinavia.org/wp-content/uploads/2019/09/GSX-Configuration-for-EKCH-Level-2.zip">Download our Copenhagen GSX configuration here</a>
                        </h3>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <!-- end container -->
        </div>
        <!-- end #briefing -->
<div id="charts" class="content bg-black-darker has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="../assets/img/bg/wing.jpg" alt="Quote" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInLeft">
                <!-- begin row -->
            <div class="container">
                <h2 class="content-title">Charts</h2>
                <p class="content-desc">
                    With kind permission from <a href="http://www.naviair.dk/" target="_blank">NAVIAIR</a>, we are able to present you with charts for most airports in Denmark.
                    <br>
                    <br>
                    Have a look below - being well prepared has never been easier.
                </p>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 text-center">
                            <h3>
                                <a href="{{ asset('charts/ekch.pdf') }}" target="_blank" alt="Charts for Copenhagen, Kastrup Airport">Copenhagen, Kastrup</a>
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 text-center">
                            <h4>
                                <a href="{{ asset('charts/ekbi.pdf') }}" target="_blank" alt="Charts for Billund Airport">Billund</a> | <a href="{{ asset('charts/ekah.pdf') }}" target="_blank" alt="Charts for Aarhus Airport">Aarhus</a> | <a href="{{ asset('charts/ekyt.pdf') }}" target="_blank" alt="Charts for Aalborg Airport">Aalborg</a>
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 text-center">
                            <h5>
                                <a href="{{ asset('charts/ekka.pdf') }}" target="_blank" alt="Charts for Karup Airport">Karup</a> | <a href="{{ asset('charts/ekrn.pdf') }}" target="_blank" alt="Charts for Rønne Airport">Rønne</a> | <a href="{{ asset('charts/eksb.pdf') }}" target="_blank" alt="Charts for Sønderborg Airport">Sønderborg</a>
                            </h5>
                        </div>
                    </div>
            </div>
            <!-- end container -->
        </div>
    </div>
        <div id="livestream" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <h2 class="content-title">Twitch Feed</h2>
                <p class="content-desc">
                    As part of our continuous strive to improve the "Copenhagen Live" concept, we are planning to have a Twitch Feed up & running showcasing the controller's scopes, workflows and much, much more.
                    <br>
                    <br>
                    If you want to see the inner workings of "the other side of the scope", feel free to tune in.
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-12 col-sm-12 text-center">
                        <div id="twitch-embed"></div>
                    </div>
                        
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

    @endsection
