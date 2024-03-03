@extends('layouts.admin')
@include('layouts.sidebar')
@section('content')
    <div class="main-content">
        <h1>Contact Qo'shmoq</h1>
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-.header">
                        <a href="{{ route('admin.students.index') }}" class="btn btn-primary">Orqaga</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.students.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="student">student</label>
                                <input type="student" id="student" class="form-control" name="student" placeholder="student sonini kiriting">
                            </div>
                            <div class="form-group">
                                <label for="graduates">graduates</label>
                                <input type="graduates" id="graduates" class="form-control" name="graduates" placeholder="graduates">
                            </div>
                            <div class="form-group">
                                <label for="classes">classes</label>
                                <input type="classes" id="adclassesdress" class="form-control" name="classes" placeholder="classes sonini kiritng">
                            </div>
                            <div class="form-group">
                                <label for="teachers">teachers</label>
                                <input type="teachers" id="adclassesdress" class="form-control" name="teachers" placeholder="teachers sonini kiritng">
                            </div>
                            <div class="form-group">
                                <label for="sequence">sequence</label>
                                <input type="sequence" id="adclassesdress" class="form-control" name="sequence" placeholder="sequence sonini kiritng">
                            </div>
                            <div class="form-group">
                                <label for="first_class">first_class</label>
                                <input type="first_class" id="adclassesdress" class="form-control" name="first_class" placeholder="first_class sonini kiritng">
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
