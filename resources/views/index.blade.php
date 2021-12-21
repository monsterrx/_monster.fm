@extends('layouts.master')

@section('content')
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="{{ url('/') }}" class="brand-logo">
                <img src="{{ asset('img/aci_logo_new.png') }}" alt="ACI_Logo">
            </a>

            <ul class="right hide-on-med-and-down">
                <li>
                    <a href="https://www.facebook.com/ACI931" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="https://ph.linkedin.com/company/audiovisual-communicators-inc-" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li class="center">
                    <img src="{{ asset('img/aci_logo.png') }}" alt="ACI_Logo">
                </li>
                <li class="black-text center"><p style="font-weight: 300;">Audiovisual Communicators Inc.</p></li>
                <li>
                    <a href="https://www.facebook.com/ACI931" target="_blank">
                        <i class="fab fa-facebook"></i>&nbsp;&nbsp;Facebook
                    </a>
                </li>
                <li>
                    <a href="https://ph.linkedin.com/company/audiovisual-communicators-inc-" target="_blank">
                        <i class="fab fa-linkedin"></i>&nbsp;&nbsp;LinkedIn
                    </a>
                </li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>

    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    {{--<h5 class="header col s12 light black">
                        <a href="http://rx931.com" target="_blank">
                            Monster RX93.1 Manila
                        </a>
                    </h5>--}}
                </div>
            </div>
        </div>
        <div class="parallax">
            <img src="{{ asset('img/headers/RX93.1-2020.jpg') }}" alt="RX_Manila">
        </div>
    </div>


    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4 center">
                    <div class="icon-block">
                        <div class="center">
                            <a href="http://rx931.com" target="_blank">
                                <img src="{{ asset('img/rx931.png') }}" alt="rx931_logo" class="grow">
                            </a>
                        </div>
                        <h5 class="center">Manila</h5>

                        <p class="left-align light">Monster RX93.1 is MANILA’S HOTTEST Pop Station!
                            Renowned for the best programs and the best jocks, RX is the leading upscale-market CHR (Contemporary Hits Radio) station based in Metro Manila with the awards and surveys to bolster its reputation!</p>
                    </div>
                </div>

                <div class="col s12 m4 center">
                    <div class="icon-block">
                        <div class="center">
                            <a href="http://monstercebu.com" target="_blank">
                                <img src="{{ asset('img/bt1059.png') }}" alt="bt1059_logo" class="grow">
                            </a>
                        </div>
                        <h5 class="center">Cebu</h5>

                        <p class="left-align light">Vibrant and cosmopolitan, Monster Radio makes its move on this discriminating market with what’s now Cebu’s very own Monster Radio BT105.9.
                            We’re bringing excellence in music programming, bright on-air personalities and fresh ideas the same elements that made Monster Radio the best station in Manila.</p>
                    </div>
                </div>

                <div class="col s12 m4 center">
                    <div class="icon-block">
                        <div class="center">
                            <a href="http://monsterdavao.com" target="_blank">
                                <img src="{{ asset('img/bt995.png') }}" alt="bt995_logo" class="grow">
                            </a>
                        </div>
                        <h5 class="center">Davao</h5>

                        <p class="left-align light">Monster Radio BT99.5 Davao had its first ever broadcast in the year 2002. Since then, our little station has grown up and has become the premiere hit radio station in Davao City.
                            Monster Radio Davao is located at The Peak Top Level Gmall of Davao JP Laurel Avenue Bajada, Davao City.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    {{--<h5 class="header col s12 light black">
                        <a href="http://monstercebu.com" target="_blank">
                            Monster BT105.9 Cebu
                        </a>
                    </h5>--}}
                </div>
            </div>
        </div>
        <div class="parallax">
            <img src="{{ asset('img/headers/BT105.9-2020.jpg') }}" alt="RX_Cebu">
        </div>
    </div>

    <div class="container">
        <div class="section">

            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">keyboard_voice</i></h2>
                        <h5 class="center">Broadcast</h5>

                        <p class="light">The Monster is popular for playing the hits, but it’s also the leading station when it comes to overall broadcasting excellence. With brilliant shows that excite the listeners’ imagination, Monster RX93.1 has been acclaimed as the Best FM Station a record ELEVEN TIMES (by the industry’s KBP Golden Dove Awards).</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">directions_walk</i></h2>
                        <h5 class="center">Activities & Services</h5>

                        <p class="light">Monster parties and events easily become the talk of the town. Through Monster Van campus tours, school activities, premieres of the biggest movies, and concerts by top performers, Monster RX93.1 builds a strong listener community. RX also boasts of a large online following through its website (www.rx931.com) and strong presence in popular social network sites Facebook, Twitter, Snapchat, and Instagram.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">people</i></h2>
                        <h5 class="center">Target Audience</h5>

                        <p class="light">Monster Radio plays the hottest hits, so it naturally caters to all listeners who are youthful in age and/or spirit! Specifically, The Monster appeals to audiences 15 to 35 years of age, belonging to the middle and upper income brackets (ABC). They would include high school and college students and young professionals.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    {{--<h5 class="header col s12 light black">
                        <a href="http://monsterdavao.com" target="_blank">
                            Monster BT99.5 Davao
                        </a>
                    </h5>--}}
                </div>
            </div>
        </div>
        <div class="parallax">
            <img src="{{ asset('img/headers/BT99.5-2020.jpg') }}" alt="RX_Davao">
        </div>
    </div>

    <footer class="page-footer white">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="black-text">Audiovisual Communicators Inc.</h5>
                    <p class="grey-text text-darken-4">
                        Audiovisual Communicators Inc., or ACI, owns and operates Monster Radio in the Philippines. The flagship station is Monster RX93.1 - Manila, with provincial stations in Cebu (Monster Radio BT105.9), Davao (Monster Radio 99.5), Zamboanga (Monster RX93.1), and General Santos (DXEZ 88.7 FM) <a href="#profile" class="modal-trigger">Read More ...</a>
                    </p>


                </div>
                <div class="col l3 s6">
                    <h5 class="black-text">Contact Us</h5>
                    <ul class="black-text">
                        <li>
                            Email: Info@rx931.com
                        </li>
                        <li>
                            Phone No: 633-5414 to 16
                        </li>
                        <li>
                            Radio No: 631-9393
                        </li>
                        <li>
                            TeleFax: 633-5417
                        </li>
                    </ul>
                </div>
                <div class="col l3 s6">
                    <h5 class="black-text">Connect</h5>
                    <ul>
                        <li>
                            <a class="black-text" href="https://facebook.com/ACI931" target="_blank">
                                <i class="fab fa-facebook"></i>&nbsp;&nbsp;Facebook
                            </a>
                        </li>
                        <li>
                            <a class="black-text" href="https://ph.linkedin.com/company/audiovisual-communicators-inc-" target="_blank">
                                <i class="fab fa-linkedin"></i>&nbsp;&nbsp;LinkedIn
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container black-text">
                Made by <a class="brown-text text-darken-4" href="http://materializecss.com" target="_blank">Materialize</a>
                <div class="black-text">
                    &copy; Audiovisual Communicators Inc. All Rights Reserved 2019
                </div>
            </div>
        </div>
    </footer>

    <div id="profile" class="modal modal-fixed-footer">
        <div class="modal-content">
            <h5>Audiovisual Communicators Inc.</h5>
            <p>Audiovisual Communicators Incorporated (ACI) is a Philippine broadcast media corporation that presently owns and operates five FM radio stations.</p>
            <p>The flagship station is DWRX (93.1 MHz), based in Metro Manila.  It broadcasts under the name Monster RX93.1 (tagged as “Manila’s Hottest”).   Monster RX93.1 is one of the top-rated CHR (contemporary hit radio) stations in Manila.  It is generally regarded as the most acclaimed and awarded pop station in the Philippines.</p>
            <p>ACI operates several provincial stations that continue its thrust of entertaining audiences with the finest youth-oriented programming.  They are DYBT (Monster Radio BT105.9 in Cebu City), DXBT (Monster Radio BT99.5 in Davao City), DXEZ (Monster Radio EZ88.7 in General Santos City), and DXRX (Monster RX93.1 in Zamboanga City).</p>

            <p>The company’s top officers are:</p>
            <div class="row">
                <div class="col m6">
                    <p>Luis Mari V. Barreiro</p>
                    <p>Menardo G. Jimenez Jr.</p>
                    <p>Antonio V. Barreiro, Jr.</p>
                    <p>Rafael V. Barreiro</p>
                </div>
                <div class="col m6">
                    <p>President</p>
                    <p>Chairman</p>
                    <p>Vice-President for Business Development</p>
                    <p>Vice-President for Operations and Programming</p>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#" class="modal-close waves-effect btn-flat">Dismiss</a>
        </div>
    </div>
@endsection