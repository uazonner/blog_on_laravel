@extends('layouts.app')

@section('title')
    <title>BrainStorm posts</title>
@stop

@section('header')
    <header class="main-header">
        <div class="container">
            {!! Breadcrumbs::render('admin.users') !!}
        </div>
    </header>
@stop

@section('content')
    <div class="col-md-12">
        <section>
            <h2 class="page-header no-margin-top">Управление пользователями</h2>
            <div class="pull-right">
                <a href="{{ url('admin/users/create') }}" class="btn btn-ar btn-default">
                    <i class="fa fa-plus-square" aria-hidden="true"></i> Добавить пользователя
                </a>
            </div>
            <div class="clearfix"></div>
            <hr class="dotted">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Имя пользователя</th>
                    <th>Email адрес</th>
                    <th>Активный</th>
                    <th>Дата регистрации</th>
                    <th>Действие</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $users as $user )
                 <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->active }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                         <a href="{!! url('/admin/users/' . $user->id . '/edit') !!}">Редактировать</a> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </td>
                 </tr>
                @endforeach
                </tbody>
            </table>
        </section>
    </div>
@stop

@section('asside')
@endsection