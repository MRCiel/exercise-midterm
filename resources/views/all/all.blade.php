@include('layout.header')


@foreach ($posts as $item)
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">{{ $item->category }}</strong>
                    <h3 class="mb-0">
                        <a class="text-dark">{{ $item->title }}</a>
                    </h3>
                    <div class="mb-1 text-muted"> {{ $item->posted_at }}</div>
                    <p class="card-text mb-auto">{{ $item->leading }}</p>
                    <a href="/post {{ $item->id }}">Continue Reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                    alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src={{ $item->image }}
                    data-holder-rendered="true">
            </div>
        </div>
    </div>
@endforeach

@include('layout.footer')
