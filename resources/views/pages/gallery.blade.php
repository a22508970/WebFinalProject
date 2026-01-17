@extends('layout_master')

@section('content')
    <h1>Gallery</h1>

    <div class="table-responsive">
        <table class="table table-borderless align-middle text-center">
            <tbody>
                <tr>
                    <td><img src="{{ asset('images/businesspeople-office-meeting.jpg') }}" class="img-fluid" alt="View 1">
                    </td>
                    <td><img src="{{ asset('images/factory-workers-white-lab-suits-black-latex-gloves-working-with-some-modern-equipment-very-clean-room.jpg') }}"
                            class="img-fluid" alt="View 2"></td>
                    <td><img src="{{ asset('images/laboratory-supplies-medical-work.jpg') }}" class="img-fluid"
                            alt="View 3"></td>
                </tr>
                <tr>
                    <td><img src="{{ asset('images/people-white-isolating-costumes-working-laboratory.jpg') }}"
                            class="img-fluid" alt="View 2"></td>
                    <td><img src="{{ asset('images/professional-technologist-white-protective-uniform-controlling-industrial-process-production-plant.jpg') }}"
                            class="img-fluid" alt="View 3"></td>
                    <td><img src="{{ asset('images/laboratory-supplies-medical-work.jpg') }}" class="img-fluid"
                            alt="View 3"></td>
                </tr>

            </tbody>
        </table>
    </div>
@endsection
