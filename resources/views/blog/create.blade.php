@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Create Post
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <!-- enctype lets application know that file will be uploaded -->
    <!-- @csrf is for cross site request forgerie -->
    <form action="/blog" method="POST" enctype="multipart/form-data">
        @csrf
    </form>
</div>

@endsection