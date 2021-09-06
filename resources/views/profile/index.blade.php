@extends('layouts.front02')


@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="name mt-3">
                                {{ str_limit($headline->name, 100) }}
                            </div>
                            <div class="introduction mt-3">
                                {{ str_limit($headline->gender, 100) }}
                            </div>                         
                        </div>
                        <div class="col-md-6">
                            <div class="hobby mt-3">
                                {{ str_limit($headline->hobby, 500) }}
                            </div>
                            <div class="introduction mt-3">
                                {{ str_limit($headline->introduction, 500) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="name mt-3">
                                    {{ str_limit($post->name, 100) }}
                                </div>
                                <div class="gender mt-3">
                                    {{ str_limit($post->gender, 100) }}
                                </div>
                                <div class="hobby mt-3">
                                    {{ str_limit($post->hobby, 400) }}
                                </div>
                                <div class="introduction mt-3">
                                    {{ str_limit($post->introduction, 500) }}
                                </div>
                            </div>
                            <div class="image col-md-6 text-right mt-4">
                                @if ($post->image_path)
                                    <img src="{{ asset('storage/image/' . $post->image_path) }}">
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
