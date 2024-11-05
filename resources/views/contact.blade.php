@extends('layout')
@section('content')
    @if(session('confirm_message'))<div class="mb-5"><h2 class="text-center">{{ session('confirm_message') }}</h2></div>
    @else
        <div class="text-center">
        <h6 class="mb-3">Please fill out the form with details of your question or project and I'll be in touch with you as soon as I can!</h6>
            <br>
        </div>
        <div class="container">
            @if ($errors->any())
                <div class="row alert alert-danger col-12">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <form method="post" name="contact_form" action="/contact/sendmessage">
            @csrf
            <div class="row form-row justify-content-center">
                <div class="col-lg-6 form-group"><label>Name</label><input type="text" name="name" class="w-100 form-control" required></div>
                <div class="col-lg-6 form-group"><label>Email</label><input type="email" name="email" class="w-100 form-control" required></div>
            </div>
            <div class="row form-row">
                <div class="col-12 form-group"><label>Message</label><textarea name="message" rows="8" required class="form-control w-100 font-weight-bold"></textarea></div>
            </div>
            <div class="row form-row text-right d-block">
                <button type="submit" class="btn btn-outline-dark float-right">Send Message</button>
            </div>
        </form>
    </div>

    @endif
@endsection
