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

                            <form class="row g-3" method="post" action="{{ route('admin.createJob', [Auth::user()->id]) }}">
                                @csrf
                                <div class="col-md-12 mb-2">
                                    <label for="title" class="form-label">Job Title</label>
                                    <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                                        id="title" placeholder="Job Title">
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="summernote" class="form-label">Job Description</label>
                                    <textarea name="description" class="form-control" id="summernote">{{ old('description') }}</textarea>
                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="company_name" class="form-label">Company Name</label>
                                    <input type="text" id="company_name" name="company_name"
                                        value="{{ old('company_name') }}" id="conpany_name" class="form-control"
                                        placeholder="Company Name">
                                    @error('company_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="location" class="form-label">Select Location</label>
                                    <select id="location" id="location" name="location" class="form-select">
                                        <option selected="" disabled>Choose Your Location</option>
                                        <option value="dhaka">Dhaka</option>
                                        <option value="barishal">Barishal</option>
                                        <option value="chattogram">Chattogram</option>
                                        <option value="khulna">Khulna</option>
                                        <option value="rajshahi">Rajshahi</option>
                                        <option value="rangpur">Rangpur</option>
                                        <option value="mymensingh">Mymensingh</option>
                                        <option value="sylhet">Sylhet</option>
                                    </select>
                                    @error('location')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="category_name" class="form-label">Category</label>
                                    <select id="category_name" id="location" name="category_name" class="form-select">
                                        <option selected="" disabled>Choose Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                        

                                    </select>
                                    @error('location')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="sallery" class="form-label">Sallery</label>
                                    <input type="text" class="form-control" value="{{ old('sallery') }}" name="sallery"
                                        id="sallery" placeholder="Sallery">
                                    @error('sallery')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="job_type" class="form-label">Select Job Type</label>
                                    <select id="job_type" id="job_type" name="job_type" class="form-select">
                                        <option selected="" disabled>Choose Job Type</option>
                                        <option value="full_time">Full Time</option>
                                        <option value="part_time">Part Time</option>
                                    </select>
                                    @error('job_type')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="div col-md-12 mb-2">
                                     <label for="application_deadline" class="form-label">Application Deadline</label>
                                    <input type="date" name="application_deadline" id="application_deadline" class="form-control">
                                     @error('application_deadline')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Create Job</button>
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
