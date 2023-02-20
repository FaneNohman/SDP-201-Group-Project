@extends('templates.dashboard')

@section('title', 'Main page')

@section('content')
<div id="workarea">
    <table id="tbTask" class="table table-striped table-bordered table-sm">
        <thead>
            <tr>
                <th class="th-sm">Project</th>
                <th class="th-sm">Task</th>
                <th class="th-sm">Deadline</th>
                <th class="th-sm">Worktype</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th>{{$task->project->project_name}}</th>
                    <th>{{$task->task_name}}</th>
                    <th>{{$task->deadline}}</th>
                    <th>{{$task->work_type}}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
  $(document).ready(function() {
    $('#tbTask').DataTable();
} );
 </script>
@endsection