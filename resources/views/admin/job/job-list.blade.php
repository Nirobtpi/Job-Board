@extends('admin.app')
@section('title')
    {{ 'Job List' }}
@endsection
@section('content')
    <div class="container" style="padding-top:50px">
        <div class="row">
            <div class="com-md-12">
                <div class="row">
                    <div class="com-md-4">
                        @if (Session('success'))
                            <div class="alert alert-success">
                                {{ Session('success') }}
                            </div>
                        @endif
                        @if (Session('error'))
                            <div class="alert alert-danger">
                                {{ Session('error') }}
                            </div>
                        @endif
                    </div>
                </div>
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                            <th scope="col">Sl No</th>
                            <th scope="col">Job Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Location</th>
                            <th scope="col">salary</th>
                            <th scope="col">Job Type</th>
                            <th scope="col">Deadline</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jobs as $job)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $job->title }}</td>
                            <td>{!! Str::limit($job->description, 10, '...') !!}</td>
                            <td>{{ $job->company_name }}</td>
                            <td>{{ $job->location }}</td>
                            <td>{{ $job->salary }}</td>
                            <td>{{$job->job_type = ($job->job_type == "full_time") ? 'Full Time' : 'Part Time'}}</td>
                            <td>{{ $job->application_deadline }}</td>
                            <td>
                                <div class="d-flex" >
                                    <a href="{{ route('job.edit_url',[$job->id]) }}" class="btn btn-sm btn-info" style="margin-right:10px">Edit</a>
                                    <a onclick="return confirm('Are you sure')" href="{{ route('job.delete',[$job->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>

                        @empty
                            <tr>
                                <td class="text-center text-danger" colspan="12">No Data Found</td>
                            </tr>
                        @endforelse
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
