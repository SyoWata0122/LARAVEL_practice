@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('予約履歴') }}</div>

                <div class="card-body">
                    <div>
                    <a href="{{ route('reservations.create') }}" class="btn btn-primary">新規登録</a>
                    </div>
                    <table　class="table">
                        <thead>
                            <tr>
                                <th>部屋の名前</th>
                                <th>チェックイン</th>
                                <th>チェックアウト</th>
                            </tr>
                        </thead>
                       @foreach($reservations as $reservations)
                        <tr>
                            <td>{{ $reservation->id }}</td>
                            <td>{{ $reservation->room_name }}</td>
                            <td>{{ $reservation->checkin }}</td>
                            <td>{{ $reservation->checkout }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
