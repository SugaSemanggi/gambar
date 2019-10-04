@extends('layouts.app')

@section('content')

    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Sub Category Table
                    <a class="btn btn-success btn-sm" href="{{ Route('sub-category.form') }}">Add New Sub Category</a>
                </div>
            <div class="card-body">
                <table class="table table-responsive-sm table-striped">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Created at</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sc as $sub_category)
                        <tr>
                            <td>{{$sub_category->nama_subcategory}}</td>
                            <td>{{$sub_category->created_at}}</td>
                            <td>
                            <a href="{{Route('sub-category.edit', $sub_category->id)}}" class="btn btn-success btn-sm">Edit</a>
                            <form action="{{Route('sub-category.delete', $sub_category->id)}}" method="post" class="form-inline">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE" class="form-controll">
                                <button class="btn btn-danger btn-sm"> Hapus </button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">Prev</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
                </div>
            </div>
        </div>

    </div>

@endsection
