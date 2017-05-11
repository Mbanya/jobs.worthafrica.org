@extends('master.index')
@section('content')
    <div class="col-md-9 jobs-container">
        @include('posts.partials.search')
        <div class="row">
            <h1 class="content-heading">{{ $post->title }}</h1>
            <div class="jobs-list">
                <div class="media job-content">
                    <div class="media-left hidden-sm hidden-xs">
                        <a href="{{ route('users.profile', ['username' => $post->user->username]) }}">
                            <img class="media-object" src="{{ Resize::avatar($post->user,'listingAvatar') }}" alt="{{ $post->user->fullname }}">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">
                            <a href="{{ route('posts.main',['id' => $post->id, 'slug' => $post->slug]) }}">{{ $post->title }}</a>
                        </h2>
                        <p><i>{{ t('by') }}: <a href="{{ route('users.profile', ['username' => $post->user->username]) }}">{{ $post->user->fullname }}</a></i>
                            @if(Sentinel::check() && Sentinel::getUser()->id == $post->user->id)
                                | <a href="{{ route('posts.edit', ['id' => $post->id, 'Job_title' => $post->Job_title]) }}">{{ t('Edit') }}</a>
                            @endif
                        </p>
                        <div class="job-info">
                            @if($post->tags)
                                <ul class="list-inline tags-list">
                                    @foreach(explode(',',$post->tags) as $tag)
                                        <li><a href="{{ route('posts.list', ['tag' => $tag]) }}"><span class="label label-default"><i class="fa fa-tag"></i> {{ $tag }}</span></a></li>
                                    @endforeach
                                </ul>
                            @endif
                            <div>
                                <a href="{{ route('posts.list',['type' => $post->type->job_type]) }}"><span class="label label-default"><i class="fa fa-th-large"></i> {{ $post->type->name }}</span></a>
                                <span class="country-tag">
                                        @if($post->is_remote)
                                        <a href="{{ route('posts.list', ['remote' => true]) }}"><span class="label label-default"><i class="fa fa-globe"></i> {{ t('Remote / Anywhere') }}</span></a>
                                    @else
                                        @if($post->city)<a href="{{ route('posts.list', ['city' => $post->city]) }}"><span class="label label-default"><i class="fa fa-map-marker"></i> {{ $post->city }}</span></a>@endif
                                        @if($post->state)<a href="{{ route('posts.list', ['state' => $post->state]) }}"><span class="label label-default"><i class="fa fa-location-arrow"></i> {{ $post->state }}</span></a>@endif
                                        @if($post->country)<a href="{{ route('posts.list', ['country' => $post->country]) }}"><span class="label label-default"><i class="fa fa-globe"></i> {{ $post->country }}</span></a>@endif
                                    @endif
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="job-full-description">
                <div class="media job-content">
                    <div class="media-body">
                        {!! parseDown($post->Qualification_description) !!}
                        @include('posts.partials.apply')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('posts.partials.sidebar')
    <div class="clearfix"></div>
@endsection