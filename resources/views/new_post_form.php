@extends('layout')

@section('main-content')
    <div class="Placard">
        <div>Make Post</div>

        <div>
            <form action="/newpost" method="post">
                <?php echo csrf_field() ?>

                <input type="text" name="postContent" placeholder="What's on your mind?">

                <input
                    class="btn btn-primary"
                    type="submit"
                    name="submit"
                    value="Share"
                />
            </form>
        </div>
    </div>
@endsection