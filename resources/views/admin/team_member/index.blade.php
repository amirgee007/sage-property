@extends('partials.admin.app')

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    @include('flash::message')
                    <section class="panel">
                        <header class="panel-heading">
                            Team Member Table
                        </header>

                        <table class="table table-striped table-advance table-hover">

                            <a href="/admin"><button type="button" class="btn btn-danger pull-right"><i class="icon-prev"></i> Back</button></a>
                            <a href="/admin/team/add"><button type="button" class="btn btn-success pull-right"><i class="icon_plus_alt"></i> Add Team Member</button></a>

                            <tbody>
                            <tr>
                                <th>name</th>
                                <th>postion</th>
                                <th>email</th>
                                <th>decsription</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>

                            @foreach($teams as $team)

                                <tr>
                                    <td>{{$team->name}}</td>
                                    <td>{{$team->position}}</td>
                                    <td>{{$team->email}}</td>
                                    <td>{{$team->description}}</td>
                                    <td>
                                        <div class="btn-group">
                                            {{--<a class="btn btn-primary" href="/admin/team//{{$team->id}}">View</a>--}}
                                            <a class="btn btn-success" href="/admin/team/edit/{{$team->id}}">Edit</a>
                                            <a class="btn btn-danger" href="/admin/team/delete/{{$team->id}}">Delete</a>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach


                            </tbody>
                        </table>

                        {{--                        {!! $teams->render() !!}--}}

                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->

@endsection