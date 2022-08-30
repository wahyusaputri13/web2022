@extends('back.a.layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        {{ Breadcrumbs::render('complaint') }}
        <div class="row">
            <div class="card card-plain">
                <div class="card-content">
                    <ul class="timeline">
                        @foreach($data as $d)
                        @if($loop->index %2 == 0)
                        <li class="timeline-inverted">
                            <div class="timeline-badge danger">
                                <i class="material-icons">card_travel</i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <span class="label label-danger">{{ $d->message }}</span>
                                </div>
                                <div class="timeline-body">
                                    <table border="1">
                                        <tr>
                                            <td>Reporter's Name</td>
                                            <td> : </td>
                                            <td>{{ $d->report->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Reporter's Phone</td>
                                            <td> : </td>
                                            <td>{{ $d->report->phone }}</td>
                                        </tr>
                                        <tr>
                                            <td>Date</td>
                                            <td> : </td>
                                            <td>{{ $d->report->date }}</td>
                                        </tr>
                                        <tr>
                                            <td>Location</td>
                                            <td> : </td>
                                            <td>{{ $d->report->location }}</td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td> : </td>
                                            <td>{{ $d->report->description }}</td>
                                        </tr>
                                    </table>
                                </div>
                                <h6>
                                    <i class="ti-time"></i> {{ $d->created_at->diffForHumans() }} by {{
                                    $d->report->report2->name }}
                                </h6>
                                <!-- @if($data->count() <= 1) 
                                    {{Form::model($data, ['route' => ['upstate'],'method' => 'put', 'files' =>
                                    'true', ''])}}
                                    {{Form::text('zzz', $d->report->id, ['hidden'])}}
                                    <button type="submit" class="btn btn-success btn-fill">follow-up</button>
                                    {{Form::close()}}
                                    @endif -->
                            </div>
                        </li>
                        @else
                        <li>
                            <div class="timeline-badge success">
                                <i class="material-icons">extension</i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <span class="label label-success">{{ $d->message }}</span>
                                </div>
                                <div class="timeline-body">
                                    <p></p>
                                </div>
                                <h6>
                                    <i class="ti-time"></i> {{ $d->created_at->diffForHumans() }} by {{
                                    $d->report->report2->name }}
                                </h6>
                            </div>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('after-script')
<script type="text/javascript">
    $(document).ready(function () {
        demo.initFormExtendedDatetimepickers();
    });
</script>
@endpush