@extends('frontend.layout.front-end-app')

@section('content')
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Application List
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('home') }}">Home </a> <span
                            class="lnr lnr-arrow-right"></span> <a href=""> Application List</a></p>
                </div>
            </div>
        </div>
    </section>
    <section style="padding:150px 0">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-2">
                    <div class="card">
                        <div class="card-body shadow">
                            <table class="table">
                                <tr>
                                    <th>Sl No</th>
                                    <th>Name</th>
                                    <th>Job Title</th>
                                    <th>Cover Letter</th>
                                    <th>Status</th>
                                </tr>
                                @foreach ($joblist as $list)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ Auth::user()->name }}</td>
                                        <td>{{ $list->job->title }}</td>
                                        <td>{!! $list->cover_letter !!}</td>
                                        <td><span class="badge badge-info">{{ $list->status ==0 ?'Pending':"Approve" }}</span></td>
                                    </tr>
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
