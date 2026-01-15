@extends('layout_master')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-7">
            <h1>About MedPharma Solutions</h1>

            <p>
                MedPharma Solutions is a European pharmaceutical manufacturer specializing in sterile injectable
                medicines for hospital, biotech, and specialty pharma partners. We operate under EU GMP and
                align with EMA guidance for aseptic processing.
            </p>

            <p>
                Our mission is to deliver safe, high‑quality injectable products through robust quality systems,
                experienced teams, and modern digitalized production environments.
            </p>
        </div>

        <div class="col-md-5">

            <img src="{{ asset('images/businesspeople-office-meeting.jpg') }}" class="img-fluid rounded shadow-sm"
                alt="MedPharma Solutions facility">

        </div>
    </div>
@endsection
