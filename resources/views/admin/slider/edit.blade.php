@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>slider</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Create Slider</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="image" id="image-upload">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Offer</label>
                        <input type="text" name="offer" class="form-control" value="{{ $slider->offer }}">
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $slider->title }}">
                    </div>
                    <div class="form-group">
                        <label>Sub title</label>
                        <input type="text" name="sub_title" class="form-control" value="{{ $slider->sub_title }}">
                    </div>
                    <div class="form-group">
                        <label>Short description</label>
                        <input type="text" name="short_description" class="form-control"
                            value="{{ $slider->short_description }}">
                    </div>
                    <div class="form-group">
                        <label>Button Link</label>
                        <input type="text" name="button_link" class="form-control" value="{{ $slider->button_link }}">
                    </div>

                    <div class="form-class">
                        <label for="">Status</label>
                        <select name="status" class="form-control" id="">
                            <option {{ $slider->status === 1 ? 'selected' : '' }} value="1">Active</option>
                            <option {{ $slider->status === 0 ? 'selected' : '' }} value="0">Deactive</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" value="submit">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection
