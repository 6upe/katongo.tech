@extends('layouts.app')

@section('content')
<div class="untree_co-section untree_co-section-4 pb-0" id="portfolio-section">
  <div class="container">
      <div class="relative">
          <div class="loader-portfolio-wrap">
              <div class="loader-portfolio"></div>
          </div>
      </div>
      <div id="portfolio-single-holder"></div>

      <div class="portfolio-wrapper">
          <div id="posts" class="row">
              @foreach ($projects as $project)
                  <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                      <a href="{{ route('projects.show', $project->id) }}" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img" data-id="{{ $project->id }}">
                          <div class="overlay">
                              <span class="wrap-icon icon-link2"></span>
                              <div class="portfolio-item-content">
                                  <h3>{{ $project->title }}</h3>
                                  <p>{{ $project->category }}</p>
                              </div>
                          </div>
                          <img src="{{ asset('storage/' . $project->media_paths[0]) }}" class="lazyload img-fluid" alt="Image" />
                      </a>
                  </div>
              @endforeach
          </div>
      </div>
  </div>
</div>

@endsection

@push('scripts')
<script>
    // Get all the portfolio items (images and videos)
    let portfolioItems = document.querySelectorAll('.portfolio-item');
    let index = 0;

    // Function to switch images/videos with transition
    function changeMedia() {
        portfolioItems.forEach(item => {
            // Add transition effect
            item.querySelector('img').style.transition = 'opacity 1s ease-in-out';
            item.querySelector('img').style.opacity = 0; // Fade out the image/video
        });

        // Change to the next media after 2 sections
        setTimeout(() => {
            portfolioItems.forEach(item => {
                // Change the image/video source to the next one
                let mediaPaths = JSON.parse(item.querySelector('a').dataset.mediaPaths); // Assuming media_paths stored as JSON
                let nextMediaIndex = (index + 1) % mediaPaths.length;
                item.querySelector('img').src = '{{ asset('storage/') }}' + mediaPaths[nextMediaIndex];
                
                // Fade it back in after changing
                item.querySelector('img').style.transition = 'opacity 1s ease-in-out';
                item.querySelector('img').style.opacity = 1;
            });

            index = (index + 1) % portfolioItems.length;
        }, 2000); // Wait for 2 seconds before switching images
    }

    // Call the changeMedia function every 2 seconds
    setInterval(changeMedia, 2000);
</script>
@endpush
