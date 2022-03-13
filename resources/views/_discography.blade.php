<!-- discography -->
<section class="bg-white-1">
    <div class="container mx-auto py-20">

        <h3 class="text-4xl body-font mb-20">Latest Releases</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            @foreach($albums as $album)
                <a href="releases/{{ $album->slug }}">
                    <div class="album flex justify-center text-6xl">
                        <img width="100%" height="100%" src="storage/galleries/{{ $album->cover }}" alt="Album cover for {{ $album->title }}"/>

                        <div class="album-overlay">

                            <div class="mt-auto album-details">
                                <p class="body-font text-3xl uppercase text-gray-400">{{ $album->artist }}</p>
                                <h3 class="body-font text-4xl uppercase text-gray-100">{{ $album->title }}</h3>
                            </div>
                            
                        </div>
                    </div>
                </a>
            @endforeach

        </div>
    </div>
</section>
<!-- end of discography -->