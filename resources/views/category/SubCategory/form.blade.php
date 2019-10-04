@extends('layouts.app')

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <strong>Sub Category</strong>
            </div>
            <form class="form-horizontal" action="{{Route('sub-category.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="text-input">Nama Sub Category</label>
                        <div class="col-md-9">
                            <input class="form-control" id="text-input" type="text" name="nama_subcategory" placeholder="Nama Category">
                        </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="text-input">Nama Sub Category</label>
                        <div class="col-md-9">
                            <select class="form-control" id="select1" name="root_category_id">
                                <option value="0">Please select</option>
                                @foreach($rc as $rootcategory)
                                <option value="{{$rootcategory->id}}">{{$rootcategory->nama_category}}</option>
                                @endforeach
                            </select>    
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
