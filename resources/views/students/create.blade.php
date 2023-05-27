@extends('layouts.app')

@section('title', 'Add student')
@section('content')

    <div class="container">
        <h3>Add new student</h3>
        
        <form action="{{route('student.store')}}" method="post">
            @csrf
            <input 
                type="text"
                class="form-control mb-2"
                placeholder="student name"
                name="name"
            >
            <input 
                type="text"
                class="form-control mb-2"
                placeholder="adresse"
                name="adresse"
            >
            <input 
                type="text"
                class="form-control mb-2"
                placeholder="phone number"
                name="mobile"
            >
            <div class="row mb-2">
                
                <a 
                    href="{{ url('student') }}"
                    class="btn"
                >
                    cancel
                </a>
                <button 
                    type="submit"
                    class="btn btn-dark"
                >
                    Save
                </button>
            </div>  
            
        </form>
    </div>

@endsection