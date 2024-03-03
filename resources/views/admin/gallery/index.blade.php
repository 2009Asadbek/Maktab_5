@extends('layouts.admin')
@include('layouts.sidebar')

@section('content')
    <div class="main-content">
        <section class="section">
            @if(session('success')) 
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>×</span>
                  </button>
                  {{ session('success') }}
                </div>
              </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Galareya</h3>
                            <a href="{{ route('admin.galleries.create') }}" class="btn btn-success">Qo'shish</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody>
                                        <tr>
                                            <th class="text-center">
                                                T/R
                                            </th>
                                            <th>title uz</th>
                                            <th>title ru</th>
                                            <th>title en</th>
                                            <th>Date</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                        @foreach ($galleries as $gallery)
                                        <tr>
                                            <td>{{ $gallery->id }}</td>
                                            <td>{{ $gallery->title_uz }}</td>
                                            <td>{{ $gallery->title_ru }}</td>
                                            <td>{{ $gallery->title_en }}</td>
                                            <td>{{ $gallery->date }}</td>
                                            <td>
                                                <img src="/public/gallery/images/{{ $gallery->img }}" width="50px" height="50px" alt="">
                                              </td>
                                            <td>
                                                <form style="display: inline"
                                                    action="{{ route('admin.galleries.destroy', $gallery->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are You Delete?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                          
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- Pagination --}}
    
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    {{-- {{ $categories->links() }} --}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection