@extends('faculty.dashboard-menu')
@section('title')- Profile @endsection
@section('current') Profile @endsection
@section('current-header') Profile @endsection
@section('profile-active') active @endsection

@section('dashboard-content')

        <div class="inner-box my-resume">
            <div class="author-resume">
                <div class="thumb">
                    <img height="128" width="128" src="{{$profile->picture}}" alt="">
                </div>
                <div class="author-info">
                    <h3>{{$user->name}}</h3>
                    <!--<p class="sub-title">UI/UX Designer</p>-->
                    <p><span class="address"><i class="ti-location-pin"></i> {{$profile->street_address}}, {{$profile->city}}</span> </p>
                    <p><span class="address"><i class="ti-mobile"></i> {{$profile->contact_number}}</span></p>
                    <!--
                    <div class="social-link">
                        <a class="twitter" target="_blank" data-original-title="twitter" href="#"
                           data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a>
                        <a class="facebook" target="_blank" data-original-title="facebook" href="#"
                           data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a>
                        <a class="google" target="_blank" data-original-title="google-plus" href="#"
                           data-toggle="tooltip" data-placement="top"><i class="fa fa-google"></i></a>
                        <a class="linkedin" target="_blank" data-original-title="linkedin" href="#"
                           data-toggle="tooltip" data-placement="top"><i class="fa fa-linkedin"></i></a>
                    </div>
                    -->
                </div>
            </div>
            <div class="about-me item">
                <h3>About Me <i class="ti-pencil"></i></h3>
                {!! $profile->description !!}
            </div>
            <!--
            <div class="work-experence item">
                <h3>Work Experience <i class="ti-pencil"></i></h3>
                <h4>UI/UX Designer</h4>
                <h5>Bannana INC.</h5>
                <span class="date">Fab 2017-Present(5year)</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero vero, dolores, officia
                    quibusdam architecto sapiente eos voluptas odit ab veniam porro quae possimus itaque,
                    quas! Tempora sequi nobis, atque incidunt!</p>
                <p><a href="#">4 Projects</a></p>
                <br>
                <h4>UI Designer</h4>
                <h5>Whale Creative</h5>
                <span class="date">Fab 2017-Present(2year)</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero vero, dolores, officia
                    quibusdam architecto sapiente eos voluptas odit ab veniam porro quae possimus itaque,
                    quas! Tempora sequi nobis, atque incidunt!</p>
                <p><a href="#">4 Projects</a></p>
            </div>
            <div class="education item">
                <h3>Education <i class="ti-pencil"></i></h3>
                <h4>Massachusetts Institute Of Technology</h4>
                <p>Bachelor of Computer Science</p>
                <span class="date">2010-2014</span>
                <br>
                <h4>Massachusetts Institute Of Technology</h4>
                <p>Bachelor of Computer Science</p>
                <span class="date">2010-2014</span>
            </div>
            -->
        </div>
@endsection