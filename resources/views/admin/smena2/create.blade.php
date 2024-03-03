@extends('layouts.admin')
@include('layouts.sidebar')
@section('content')
    <div class="main-content">
        <h1>Teacher Qo'shmoq</h1>
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-.header">
                        <a href="{{ route('admin.smena2.index') }}" class="btn btn-primary">Orqaga</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.smena2.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="classname">Class Name</label>
                                <input type="text" id="classname" class="form-control" name="classname" placeholder="classname kiritng">
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    @endsection
