@extends('layout')

@section('main-content')
    <div class="mt-3">
        <h1>Profile Form</h1>
        <div class="mt-3" >
            <form action="/profile" method="post">
                <?php echo csrf_field() ?>
                @include('text_input', [
                    'name' => 'occupation',
                    'default' => $profile->occupation,
                    'label' => 'Occupation'
                ])

                @include('text_input', [
                    'name' => 'education',
                    'default' => $profile->education,
                    'label' => 'Education'
                ])

                @include('text_input', [
                    'name' => 'location',
                    'default' => $profile->location,
                    'label' => 'Location'
                ]) 

                @include('text_input', [
                    'name' => 'hometown',
                    'default' => $profile->hometown,
                    'label' => 'Hometown'
                ]) 

                @include('text_input', [
                    'name' => 'pic',
                    'default' => $profile->pic,
                    'label' => 'Picture'
                ]) 

                @include('text_input', [
                    'name' => 'coverPic',
                    'default' => $profile->coverPic,
                    'label' => 'Cover Picture'
                ]) 

                <input
                    class="btn btn-primary"
                    type="submit"
                    name="submit"
                    value="Submit"
                />
            </form>
        </div>
    </div>
@endsection
