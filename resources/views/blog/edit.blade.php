<x-dashbord>
    <div class="container">
        <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="image" class="text-info">Image</label>
                <input value="{{ $blog->image }}" type="file" class="from-control" name='image'>
                <a href="{{ Storage::url($blog->image) }}">View Image</a>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input value="{{ $blog->title }}" type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" id="body" cols="30" rows="10">{{ $blog->body }}</textarea>
            </div>
            <div class="form-group">
                <label for="categorys">Categories</label>
                <select class="form-control col-md-3" id="categorys" name="category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if ($blog->category_id == $category->id) selected @endif>
                            {{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-info">Submit</button>
        </form>
    </div>
</x-dashbord>
