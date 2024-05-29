@extends('admin.app')
@section('title')
    {{ 'Job List' }}
@endsection
@section('content')
    <div class="container" style="padding-top:50px">
        <div class="row">
            <div class="com-md-12">
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
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">1</th>
                            <td>Brandon Jacob</td>
                            <td>Designer</td>
                            <td>28</td>
                            <td>2016-05-25</td>
                            <td>2016-05-25</td>
                            <td>2016-05-25</td>
                            <td>2016-05-25</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
