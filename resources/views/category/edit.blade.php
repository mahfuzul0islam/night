<x-dashbord>
    <div class="title mb-4">
        <h1>Category Create</h1>
    </div>
    <hr>

    <form action="{{ route('category.update', $category->id) }}" method="post" class="conteiner row ">
        @csrf
        <div class="form-group col-md-8 mb-0">
            <label for="title" class="h4">Title</label>
            <input type="text" value="{{ $category->title }}" class="form-control" name="title">
        </div>
        <div class="col-md-4 d-flex align-items-end">
            <button type="submit" class="btn btn-info ">Submit</button>
        </div>

    </form>
</x-dashbord>
