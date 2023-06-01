@extends('layout')
@section('content')

<div class="card-body">
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>st_name #</th>
                          <th>st_roll</th>
                          <th>Phone</th>
                          <th>Image</th>
                          <th>Address</th>
                          <th>department</th>
                          <th>Action</th>
                          
                      </tr>
                    </thead>
                    <tbody>


                     @foreach($swt_student_info as $v_student)

                      <tr>
                          <td>{{$v_student->student_name}}</td>
                          <td>{{$v_student->student_roll}}</td>
                          <td>{{$v_student->student_phone}}</td>
                          <td><img src="{{URL::to($v_student->student_image)}}"height="80"width="100"style="border-radius: 50%;"></td>
                          <td>{{$v_student->student_address}}</td>
                          <td>
                          	@if($v_student->student_department==1)
                          	<span class="level level-success">{{'CSE'}}</span>
                          	@elseif($v_student->student_department==2)
                          	<span class="level level-primary">{{'SWT'}}</span>
                          	@elseif($v_student->student_department==3)
                          	<span class="level level-warning">{{'EEE'}}</span>
                          	@elseif($v_student->student_department==4)
                          	<span class="level level-info">{{'BBA'}}</span>
                          	@elseif($v_student->student_department==5)
                          	<span class="level level-success">{{'MBA'}}</span>
                          	@else
                          	<span class="level level-important">{{'Not defined'}}</span>
                          	@endif
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                            <button class="btn btn-outline-warning">Edit</button>
                            <button class="btn btn-outline-danger">Delete</button>


                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>


@endsection