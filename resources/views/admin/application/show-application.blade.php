@extends('admin.app')
@section('title')
    {{ 'JobBoard - Application' }}
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
                            <th scope="col">User Name</th>
                            <th scope="col">Job Title</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($applications as $application)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $application->user->name }}</td>
                                <td>{{ $application->job->title }}</td>
                                <td><span class="badge badge-info bg-info">{{ $application->status ==0 ? 'Pending' : 'Approve' }}</span></td>
                                <td>
                            <div class="d-flex">
                                <form action="{{ route('admin.approve', [$application->id]) }}" method="POST">
                                    @csrf
                                    <button style="margin-right:10px" type="submit" class="btn btn-sm btn-info">Approve</button>
                                </form>
                                <a onclick="return confirm('Are you sure')"
                                    href="{{ route('job.delete', [$application->id]) }}"
                                    class="btn btn-sm btn-danger">Delete</a>
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
