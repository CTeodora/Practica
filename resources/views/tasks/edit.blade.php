@extends('layouts.base')

@section('content')
<div class="well">
        {!! Form::open(['action' => ['TasksController@update', $task->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name', []) !!} 
        {!! Form::text('name', $task->name , ['class'=>'form-control','placeholder'=>'Name']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description', []) !!}  
        {!! Form::textarea('description',$task->description, ['class'=>'form-control','placeholder'=>'Description']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('assign', 'Assign to user', []) !!}
        {!! Form::select('assign', ['1'=>'User 1','2'=>'User 2'], $task->assign, ['placeholder' => 'Select user','class'=>'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('status', 'Task status', []) !!}
        {!! Form::select('status', ['1'=>'Status 1','2'=>'Status 2'], $task->status, ['placeholder' =>'Select task status','class'=>'form-control']) !!}
    </div>  
        
    {!! Form::hidden('_method', 'PUT') !!}
        
    <div class="form-group">
        {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
    </div>
               
        
        {!! Form::close() !!}

</div>


@endsection