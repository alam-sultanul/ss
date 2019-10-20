@extends('studentapp.layout')
@section('content')

@include('session.success')

<div class="card">
  <h5 class="card-header">Update Student record</h5>

  


  <div class="row">

       <div class="col-sm-6">


       
  <div class="card-body" style="width:400px;">
   
   <form method="post" action="{{ route('student.update',$student->id) }}">

   <input type="hidden" name="_method" value="PUT">
   {{csrf_field()}}
   <div class="form-group">
     <label >Student name</label>
     <input type="text" class="form-control" name="student_name"  placeholder="Enter Student name" value="{{$student->student_name}}">
     </div>
 
     <div class="form-group">
     <label >Student email</label>
     <input type="text" class="form-control" name="student_email"  placeholder="Enter Student email" value="{{$student->email}}">
     </div>
    



   <div class="form-group">
     <label>Student Roll</label>
     <input type="text" class="form-control"  name="student_roll" placeholder="Student Roll" value="{{$student->student_roll}}"">
   </div>
 
   <div class="form-group">
     <label>Student address</label>
    <textarea class="form-control" placeholder="Student Address" name="student_address">{{$student->student_address}}</textarea>
   </div>
   
   <button type="submit" class="btn btn-primary">Update</button>
 </form>
 
 
   </div>



      </div>

        <div class="col-sm-6">

            @if($errors->any())

             @foreach($errors->all() as $error)
               <li class="text-danger"> {{$error}}</li>
             @endforeach

            @endif

        </div>
    
  </div>




</div>

@endsection