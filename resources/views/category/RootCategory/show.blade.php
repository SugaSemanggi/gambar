@extends('layouts.app')

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <strong>Basic Form</strong> Elements
            </div>
            <form class="form-horizontal" action="{{Route('root-category.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="text-input">Nama Category</label>
                        <div class="col-md-9">
                            <input class="form-control" id="text-input" type="text" name="nama_category" placeholder="Nama Category">
                        </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="textarea-input">description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="textarea-input" name="description" rows="9" placeholder="Content.."></textarea>
                        </div>
                </div>

            </div>
            <div class="card-footer">
                <button class="btn btn-sm btn-primary" type="submit">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
                <button class="btn btn-sm btn-danger" type="reset">
                    <i class="fa fa-ban"></i> Reset
                </button>
            </div>
            </form>
        </div>
        </div>
    </div>
@endsection
