@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('予約一覧詳細') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('reservations.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">部屋の選択</label>
                            <div class="col-sm-10">
                                <input type="text"  name="room_name" class="form-control" id="inputtitle">
                            </div>
                        </div>


                            <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">チェックイン</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="checkin" class="form-control" id="inputtitle">
                                    </div>
                            </div>


                            <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">チェックアウト</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="checkout" class="form-control" id="inputtitle">
                                        <button type="submit" class="btn btn-primary">予約</button>
                                        <a href="{{ route('reservations.index') }}" class="btn btn-secondary">一覧へ戻る</a>
                                    </div>
                            </div>

                    <form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
