@extends('layouts.master')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/orgprofile.css') }}">
    <title>Organization Profile</title>
@endsection

@section('body')
<section class="sec1">
    <div class="orgcolor" style="background-color: #b47024;"></div> 
    <div class="heading"> 
        <button class="button-back" onclick="window.location.href='{{ route('partner-orgs') }}'">
            <i class="fa fa-arrow-left" style="font-size:15 px;"></i> Back 
        </button>
        

        <h1>JCI Cebu Sinulog</h1>
        <p>The Junior Chamber International (JCI) is a global organization of young active citizens, purposely aimed to create positive change in local communities.
        Our local Organization (LO), JCI Philippines Cebu Sinulog, Inc., is a local organization in the country committed to 
        realizing this aim through various humanitarian projects.
        <br><br>
        <b>JCI Declaration of Principles:</b> We believe that faith in God gives meaning and purpose to human life, that brotherhood
        of man transcends the sovereignty of nations, that economic justice can be best won by free men through free enterprise,
        that government should be of laws rather than of men, that Earth's greatest treasure lies in human personality,
        and that service to humanity is the best work of life. -C. william Brownfield, 1946</p>

        <button class="button-donatenow" onclick="window.location.href='{{ route('donation-form1-jci-cebu-sinulog') }}'">Donate Now!</button>
        
    </div><!--heading-->

    <div class="containerIMG">
       <img src="{{asset('images/jci-cebu-header.jpg')}}"/>
    </div> 

    <div class="overlay1">
        <div class="logo">
            <img src="{{ asset('images/jci-logo-nobg.png') }}" />
        </div>
    </div> 
</section>


<section class="sec2">
    <h1>What We Do</h1>

        <div class="container container-left" style="border-bottom: 4px solid #b47024;">
            <div class="elipse">
                <i class="fa fa-archive"  style="font-size:40px; color: #b47024;"></i>
            </div>
            
            <h2>Project for <br>Sustainable Solutions</h2>
            <p><br>Make future sustainable projects that adapts to an ever changing society.</p>
        
        </div>

        <div class="container container-mid" style="border-bottom: 4px solid #b47024;"> <div class="elipse">
                <i class="fa fa-users" style="font-size:40px; color: #b47024;"></i>
            </div>
            
            <h2>Empower <br> Young People</h2>
            <p><br>Encourage more young people in participating towards JCI's future advocacy and enhance leadership skills, creating better leaders.</p>
        
        </div>

        <div class="container container-right" style="border-bottom: 4px solid #b47024;"> 
            <div class="elipse">  
                <i class="fa fa-building" style="font-size:40px; color: #b47024;"></i>
            </div>
            
            <h2>Create <br>Opportunities</h2>
            <p><br>Make future projects that create opportunities for a lot people.</p>
        
        </div>

        
</section>

<section class="sec3">

<h1>Stories</h1>
    <div class="containerStories container-left">
        <div class="storyPic">
            <img src="{{asset('images/estate-planning.jpg')}}"/>
        </div>
        <h2>Estate Planning 101</h2>
        <div class="StoriesLine" style="background: #b47024;"></div>
        <p>Estate Planning is not only for the wealthy — everybody can benefit from ensuring their assets 
            and finances are properly taken care of after their death. It’s more than just making a will, 
            although that’s certainly an important part of it. <br><br> It provides a way for you to ensure that 
            the people you care are provided for during the difficult time that follows losing a loved one.
        </p>
        <button class="button button-readmore" style="border: 1px solid #b47024; color: #b47024;" onclick="window.location.href='{{ route('index') }}'">Read More...</button>
    </div>
        
    <div class="containerStories container-mid">
        <div class="storyPic">
            <img src="{{asset('images/zero-waste-swap.jpg')}}"/>
        </div>
        <h2>Zero Waste Swap</h2>
        <div class="StoriesLine" style="background: #b47024;"></div>
        <p>JCI Cebu Sinulog in partnership with Bubble.Ph will be joining the Pop District Bazaar Holiday - The Most Wonderful Time of the year this December 10 and 11, 2018.
        <br><br>Bring your used shampoo bottles and get awesome discounts on every Bubble.Ph shampoo bar purchase!
        </p>
        <button class="button button-readmore" style="border: 1px solid #b47024; color: #b47024;" onclick="window.location.href='{{ route('index') }}'">Read More...</button>
    </div>

    <div class="containerStories container-right">
    <div class="storyPic">
            <img src="{{asset('images/give-it-a-shot.jpg')}}"/>
        </div>
        <h2>Give it a Shot 2</h2>
        <div class="StoriesLine" style="background: #b47024;"></div>
        <p>This project is an indoor target shooting activity for a cause. For those who have been asking and messaging us, we are proud to announce that Give It A Shot 2 will now be happening on January 11, 2020!
            <br><br>Proceeds will be used to fund the future projects of JCI Cebu Sinulog.
        </p>
        <button class="button button-readmore" style="border: 1px solid #b47024; color: #b47024;" onclick="window.location.href='{{ route('index') }}'">Read More...</button>
    </div>

</section>

@endsection