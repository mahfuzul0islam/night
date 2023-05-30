<x-dashbord>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Title</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        @foreach ($blogs as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td><img class="card-img rounded-0" height="40" style="width: 70px" src="{{Storage::url($blog->image)}}" alt=""></td>
                <td>{{ $blog->title }}</td>
                <td>
                    <form action="{{ route('blog.delete', $blog) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-danger">delete</button>
                    </form>
                </td>
                <td><a href="{{route('blog.edit',$blog->id)}}" class="btn ml-2 px-4 btn-warning">edit</a></td>
            </tr>
        @endforeach
    </table>
</x-dashbord>
