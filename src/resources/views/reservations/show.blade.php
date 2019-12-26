@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('予約一覧詳細') }}</div>

                <div class="card-body">
                    <table　class="table">
                        <thead>
                            <tr>
                                <th>部屋の名前</th>
                                <td>{{ $reservation->room_name }}</td>
                            </tr>
                            <tr>
                                <th>チェックイン</th>
                                <td>{{ $reservation->checkin }}</td>
                            </tr>
                                <th>チェクアウト</th>
                                <td>{{ $reservation->checkout }}</td>
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
