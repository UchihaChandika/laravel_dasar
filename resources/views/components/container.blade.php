@props(['posts'])

<div class="container">
    <div class="row">

        <!-- Blog entries-->
        <div class="col-lg-8">

            @if ($posts->isNotEmpty())

                <!-- Featured blog post-->
                <div class="card mb-4">

                    <a href="#">
                        <img class="card-img-top"
                             src="{{ $posts->first()->image }}"
                             alt="{{ $posts->first()->title }}" />
                    </a>

                    <div class="card-body">

                        <div class="small text-muted">
                            {{ $posts->first()->created_at->format('F d, Y') }}
                        </div>

                        <h2 class="card-title">
                            {{ $posts->first()->title }}
                        </h2>

                        <p class="card-text">
                            {{ $posts->first()->excerpt }}
                        </p>

                        <a class="btn btn-primary" href="#">
                            Read more →
                        </a>

                    </div>
                </div>

                <!-- Other blog posts-->
                <div class="row">

                    @foreach ($posts->skip(1) as $post)

                        <div class="col-lg-6">

                            <div class="card mb-4">

                                <a href="#">
                                    <img class="card-img-top"
                                         src="{{ $post->image }}"
                                         alt="{{ $post->title }}" />
                                </a>

                                <div class="card-body">

                                    <div class="small text-muted">
                                        {{ $post->created_at->format('F d, Y') }}
                                    </div>

                                    <h2 class="card-title h4">
                                        {{ $post->title }}
                                    </h2>

                                    <p class="card-text">
                                        {{ $post->excerpt }}
                                    </p>

                                    <a class="btn btn-primary" href="#">
                                        Read more →
                                    </a>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

                <!-- Pagination-->
                {{ $posts->links() }}

            @else

                <div class="alert alert-info">
                    Belum ada artikel.
                </div>

            @endif

        </div>

        <!-- Side widgets-->
        <div class="col-lg-4">

            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control"
                               type="text"
                               placeholder="Enter search term..." />

                        <button class="btn btn-primary" type="button">
                            Go!
                        </button>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">JavaScript</a></li>
                        <li><a href="#">CSS</a></li>
                    </ul>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">
                    Selamat datang di website blog kami!
                </div>
            </div>

        </div>

    </div>
</div>

<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">
            Copyright &copy; Your Website 2026
        </p>
    </div>
</footer>