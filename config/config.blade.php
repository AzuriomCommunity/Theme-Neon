@extends('admin.layouts.admin')

@section('title', 'Neon config')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.themes.config', $theme) }}" method="POST">
                @csrf



               <!-- -->

                <div class="form-group">
                    <label for="titleInput">{{ trans('theme::neon.config.title') }}</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="titleInput" placeholder="ex : Hypixel" name="title" value="{{ old('title', config('theme.title')) }}">

                    @error('title')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="subtitleInput">{{ trans('theme::neon.config.subtitle') }}</label>
                    <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitleInput" name="subtitle" placeholder="ex : {{ trans('theme::neon.config.ex-subtitle') }}" value="{{ old('subtitle', config('theme.subtitle')) }}">

                    @error('subtitle')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="ipInput">{{ trans('theme::neon.config.ip') }}</label>
                    <input type="text" class="form-control @error('ip') is-invalid @enderror" placeholder="play.exemple.fr" id="ipInput" name="ip" value="{{ old('ip', config('theme.ip')) }}">

                    @error('subtitle')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    <br>
                <!--<div class="form-group">
                    <label for="subtitleInput">{{ trans('theme::neon.config.color') }}</label>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">#</span>
                    </div>
                    <input type="text" class="form-control @error('color') is-invalid @enderror" id="colorInput" name="color" value="{{ old('color', config('theme.color')) }}">

                    </div>   
                    @error('color')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>-->
                <br>
                <div class="trait" style="background-color: rgb(143, 143, 143);
height: 2pt;
margin-top: -15px;
width: 90%;
margin-right: auto;
margin-left: auto;"></div>
<br>
    <p style="font-size: 25px; margin-left: 10px;">{{ trans('theme::neon.config.sociaux') }}</p>
    <br>
                
                <div class="form-group">
                    <label for="discordInput">{{ trans('theme::neon.config.discord') }}</label>
                    <input type="text" class="form-control @error('discord-id') is-invalid @enderror" id="discordInput" placeholder="ex : 676016332709560330" name="discord-id" value="{{ old('discord-id', config('theme.discord-id')) }}">

                    @error('discord-id')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="discordInput">{{ trans('theme::neon.config.discord-invite') }}</label>
                    <input type="text" class="form-control @error('discord-invite') is-invalid @enderror" id="discord-inviteInput" placeholder="ex : https://discord.gg/UnDFmrk" name="discord-invite" value="{{ old('discord-invite', config('theme.discord-invite')) }}">

                    @error('discord-invite')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="discordInput">{{ trans('theme::neon.config.ts') }}</label>
                    <input type="ts" class="form-control @error('ts') is-invalid @enderror" id="tsInput" placeholder="ex : ts.exemple.com" name="ts" value="{{ old('ts', config('theme.ts')) }}">

                    @error('ts')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="twitterInput">{{ trans('theme::neon.config.twitter') }}</label>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input type="text" class="form-control @error('twitter') is-invalid @enderror" id="twitterInput" placeholder="ex : Pseudo_Dev" name="twitter" value="{{ old('twitter', config('theme.twitter')) }}">

                    </div>   
                    @error('twitter')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="twitterInput">{{ trans('theme::neon.config.youtube') }}</label>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">https://www.youtube.com/channel/</span>
                    </div>
                    <input type="text" class="form-control @error('youtube') is-invalid @enderror" id="youtubeInput" placeholder="ex : UCSES63opNRNZM55pe8QHmfw" name="youtube" value="{{ old('youtube', config('theme.youtube')) }}"><div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">?view_as=subscriber</span>
                    </div>

                    </div>   
                    @error('youtube')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> {{ trans('messages.actions.save') }}</button>
            </form>
        </div>
    </div>
    <br>
    

@endsection
