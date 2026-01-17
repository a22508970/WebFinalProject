@extends('layout_master')

@section('content')
    <div id="mainCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/laboratory-supplies-medical-work.jpg') }}" class="d-block w-100" alt="Cleanroom">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Cleanroom</h5>
                    <p>Controlled environments for pharmaceutical production.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100"
                    src="{{ asset('images/medium-shot-woman-working-beer-factory.jpg') }}"
                    alt="Lab Equipment">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Lab Equipment</h5>
                    <p>State-of-the-art equipment for R&amp;D.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100"
                    src="{{ asset('images/factory-workers-white-lab-suits-black-latex-gloves-working-with-some-modern-equipment-very-clean-room.jpg') }}"
                    alt="Quality Testing">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Quality Testing</h5>
                    <p>Certified quality testing.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100"
                    src="{{ asset('images/professional-technologist-white-protective-uniform-controlling-industrial-process-production-plant.jpg') }}"
                    alt="Production Line">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Production Line</h5>
                    <p>Flexible and scalable production lines.</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div class="row">
        @php
            $services = [
                [
                    'name' => 'Quality Control Testing',
                    'short' => 'Physical and chemical testing.',
                    'long' => 'Stability, purity, dissolution and other QC tests.',
                ],
                [
                    'name' => 'GMP Contract Manufacturing',
                    'short' => 'GMP-compliant production for third parties.',
                    'long' => 'Pilot and commercial-scale manufacturing with full validation.',
                ],
                [
                    'name' => 'Formulation Development',
                    'short' => 'Development of new pharmaceutical products.',
                    'long' => 'Pre-formulation studies, optimization and technology transfer.',
                ],
                [
                    'name' => 'Controlled Storage',
                    'short' => 'Temperature-controlled warehouse storage.',
                    'long' => 'Continuous environmental monitoring, reports and audit support.',
                ],
            ];

        @endphp

        @foreach ($services as $index => $service)
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service['name'] }}</h5>
                        <p class="card-text">{{ $service['short'] }}</p>
                        <button class="btn btn-link p-0 mb-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#service{{ $index }}">
                            More info
                        </button>
                        <div class="collapse" id="service{{ $index }}">
                            <p class="small">{{ $service['long'] }}</p>
                        </div>
                        <a href="{{ route('client.booking_form') }}" class="btn btn-primary">Book Service</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
