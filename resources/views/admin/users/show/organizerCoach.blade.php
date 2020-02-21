@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">User</div>
                <div class="card-body">

                    <a href="{{ url(url()->previous()) }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
<!--                    <a href="{{ url('/admin/users/' . $user->id . '/edit') }}" title="Edit User"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                    {!! Form::open([
                    'method' => 'DELETE',
                    'url' => ['/admin/users', $user->id],
                    'style' => 'display:inline'
                    ]) !!}
                    {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-sm',
                    'title' => 'Delete User',
                    'onclick'=>'return confirm("Confirm delete?")'
                    ))!!}
                    {!! Form::close() !!}-->
                    <br/>
                    <br/>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            </thead>
                            <tbody>
                                <?php foreach (['id', 'name', 'bio', 'profession', 'experience_detail', 'training_service_detail', 'hourly_rate', 'expertise_years', 'created_at'] as $column): ?>
                                    <tr>
                                        <th>{{ucfirst(str_replace('_',' ',$column))}}.</th>
                                        <td>{{ $org->$column }}</td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <th>Profile Image.</th>
                                    <td><img width="100" src="{{url('uploads/organiserCoach/profile_image/'.$org->profile_image)}}"></td>
                                    <td>
                                </tr>


                                <tr>
                                    <th>Sports.</th>

                                    <td>
                                        <?php
                                        $sports = [];
                                        foreach ($org->sport_id as $data):
                                            $sports[] = $data->name;
                                        endforeach;
                                        echo (implode(',', $sports));
                                        ?>
                                    </td>
                                </tr>



                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
