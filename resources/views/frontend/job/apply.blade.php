@extends('frontend.layout.front-end-app')

@section('content')
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Applay Mow
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('home') }}">Home </a> <span
                            class="lnr lnr-arrow-right"></span> <a href=""> Applay</a></p>
                </div>
            </div>
        </div>
    </section>
    <section style="padding: 150px 0">
        <div class="container">
            <h2 class="text-center mb-5">Applay Now</h2>
            <div class="row">
                <div class="col-md-8 offset-2">
                    <div class="card">
                        <div class="card-body shadow">
                            @php
                                $disabled = '';
                                foreach ($app as $key => $a) {
                                    if ($a->job_id == $job->id) {
                                        $disabled='disabled';
                                        break;
                                    }
                                }
                            @endphp
                            
                            
                            <form class="row g-3 needs-validation" method="POST"
                                action="{{ route('applyJob', [$job->id]) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-12 mb-2">
                                    <label for="yourName" class="form-label">Your Name</label>
                                    <input type="text" readonly value="{{ Auth::user()->name }}" name="name"
                                        class="form-control" id="yourName">
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="summernote" class="form-label">Cover Letter</label>
                                    <textarea name="cover_letter" class="form-control" id="summernote">{{ old('description') }}</textarea>
                                    @error('cover_letter')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="resume" class="form-label">Resume</label>
                                    <input type="file" class="form-control" name="resume" id="resume">
                                    @error('resume')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" {{ $disabled }} class="btn btn-success">Applay Here</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('style')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endpush
