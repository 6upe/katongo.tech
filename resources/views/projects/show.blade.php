@extends('layouts.app')

@section('content')
<div class="untree_co-section untree_co-section-4 pb-0" id="portfolio-section">
    <div class="container">
        <div class="portfolio-single-wrap unslate_co--section" id="portfolio-single-section">
            <div class="portfolio-single-inner">
                <div class="row mb-5 align-items-stretch">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div id="carouselExample" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($project->images as $index => $image)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        <img src="{{ asset('storage/' . $image) }}" class="d-block w-100" alt="Image">
                                    </div>
                                @endforeach
                                @foreach ($project->videos as $index => $video)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        <video controls class="d-block w-100">
                                            <source src="{{ asset('storage/' . $video) }}" type="video/mp4" autoplay muted>
                                        </video>
                                    </div>
                                @endforeach
                            </div>
                            
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 pl-lg-5">
                        <h3 class="heading-portfolio-single-h2 text-black">{{ $project->title }}</h3>
                        <div class="row mb-3">
                            
                            <div class="col-sm-6 col-md-6 col-lg-6 mb-4">

                                <div class="detail-v1">
                                    <span class="detail-label">Project Date</span>
                                    <span class="detail-val">{{ $project->project_date->format('F j, Y') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 mb-4">
                                <div class="detail-v1">
                                    <span class="detail-label">Role</span>
                                    <span class="detail-val">{{ $project->role }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 mb-4">
                                <div class="detail-v1">
                                    <span class="detail-label">Client</span>
                                    <span class="detail-val">{{ $project->client }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 mb-4">
                                <div class="detail-v1">
                                    <span class="detail-label">Visit</span>
                                    <span class="detail-val"><a href="{{ $project->link }}" target="_blank">{{ $project->link }}</a></span>
                                </div>
                            </div>
                        </div>
                      
                        <p>{{ $project->description }}</p>
                    </div>
                </div>

                 <!-- Buttons for Next Project and Back to All Projects -->
                 <div class="mt-4">
                    @if($nextProject)
                        <a href="{{ route('projects.show', $nextProject->id) }}" class="btn btn-primary">
                            Next Project
                        </a>
                    @else
                        <span class="btn btn-secondary disabled">No Next Project</span>
                    @endif
                    <a href="{{ route('projects.index') }}" class="btn btn-secondary ml-3">
                        Back to All Projects
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
