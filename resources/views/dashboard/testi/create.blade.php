@extends('layouts.dashboard')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(isset($_GET["success"]))
                    <div class="alert alert-success">
                        {{ $_GET["success"] }}
                    </div>
                @endif
                <div class="card-header">Create Testimonials</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('dash.testi.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>

                            <div class="col-md-6">
                                <input id="position" type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}" required autocomplete="position">

                                @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>

                            <div class="col-md-6">
                                <input type="file" id="avatar" class="form-control @error('avatar') is-invalid @enderror" name="avatar" required autocomplete="avatar" />

                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="testimonials" class="col-md-4 col-form-label text-md-right">{{ __('Testimonials') }}</label>

                            <div class="col-md-6">
                                <textarea id="testimonials" class="form-control @error('testimonials') is-invalid @enderror" name="testimonials" required autocomplete="testimonials">{{ old('testimonials') }}</textarea>

                                @error('testimonials')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="star" class="col-md-4 col-form-label text-md-right">{{ __('Star') }}</label>

                            <div class="col-md-6">
                                <select id="star" class="form-control @error('star') is-invalid @enderror" name="star" required autocomplete="star">
                                    <option {{ old('star') == 1 ? "selected" : "" }}>1</option>
                                    <option {{ old('star') == 2 ? "selected" : "" }}>2</option>
                                    <option {{ old('star') == 3 ? "selected" : "" }}>3</option>
                                    <option {{ old('star') == 4 ? "selected" : "" }}>4</option>
                                    <option {{ old('star') == 5 ? "selected" : "" }}>5</option>
                                </select>

                                @error('star')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="is_featured" class="col-md-4 col-form-label text-md-right">{{ __('is_featured') }}</label>

                            <div class="col-md-6">
                                <div class="col-form-label ">
                                <input type="checkbox" id="is_featured" @error('is_featured') is-invalid @enderror" name="is_featured" required autocomplete="is_featured" />
                                <label class="form-check-label" for="is_featured">Show on homepage</label>
                                </div>
                                @error('is_featured')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
