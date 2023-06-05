@extends('user.pages.index')
@section('title','Buy Ticket')
@section('biletal')
    <section class="mt-6 py-0">
        <div class="bg-holder w-50 bg-right d-none d-lg-block" style="background-image:url({{ asset('assets') }}/img/gallery/hero-section-1.png);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-5 py-xl-5 py-xxl-7">
                    <h1 class="display-3 text-1000 fw-normal">Let’s make a tour</h1>
                    <h1 class="display-3 text-primary fw-bold">Discover the beauty</h1>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <form class="row g-4 mt-5" method="POST" action="{{ asset('/account/panel/findticket') }}">
                                @csrf
                                <div class="col-sm-6 col-md-6 col-xl-5">
                                    <div class="input-group-icon">
                                        <label class="form-label visually-hidden" for="inputAddress1">Address 1</label>
                                        <select name="from" id="fromCitySelect" class="form-control input-box form-voyage-control">
                                            <option value="">From where</option>
                                            @foreach ($stations as $station)
                                                <option value="{{ $station }}">{{ $station }}</option>
                                            @endforeach
                                        </select>
                                        <span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-xl-5">
                                    <div class="input-group-icon">
                                        <label class="form-label visually-hidden" for="inputAddress1">Address 1</label>
                                        <select name="where" id="toCitySelect" class="form-control input-box form-voyage-control">
                                            <option value="">To where</option>
                                            @foreach ($stations as $station)
                                                <option value="{{ $station }}">{{ $station }}</option>
                                            @endforeach
                                        </select>
                                        <span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-xl-5">
                                    <div class="input-group-icon">
                                        <label class="form-label visually-hidden" for="inputdateOne">Date</label>
                                        <input class="form-control input-box form-voyage-control" id="inputdateOne" type="date" name="date" />
                                        <span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-10 col-lg-12 d-grid mt-6">
                                    <button class="btn btn-secondary" type="submit">Find Ticket</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
