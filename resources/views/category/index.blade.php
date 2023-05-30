<x-dashbord>

    <table class="table">
        <tr class="text-center">
            <td colspan="3"><a href="{{ route('category.create') }}" class="btn btn-outline-info">Create Category</a>
            </td>
        </tr>
        <tr>
            <th>
                Id
            </th>
            <th>
                Name
            </th>
            <th>
                Edit
            </th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>
                    {{ $category->id }}
                </td>
                <td>
                    {{ $category->title }}
                </td>
                <td class="row">
                    <a href="{{ route('category.edit', $category) }}" class="btn btn-outline-danger">edit</a>
                    <form action="{{ route('category.delete', $category) }}" class="col-md-6" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-danger">delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-dashbord>
