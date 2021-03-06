@extends('layouts.master-dashboard')

@section('head')
    <title>Dashboard</title>
    <link rel="icon" href="{{ asset('images/Luz-Logo_2.png') }}" type="image/icon type">

    <!-- Retrieve Mapbox library from CDN -->    
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js' defer></script>
                
    <!-- Load scripts -->
    <script src="{{ asset('js/map.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
        
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" defer></script>
    <script src="{{ asset('js/charts.js') }}" defer></script>
    
    <!-- Load styles -->
    <style>
        .map-container {
            margin-bottom: 2em;
        }
        #map {
            margin-left: auto;
            margin-right: auto;
            height: 500px;
            width: 80vw;
            border: 1px solid #14976B;
            border-radius: 3px;
        }
    </style>        
    <link rel="stylesheet" href="{{ asset('css/dashboard/map.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/home.css') }}">
@endsection

@section('body')
    <!-- Map container -->
    <div class="map-container">

        <div id="map"></div>

        <div class="map-overlay top" style="stroke: black">
            <div class="map-overlay-inner">
                <p><i>You are currently hovering...</i> </p>
                <h3 id="ov-province">Province</h3>
                <h4 id="ov-municity">Municity</h4>
                <div id="ov-gradient"></div>
                <div class="ov-essinfo">
                    <h4 id="donodrive">No. of donation drives: <span id="ov-donodrive">0</span></h4>
                    <h4 id="donoamount">Total donations: <span id="ov-donoamount">0</span></h4>
                    <h4 id="affected">No. of affected people: <span id="ov-affected">0</span></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-container">
        <!-- Statistics -->
        <div class="statistics">
            <h2>Statistics</h2>
            <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <div class="column uk-card uk-border-rounded" style="background-color: white; color: black;">
                        <div class="uk-card-header" style="text-align: center;">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Monetary Donation Graph</h3>
                                    <p class="uk-text-meta uk-margin-remove-top">Typhoon Ulysses, 2020</p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body chart-container">
                            <canvas id="donationChart"></canvas>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="column uk-card uk-border-rounded" style="background-color: white; color: black;">
                        <div class="uk-card-header" style="text-align: center;">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Affected People Graph</h3>
                                    <p class="uk-text-meta uk-margin-remove-top">Typhoon Ulysses, 2020</p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body chart-container">
                            <canvas id="affectedPeopleChart"></canvas>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="column uk-card uk-border-rounded" style="background-color: white; color: black;">
                        <div class="uk-card-header" style="text-align: center;">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Monetary Standby Funds</h3>
                                    <p class="uk-text-meta uk-margin-remove-top">Typhoon Ulysses, 2020</p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body chart-container">
                            <canvas id="recoveriesChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
@endsection