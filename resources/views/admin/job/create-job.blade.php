@extends('admin.app')
@section('title')
    {{ 'Post Job' }}
@endsection
@section('content')
    <section style="padding-top:50px">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Create A Job Post</h5>

                            <form class="row g-3">
                                <div class="col-md-12 mb-2">
                                    <label for="title" class="form-label">Job Title</label>
                                    <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                                        id="title" placeholder="Job Title">
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="summernote" class="form-label">Job Description</label>
                                    <textarea name="description" class="form-control" id="summernote">{{ old('description') }}</textarea>

                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="company_name" class="form-label">Company Name</label>
                                    <input type="text" id="company_name" name="company_name"
                                        value="{{ old('company_name') }}" id="conpany_name" class="form-control"
                                        placeholder="Company Name">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="location" class="form-label">Select Location</label>
                                    <select id="location" id="location" name="location" class="form-select">
                                        <option selected="" disabled>Choose Your Location</option>
                                        <option>Dhaka</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="sallery" class="form-label">Sallery</label>
                                    <input type="text" class="form-control" value="{{ old('sallery') }}" name="sallery"
                                        id="sallery" placeholder="Sallery">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="job_type" class="form-label">Select Job Type</label>
                                    <select id="job_type" id="job_type" name="job_type" class="form-select">
                                        <option selected="" disabled>Choose Job Type</option>
                                        <option value="full_time">Full Time</option>
                                        <option value="part_time">Part Time</option>
                                    </select>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
