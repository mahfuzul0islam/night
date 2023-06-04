<x-dashbord>
    <form action="{{route('profileupdate')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Profile image</label>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$user->name}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="bio">bio</label>
            <textarea name="bio" id="bio" class="form-control" cols="30" rows="10">{{$user->bio}}</textarea>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{$user->email}}" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="number">Number</label>
            <input type="text" class="form-control" value="{{$user->number}}" name="number">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        
    </form>
</x-dashbord>
