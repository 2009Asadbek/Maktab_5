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
                            <h3>Aloqa</h3>
                            <a href="{{ route('admin.contact.create') }}" class="btn btn-success">Qo'shish</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody>
                                        <tr>
                                            <th class="text-center">
                                                T/R
                                            </th>
                                            <th>Raqami</th>
                                            <th>Pochtasi</th>
                                            <th>Manzil Uz</th>4
                                            <th>Manzil Ru</th>
                                            <th>Manzil En</th>
                                            <th>Action</th>        
                                        </tr>
                                        @foreach ($contacts as $contact)
                                        <tr>
                                            <td>1</td>
                                            <td>{{ $contact->number }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->address }}</td>
                                            <td>{{ $contact->address_ru }}</td>
                                            <td>{{ $contact->address_en }}</td>
                                            <td>
                                                <a href="{{ route('admin.contact.edit', $contact->id) }}" class="btn btn-primary">Update</a>
                                                <form style="display: inline"
                                                    action="{{ route('admin.contact.destroy', $contact->id) }}"
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