<x-dashbord>
    <div class="container">
        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="image" class="text-info">Image</label>
                <input type="file" class="from-control" name='image'>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="categorys">Categories</label>
                <select class="form-control col-md-3" id="categorys" name="category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-info">Submit</button>
        </form>
    </div>
</x-dashbord>
