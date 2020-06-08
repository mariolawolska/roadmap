<!--@extends('layout.app')-->
@extends('layout.head')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb ">
        <div class="pull-right m-3" >
            <a class="btn btn-success" href="{{ route('project.create') }}">Create New Project</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Technologies</th>
        <th  class="w-75">Description</th>
        <th>Link Project</th>
        <th>Link Image</th>
        <th>Link Github</th>
        <th>Action</th>
    </tr>
    
    @foreach ($projectCollection as $project)
    <tr>
        <td>{{ ++$i }}</td>
        <td><small>{{ $project->title }}</small></td>
        <td><small>{{ $project->start_date }}</small></td>
        <td><small>{{ $project->end_date }}</small></td>
        <td><small>{{ $project->technologies }}</small></td>
        <td><small>
                @php
                echo $project->description;
                @endphp
            </small></td>
        <td><small>{{ $project->link_project }}</small></td>
        <td><small>{{ $project->link_image }}</small></td>
        <td><small>{{ $project->link_github }}</small></td>
        <td>
            <form action="{{ route('project.destroy',$project->id) }}" method="POST">

                <a class="btn btn-info mb-2 w-70" href="{{ route('project.show',$project->id) }}">Show</a>
                <a class="btn btn-primary mb-2 w-70" href="{{ route('project.edit',$project->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger mb-2 w-70">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    
</table>

{!! $projectCollection->links() !!}
@include('layout.footer')
@endsection

