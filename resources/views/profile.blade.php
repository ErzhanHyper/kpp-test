@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="display:flex; justify-content: space-between;align-items: center;">
                        {{ __('Мои контакты') }}
                        <a href="/home" class="btn btn-primary">Контакты</a>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Имя</th>
                                <th scope="col">Телефон</th>
                                <th scope="col">Адрес</th>
                                <th scope="col">Добавить</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $item)

                                <tr>
                                    <th scope="row">{{ $item->contact_id }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>

                                        <a href="{{ route('user_contact_delete', $item->id) }}" class="btn btn-danger small">-</a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
