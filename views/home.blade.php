@extends('layouts.app')

@section('title', trans('messages.home'))

@section('content')
    <div class="home-background mb-4 p-4" style="background: url('{{ setting('background') ? image_url(setting('background')) : 'https://via.placeholder.com/2000x500' }}') no-repeat center; background-size: cover">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center text-center text-white h-100">
                <div class="col-md-8">
                    @if(config('theme.title'))
                        <h1 class="">{{ config('theme.title') }}</h1>
                        
                        <style>
        /* Scroll Bar */
        /* width */
        ::-webkit-scrollbar {
          width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
          box-shadow: inset 0 0 5px grey; 
          border-radius: 0px;
        }
        
        /* Handle */
        ::-webkit-scrollbar-thumb {
          background: #982727; 
          border-radius: 15px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
          background: #DC3B3B; 
        }
        /* Scroll Bar */
/* Google Fonts */
@import url(https://fonts.googleapis.com/css?family=Anonymous+Pro);

/* Global */

.line-1{
    position: relative;
    top: 50%;  
    width: 24em;
    margin: 0 auto;
    border-right: 2px solid rgba(255,255,255,.75);
    font-size: 180%;
    text-align: center;
    white-space: nowrap;
    overflow: hidden;
    transform: translateY(-50%);    
}

/* Animation */
.anim-typewriter{
  animation: typewriter 4s steps(44) 1s 1 normal both,
             blinkTextCursor 500ms steps(44) infinite normal;
}
@keyframes typewriter{
  from{width: 0;}
  to{width: 15em;}
}
@keyframes blinkTextCursor{
  from{border-right-color: rgba(255,255,255,.75);}
  to{border-right-color: transparent;}
}
                        </style>
                    @endif
                    @if(config('theme.subtitle'))
                        <h3 class="">{{ config('theme.subtitle') }}</h3>
                    @endif
                    @if(config('theme.ip'))
                    
                    <div class="input-group mb-3" style="margin-right: auto; margin-left: auto; margin-top: auto; margin-bottom: auto;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">IP :</span>
                                </div>
                                <input type="text" class="form-control @error('color') is-invalid @enderror" id="ipInput" name="ip" value="{{ config('theme.ip') }}" disabled />
                                </div>
                                </div>   
                                
                                @endif
                        
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                
                @foreach($posts as $post)
                    <div class="post-preview mb-3">
                        @if($post->image !== null)
                            <img src="{{ $post->imageUrl() }}" class="post-img img-fluid" alt="{{ $post->title }}">
                        @endif

                        <div class="post-body" style="background: #eeeeee; box-shadow: 10px 5px 5px #ffce805d">
                            <h3><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h3>
                            @if($post->image === null)
                                <p>{{ Str::limit(strip_tags($post->content), 250, '...') }}
                                    <a href="{{ route('posts.show', $post->slug) }}">{{ trans('messages.posts.read') }}</a>
                                </p>
                            @endif

                            {{ trans('messages.posts.posted', ['date' => format_date($post->published_at), 'user' => $post->author->name]) }}
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-4">
                @if(config('theme.discord-id'))
                    <iframe src="https://discordapp.com/widget?id={{ config('theme.discord-id') }}&theme=dark" title="Discord" height="500px" class="discord-widget shadow mb-3" allowtransparency="true"></iframe>
                @endif

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://platform.twitter.com/widgets.js" async></script>
@endpush

