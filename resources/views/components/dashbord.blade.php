<x-app>
    <section class="blog_area section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="card  container">
                        <div class="card-body text-center">
                            <div class="d-flex mx-auto w-100">
                                <img src="{{ Storage::url(auth()->user()->image)}}" class="mr-4" height="80" alt="">
                                <div class="">
                                    <h3>{{ ucwords(auth()->user()->name) }}</h3>
                                    <p>{{ auth()->user()->email }}</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <a href="{{route('profile')}}">Porfile</a>
                                </li>
                                <hr>
                                <li>
                                    <a href="{{route('dashbordblog')}}" class="">Blogs</a>
                                </li>
                                <hr>
                                <li>
                                    <a href="{{ route('category.index') }}" class="">Categories</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">{{ $slot }}</div>
            </div>
        </div>
    </section>
</x-app>
