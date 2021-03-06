
@extends('layouts.app')

@section('content')
<div class="container">

<h2 class="">Sửa dự toán</h2>

<!-- Modal body -->
<form method="post" action="/backend/founding/{{ $founding->id }}">
    @csrf
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label">{{ __('Ngày đóng góp') }}</label>

        <div class="col-md-8">
            <input id="date_founding" type="text" class="form-control @error('date_founding') is-invalid @enderror" name="date_founding" value="{{ date('d/m/Y', strtotime($founding->date_founding)) }}" required autocomplete="date_founding" autofocus>
            @error('date_founding')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label">Đóng góp</label>
        <div class="col-md-8">
            <input id="founding" type="text" class="form-control @error('founding') is-invalid @enderror" name="founding" value="{{ $founding->founding }}"  autocomplete="founding">
            @error('founding')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label">Hiện tại</label>
        <div class="col-md-8">

            <input id="current" type="text" class="form-control @error('current') is-invalid @enderror" name="current" value="{{ $founding->current }}"  autocomplete="current">
            @error('currrent')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </div>
</form>
</div>
@endsection