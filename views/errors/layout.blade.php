@extends('layouts.app')

@section('content')
    <div class="container content-parent">
        <h1 class="title-block">{{ trans('errors.error') }}</h1>

        <div class="content" style="background-color: black">

            <div class="card-body text-center">
                <h1 style="color: white" class="broken"><span>@yield('code')</span></h1>
                <h2 style="color: white">@yield('title')</h2>
                <p style="color: white">@yield('message')</p>

            <style>
        @import url(https://fonts.googleapis.com/css?family=Exo+2:200i);

:root {
  /* Base font size */  
  
  /* Set neon color */
  --neon-text-color: #f40;
  --neon-border-color: #08f;
}

.content {
  font-weight: 200;
  color: #fff;
  border: 0.4rem solid #fff;
  border-radius: 2rem;
  text-transform: uppercase;
  animation: flicker 1.5s infinite alternate;     
}

.content::-moz-selection {
  background-color: var(--neon-border-color);
  color: var(--neon-text-color);
}

h1::selection {
  background-color: var(--neon-border-color);
  color: var(--neon-text-color);
}

h1:focus {
  outline: none;
}

/* Animate neon flicker */
@keyframes flicker {
    
    0%, 19%, 21%, 23%, 25%, 54%, 56%, 100% {
      
        text-shadow:
            -0.2rem -0.2rem 1rem #fff,
            0.2rem 0.2rem 1rem #fff,
            0 0 2rem var(--neon-text-color),
            0 0 4rem var(--neon-text-color),
            0 0 6rem var(--neon-text-color),
            0 0 8rem var(--neon-text-color),
            0 0 10rem var(--neon-text-color);
        
        box-shadow:
            0 0 .3rem #fff,
            inset 0 0 .3rem #fff,
            0 0 1rem var(--neon-border-color),
            inset 0 0 1rem var(--neon-border-color),
            0 0 2rem var(--neon-border-color),
            inset 0 0 2rem var(--neon-border-color);        
    }
    
    20%, 24%, 55% {        
        text-shadow: none;
        box-shadow: none;
    }    
}
            </style>
                <a href="{{ route('home') }}" class="btn btn-primary">{{ trans('errors.home') }}</a>
            </div>
        </div>
    </div>
@endsection
