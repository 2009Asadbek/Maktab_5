@extends('layouts.admin')
@include('layouts.sidebar')
@section('content')
    <div class="main-content">
        <h1>Contact Qo'shmoq</h1>
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.students.index') }}" class="btn btn-primary">Orqaga</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.students.update', $student->id)  }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="student">student</label>
                                <input type="student" id="student" class="form-control" name="student" placeholder="student sonini kiriting" value="{{ $student->student }}">
                            </div>
                            <div class="form-group">
                                <label for="graduates">graduates</label>
                                <input type="graduates" id="graduates" class="form-control" name="graduates" placeholder="graduates" value="{{ $student->graduates }}">
                            </div>
                            <div class="form-group">
                                <label for="classes">classes</label>
                                <input type="classes" id="adclassesdress" class="form-control" name="classes" placeholder="classes sonini kiritng" value="{{ $student->classes }}">
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
