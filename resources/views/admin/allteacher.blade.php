@extends('layout')
@section('content')

          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              
               <p class="alert-success">
                <?php
                $exception=Session::get('exception');
                if($exception){
                echo $exception;

                Session::put('exception',null);
                }
                 ?></p>

              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Teacher Name</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Image</th>
                          <th>department</th>
                          <th>Action</th>
                          
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($all_teacher_info as $v_teacher)

                      <tr>
                          <td>{{$v_teacher->teachers_name}}</td>
                          <td>{{$v_teacher->teachers_phone}}</td>
                          <td>{{$v_teacher->teachers_address}}</td>
                          <td><img src="{{URL::to($v_teacher->teachers_image)}}"height="80"width="100"style="border-radius: 50%;"></td>
                          <td>
                          	@if($v_teacher->teachers_department==1)
                          	<span class="level level-success">{{'CSE'}}</span>
                          	@elseif($v_teacher->teachers_department==2)
                          	<span class="level level-primary">{{'SWT'}}</span>
                          	@elseif($v_teacher->teachers_department==3)
                          	<span class="level level-warning">{{'EEE'}}</span>
                          	@elseif($v_teacher->teachers_department==4)
                          	<span class="level level-info">{{'BBA'}}</span>
                          	@elseif($v_teacher->teachers_department==5)
                          	<span class="level level-success">{{'MBA'}}</span>
                          	@else
                          	<span class="level level-important">{{'Not defined'}}</span>
                          	@endif
                          </td>
                          <td>
                           <a href="{{URL::to('')}}"> <button class="btn btn-outline-primary">View</button>
                            <a href="{{URL::to('')}}"><button class="btn btn-outline-warning">Edit</button>

                            <a href="{{URL::to('')}}" id="delete"><button class="btn btn-outline-danger">Delete</button>


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