@extends('templates.dashboard')

@section('title', 'User stat')

@section('content')
<div id="workarea">
    <table id="tbTaskStat" class="table table-striped table-bordered table-sm">
        <thead>
            <tr>
                <th class="th-sm">Project</th>
                <th class="th-sm">Task</th>
                <th class="th-sm">Hours today</th>
                <th class="th-sm">Hours total</th>
                <th class="th-sm">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th>{{$task->project->project_name}}</th>
                    <th>{{$task->task_name}}</th>
                    <th>
                        @php
                            $total = $task->commissions->reduce(function ($sum, $commission) {
                                if($commission->created_at->format('d.m.Y')==Carbon\Carbon::now()->format('d.m.Y')){
                                    return $sum += ($commission->hour_to-$commission->hour_from);
                                }else{
                                    return $sum+=0;
                                }
                            }, 0);
                        @endphp
                        {{$total}}
                    </th>
                    <th>
                        @php
                            $total = $task->commissions->reduce(function ($sum, $commission) {return $sum += ($commission->hour_to-$commission->hour_from);}, 0);
                        @endphp
                        {{$total}}
                    </th>
                    <th>{{$task->status}}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
   $(document).ready(function() {
    $('#tbTaskStat').DataTable();
} );
</script>
@endsection