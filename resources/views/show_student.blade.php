@extends('studentapp.layout')
@section('content')




<div class="container">

@include('session.success')

<h1>show student record</h1>


<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Email</th>
      <th scope="col">Student Roll</th>
      <th scope="col">Student Address</th>
      <th scope="col" colspan='2'>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $x=1 ?>
  @foreach($students as $student)
    <tr>
      <td>{{$x++}}</td>
      <td>{{$student->student_name}}</td>
      <td>{{$student->email}}</td>
      <td>{{$student->student_roll}}</td>
      <td>{{$student->student_address}}</td>
      
      <td colspan='2'>
        
        <a href="{{ route('student.edit',$student->id)}}" class="btn btn-warning">Edit</a>
        <form method="post" style="display: inline-block;" action="{{ route('student.destroy',$student->id) }}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
     
        <button type="submit" class="btn btn-danger">Delete</button>

        </form>
        
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


</div>

@endsection