@extends('layouts.administratormenu')

@section('content')
<div class="container-fluid">
    {{-- <div class="jumbotron jumbotron-fluid"> --}}
    <div class="row justify-content-center">


        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; padding:0px;">
                        {{-- <h4 class="vertical-center">Все пользователи</h4> --}}
                        <h5 class="auto my-2">Все пользователи</h5>

                        <a href="{{route('administrator.users.adduser')}}" class="btn btn-primary"><i
                                class="fa fa-plus"></i></a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session()->has('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table id="my_table" class="table  table-sm table-striped table-hover" data-page-length='50'>
                        <thead style="background-color:#1c87c9; color:#fff; font-weight: bold; ">
                            <tr>
                                <td class="text-center">№</td>
                                <td class="text-center">Имя пользователя</td>
                                <td class="text-center">Контакты</td>
                                <td class="text-center">Email</td>
                                <td class="text-center">Роль</td>
                                <td class="text-center">Филиал</td>
                                <td class="text-center">Компания</td>
                                <td class="text-center">Адрес</td>
                                <td class="text-center">Статус</td>
                                <td class="text-center">Действие</td>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 0;
                            @endphp
                            @foreach ($Users as $user)
                            @php
                            $i ++;
                            @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @switch($user->role_id)
                                    @case(0)
                                    <span> Администратор</span>
                                    @break

                                    @case(1)
                                    <span>Менеджер</span>
                                    @break
                                    @case(2)
                                    <span>Курьер</span>
                                    @break
                                    @case(3)
                                    <span>Директор</span>
                                    @break
                                    @case(4)
                                    <span>Сотрудник компании</span>
                                    @break
                                    @case(5)
                                    <span>Клиент</span>
                                    @break

                                    @default
                                    <span>Статус не определен</span>
                                    @endswitch

                                </td>
                                <td>{{$user->branchName}}</td>
                                <td>{{$user->companyName}}</td>
                                <td>{{$user->address}}</td>
                                <td>@if ($user->isOnline())
                                    <li class="text-success">Online</li>
                                    @else
                                    <li class="text-muted">Offline</li>
                                    @endif</td>

                                <td align="center">
                                    <a href="{{route('administrator.users.edituser', $user->id)}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    {!!Form::open(['route'=>['administrator.users.deleteuser',
                                    $user->id],'method'=>'DELETE'])!!}
                                    <button
                                        onclick="return confirm('Вы действительно хотите удалить тарифный план {{$user->name}}')"><i
                                            class="fa fa-trash"></i></button>
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    {{-- </div> --}}
</div>
@endsection
