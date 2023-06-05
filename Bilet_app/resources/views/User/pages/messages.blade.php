@extends('user.pages.index')
@section('title', 'Messages')
@section('messages')
<div class="d-flex justify-content-center align-items-center" style="height: 60vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary mr-2">Gelen Mesajlar</button>
                    <button class="btn btn-primary">Mesaj Gönder</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
