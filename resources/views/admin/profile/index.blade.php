@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile Page</h1>
        </div>
        <div class="section-body">
            <div class="card card-primary">
                <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-header">
                        <h4>Update user setting</h4>

                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">Choose File</label>
                                <input type="file" name="avatar" id="image-upload">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>name</label>
                            <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}">
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}">
                        </div>
                        <button type="submit" class="btn btn-primary">save</button>
                    </div>
                </form>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Update Password setting</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.profile.password.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" class="form-control" name="current_password">
                        </div>
                        <div class="form-group">
                            <label>new password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label>confirm password</label>
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>
                        <button type="submit" class="btn btn-primary">save</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.image-preview').css({
                    'background-image': 'url({{ asset(auth()->user()->avatar) }})',
                    'background-size': 'cover',
                    'background-position': 'center center'
                });
            });
        </script>
    @endpush
@endsection
