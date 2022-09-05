{{--Navbar--}}
@extends('layouts.usermaster')

<!-- Hotjar Tracking Code for https://prenotazioni.negombo.it/ -->

@section('section')
    {{-- Features tried   --}}
    {{--Welcome Video--}}
    <div class="container-fluid">
        <div class="row">
            <div class="welcome">
                <h2 class="heading_qt1">{{ __('Welcome to Negombo') }}  </h2>
                <a href="#book">book now</i></a>
            </div>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/GBGAhdeHrFA?&autoplay=1&mute=1"
                        title="YouTube video player">
                </iframe>
            </div>
        </div>
        <div class="container">
        <!-- base map	 -->
        <div class="row">
            <div class="col-sm-12">
                <h2 id="book" class="heading_qt1">{{ __('Book your favorite place on the map') }}</h2>
                <div style="text-align: center;">
                    <img id="baseMapimgStyle" src="{{ asset('images/maps/mappazone.jpg') }}" alt="Workplace"
                         usemap="#workmap" height="550px" width="900px;">
                    <map name="workmap">
                        @php
                            $ind=1;
                        @endphp
                        @foreach ($maparray['map_coods'] as $map_cood)
                            <area id="{{ 'select_map_style'.$ind }}" onmouseout="this.blur();"
                                  onmouseover="this.focus();" target="" alt="{{ $map_cood->map_name }}"
                                  coords="{{ $map_cood->coordsLS }}" title=""
                                  href="{{ route('user.viewsmallplace', $map_cood->map_name) }}" shape="poly">
                            {{-- dynamic coordinate selection using javascript --}}
                            <script>
                                if (window.screen.width < 768)
                                    document.getElementById("{{ 'select_map_style'.$ind }}").coords = "{{ $map_cood->coordsSS }}";
                            </script>
                            @php
                                $ind=$ind+1;
                            @endphp
                        @endforeach
                    </map>
                </div>
            </div>
        </div>
        </div>
        <!-- base map end	 -->
        <div class="row">
            <div class="col-sm">
            <h2 class="heading_qt1"><b>{{ __('Recommended Places') }}</b></h2>
            @include('layouts/recommendedplaces')
            </div>
        </div>
    </div>
    <!-- Hotjar Tracking Code for https://prenotazioni.negombo.it/ -->
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {hjid: 3137655, hjsv: 6};
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>

@endsection
<script src="js/hojar.js"></script>
<script src="C:\xampp\htdocs\negombo\js\hojar.js"></script>


