@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2015/09/17/17/25/code-944499_1280.jpg" width="700" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-5xl pb4">
            Learn how to write Laravel code
        </h2>
    </div>
</div>
@endsection