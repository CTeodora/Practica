@extends('layouts.base')

@section('content')
  
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Bordered Table</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            <tr>
              <th style="width: 10px">#</th>
              <th>Task name</th>
              <th>Description</th>
              <th style="width: 40px">Assigned to user</th>
              <th>Created by</th>
              <th>Status</th>
              <th>Created at</th>
              <th>Options</th>
            </tr>
            
            @foreach($tasks as $task)
            <tr>
              <td>{{$task->id}}</td>
              <td>{{$task->name}}</td>
              <td>{{$task->description}}</td>
              <td>{{$task->assign}}</td>
              <td>{{$task->user_id}}</td>
              <td>{{$task->status}}</td>
              <td>{{$task->created_at}}</td>
              <td>
                <a href="/tasks/{{$task->id}}/edit" class="btn btn-default">Edit</a>
                {{--  <a href="/tasks/{{$task->id}}/destroy" class="btn btn-danger">Delete</a>  --}}
                
                {!! Form::open(['action' => ['TasksController@destroy', $task->id ],'method' => 'POST']) !!}
                  {!! Form::hidden('_method', 'DELETE') !!}
                  {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                
                
              </td>
            </tr>
            @endforeach

          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>
        </div>
      </div>
    


@endsection