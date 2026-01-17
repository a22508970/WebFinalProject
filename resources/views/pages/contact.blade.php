@extends('layout_master')
@section('content')
    <h1>Contact</h1>

    <div class="row align-items-stretch">
        <div class="col-md-6 mb-4 mb-md-0">
            <form method="POST" action="{{ route('contact.store') }}" class="h-100 d-flex flex-column justify-content-center">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Message</label>
                    <textarea name="message" class="form-control" rows="4">{{ old('message') }}</textarea>
                    @error('message')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-auto">Send</button>
            </form>
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
            <h4>Our Location</h4>
            <div class="ratio ratio-16x9 rounded shadow-sm" style="overflow:hidden; min-height:300px;">
                <iframe
                    src="https://www.google.com/maps?q=R.+Diogo+Macedo+192,+4400-107+Vila+Nova+de+Gaia&output=embed"
                    width="100%" height="100%" style="border:0; min-height:300px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
