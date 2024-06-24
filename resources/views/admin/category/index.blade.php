@extends('admin.app')

@section('title')
    {{ 'Job Category' }}
@endsection
@section('content')
    <section style="padding-top:50px">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-2">
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">Create A Category</h5>

                            @if (Session('success'))
                                <div class="alert alert-success">
                                    {{ Session('success') }}
                                </div>
                            @endif

                            <form class="row g-3" method="post" action="{{ route('admin.createCategory') }}">
                                @csrf
                                <div class="col-md-12 mb-2">
                                    <label for="category_name" class="form-label">Category Name</label>
                                    <input type="text" id="category_name" name="category_name"
                                        value="{{ old('category_name') }}" id="conpany_name" class="form-control"
                                        placeholder="Category Name">
                                    @error('category_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div>
                                    <button type="submit" class="btn btn-primary">Create Category</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection