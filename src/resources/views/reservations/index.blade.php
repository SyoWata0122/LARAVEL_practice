@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('予約履歴') }}</div>

                <div class="card-body">
                    <table　class="table">
                        <thead>
                            <tr>
                                <th>部屋の名前</th>
                                <th>チェックイン</th>
                                <th>チェクアウト</th>
                            </tr>
                        </thead>
                        @foreach($reservations as $reservations)
                        <tr>
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
