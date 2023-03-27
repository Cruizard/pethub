@extends('master')
@section('content')
    <h1>Animal Detail {{$animals->id}}</h1>
    <div class="d-flex justify-content-center my-5">
        <div class="card col-sm-6 mx-3 w-50 p-5 bg-dark text-white">
            <div class="card-body d-flex justify-content-center">
                @if ($animals->image)
                    <style>
                        .resize{
                            width:40%;
                            height:360px;
                        }
                        img {
                            width:100%;
                            height:100%;
                            object-fit:cover;
                        }
                    </style>
                    <div class = "resize">
                        <img src="{{ asset('storage/' . $animals->image) }}" alt="animal photo">
                    </div>
                @else
                    <i class='fas fa-id-badge' style='font-size:180px' class="mx-5"></i>
                @endif
                {{-- <i class='fas fa-id-badge' style='font-size:180px' class="mx-5"></i> --}}
                <div class="data m-4 align-items-center">
                    <h5>Name: {{$animals->name}}</h5>
                    <h5>Breed: {{$animals->breed}}</h5>
                    <h5>Age: {{$animals->age}}</h5>
                    <h5>Center: {{$animals->center->name}}</h5>
                </div>
            </div>
            
            <div class="d-flex justify-content-between">
                <a href="/animals" class="btn btn-dark mt-4 mx-2"><< Back</a>
                <div class="d-flex justify-content-end">
                    <a href="/animals/{{$animals->id}}/edit" class="btn btn-orange btn-info mt-4 mx-2">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection