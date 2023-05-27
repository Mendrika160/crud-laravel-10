@extends('layouts.app')

@section('title', 'Page d\'accueil')
@section('content')

    <div class="container">
        <h3>Student </h3>
        
        <button 
            class="btn btn-primary mb-2"
            onclick="window.location.href='{{ url('student/create') }}'"
        >
            Add new student
        </button>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Adress</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $students as $student)
                  <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->adresse }}</td>

                    <td>{{ $student->mobile }}</td>
                    <td>
                      <a 
                        href="{{ url('/student/' . $student->id) }}" 
                        title="View Student"
                      >
                        <button 
                          class="btn btn-info btn-sm"
                        >
                          <i 
                            class="fa fa-eye" 
                            aria-hidden="true"
                          ></i> View
                        </button>
                      </a>
                      <a 
                        href="{{ url('/student/' . $student->id . '/edit') }}" 
                        title="Edit Student"
                        >
                        <button 
                          class="btn btn-primary btn-sm"
                        >
                          <i 
                            class="fa fa-pencil-square-o" 
                            aria-hidden="true"></i>
                             Edit
                        </button>
                      </a>
                      <form 
                        method="POST" 
                        action="{{ url('/student' . '/' . $student->id) }}" 
                        accept-charset="UTF-8" 
                        style="display:inline"
                        >
                          {{ method_field('DELETE') }}
                          {{ csrf_field() }}
                          <button 
                            type="submit" 
                            class="btn btn-danger btn-sm" 
                            title="Delete Student" 
                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                      </form>
                  </td>
                  </tr>
                @endforeach
                
              
              </tbody>
        </table>
    </div>
    
@stop