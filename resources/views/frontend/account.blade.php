@extends('frontend.layout.front-end-app')
@section('content')
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        User Information
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('home') }}">Home </a> <span
                            class="lnr lnr-arrow-right"></span> <a href=""> Profile</a></p>
                </div>
            </div>
        </div>
    </section>
    <section style="padding: 150px 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body shadaow">
                            <img src="{{ asset('assets/img/card.jpg') }}" class="img-thumbnail" alt="Profile-picture">
                            <div class="content mt-3">
                                <h2 class="text-info mb-2">{{ Auth::user()->name }}</h2>
                                <p>{{ ucwords(Auth::user()->is_admin) }}</p>
                                <div class="user-menu">
                                    <ul class="text-black">
                                        <li><a href="">Setting</a></li>
                                        <li><a href="{{ route('applyList') }}">Show Application</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <h2 class="">Personal Information</h2>
                    <div class="card mt-3">
                        <div class="card-body shadow">
                            <table class="table">
                                <tr>
                                    <td>Name :</td>
                                    <td>{{ Auth::user()->name }}</td>
                                </tr>
                                <tr>
                                    <td>Email :</td>
                                    <td>{{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <td>User Type :</td>
                                    <td>{{ Auth::user()->is_admin == 'job_seeker' ? 'Job Seeker' : 'Employer' }}</td>
                                </tr>
                                <tr>
                                    <td><a href="" class="btn btn-sm btn-info">Update User</a></td>
                                    <td><a href="" class="btn btn-sm btn-danger">Delete User</a></td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
