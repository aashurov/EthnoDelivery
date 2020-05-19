@extends('layouts.administratormenu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Редактирование пользователя') }}</div>

                <div class="card-body">

                    {{-- <form method="POST" action="{{ route(['administrator.users.updateuser', $Users->id]) }}"> --}}
                            {{-- <form method="put" action=""> --}}
                                    {!!Form::open(['route'=>['administrator.users.updateuser', $Users->id],'method'=>'put'])!!}
                        @csrf
                            {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Имя') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$Users->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Контакты') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$Users->phone}}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Адрес') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$Users->email}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Пароль') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Потверждение пароля') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Статус') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="role_id">
                                    <option value="0" name="role_id">Администратор</option>
                                    <option value="1" name="role_id">Менеджер</option>
                                    <option value="2" name="role_id">Курьер</option>
                                    <option value="3" name="role_id">Директор компании</option>
                                    <option value="4" name="role_id">Сотрудник компании</option>
                                    <option value="5" name="role_id">Клиент</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Адрес') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$Users->address}}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="branch_id" class="col-md-4 col-form-label text-md-right">{{ __('Филиал') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="branch_id">
                                        <option  selected disabled>Выберите филиал</option>
                                        @foreach ($listofbranches as $listofbranch)
                                        <option value="{{$listofbranch->id}}" name="branch_id">{{$listofbranch->branchName}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                    <label for="company_id" class="col-md-4 col-form-label text-md-right">{{ __('Компания') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="company_id">
                                                <option  selected disabled>Выберите компанию</option>
                                                @foreach ($listofcompanyes as $listofcompany)
                                                <option value="{{$listofcompany->id}}" name="company_id">{{$listofcompany->companyName}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('Сохранить') }}
                                </button>
                            </div>
                        </div>
                        {!!Form::close()!!}
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
