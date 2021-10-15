@include('layout.header')
@foreach ($posts as $item)
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">{{ $item->title }}</h1>
            <p class="lead my-3">{{ $item->posted_at }}</p>
            <p class="lead my-3">{{ $item->tags }}</p>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/1250x500?theme=thumb"
                alt="Thumbnail [1250x500]" style="width: 1250px; height: 500px;" src={{ $item->image }}
                data-holder-rendered="true">
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <p class="card-text mb-auto">{{ $item->content }}</p>
        </div>
    </div>
@endforeach
@include('layout.footer')
