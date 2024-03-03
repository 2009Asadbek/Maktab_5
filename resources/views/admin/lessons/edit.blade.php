@extends('layouts.admin')
@include('layouts.sidebar')
@section('content')
    <div class="main-content">
        <h1>Contact Qo'shmoq</h1>
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-.header">
                        <a href="{{ route('admin.lessons.index') }}" class="btn btn-primary">Orqaga</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.lessons.update', $lesson->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="day">day</label>
                                <input type="text" id="day" class="form-control" name="day" placeholder="day" value="{{ $lesson->day }}">
                            </div>
                            <div class="form-group">
                                <label for="day_ru">day_ru</label>
                                <input type="text" id="day_ru" class="form-control" name="day_ru" placeholder="day_ru" value="{{ $lesson->day_ru }}">>
                            </div>
                            <div class="form-group">
                                <label for="day_en">day_en</label>
                                <input type="text" id="day" class="form-control" name="day_en" placeholder="day_en" value="{{ $lesson->day_en }}">>
                            </div>
                            <div class="form-group">
                                <label for="time">time</label>
                                <input type="text" id="time" class="form-control" name="time" placeholder="time" value="{{ $lesson->time }}">>
                            </div>
                            <div class="form-group">
                                <label for="teachname_uz">Teachname Uz</label>
                                <input type="text" id="teachname_uz" class="form-control" name="teachname_uz" placeholder="teachname_uz" value="{{ $lesson->teachname_uz }}">
                            </div>
                            <div class="form-group">
                                <label for="teachname_ru">Teachname Ru</label>
                                <input type="text" id="teachname_ru" class="form-control" name="teachname_ru" placeholder="teachname_ru" value="{{ $lesson->teachname_ru }}">
                            </div>
                            <div class="form-group">
                                <label for="teachname_en">Teachname En</label>
                                <input type="text" id="teachname_en" class="form-control" name="teachname_en" placeholder="teachname_en" value="{{ $lesson->teachname_en }}">
                            </div>
                            <div class="form-group">
                                <label for="class">Class</label>
                                <input type="text" id="class" class="form-control" name="class" placeholder="class" value="{{ $lesson->class }}">
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
