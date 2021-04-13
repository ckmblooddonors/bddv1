
<h5>Carosoul Slide 1</h5>
<div class="form-group row">
    <label for="slide1_url" class="col-md-4 col-form-label text-md-right">{{ __('Slide 1 Image URL') }}</label>

    <div class="col-md-6">
        <input id="slide1_url" type="text" class="form-control @error('slide1_url') is-invalid @enderror" name="slide1_url" value="{{ old('slide1_url') ?? optional($data)->parts['slide1_url'] ?? ''  }}" autocomplete="slide1_url" autofocus >

        @error('slide1_url')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="slide1_title" class="col-md-4 col-form-label text-md-right">{{ __('Slide 1 Title') }}</label>

    <div class="col-md-6">
        <input id="slide1_title" type="text" class="form-control @error('slide1_title') is-invalid @enderror" name="slide1_title" value="{{old('slide1_title') ?? optional($data)->parts['slide1_title'] ?? ''  }}" autocomplete="slide1_title" autofocus >

        @error('slide1_title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="slide1_subtitle" class="col-md-4 col-form-label text-md-right">{{ __('Slide 1 Subtitle') }}</label>

    <div class="col-md-6">
        <input id="slide1_subtitle" type="text" class="form-control @error('slide1_subtitle') is-invalid @enderror" name="slide1_subtitle" value="{{ old('slide1_subtitle') ?? optional($data)->parts['slide1_subtitle'] ?? '' }}" autocomplete="slide1_subtitle" autofocus >

        @error('slide1_subtitle')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<hr>
<h5>Carosoul Slide 2</h5>
<div class="form-group row">
    <label for="slide2_url" class="col-md-4 col-form-label text-md-right">{{ __('Slide 2 Image URL') }}</label>

    <div class="col-md-6">
        <input id="slide2_url" type="text" class="form-control @error('slide2_url') is-invalid @enderror" name="slide2_url" value="{{ old('slide2_url') ?? (optional($data)->parts['slide2_url'] ?? '') }}" autocomplete="slide2_url" autofocus >

        @error('slide2_url')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="slide2_title" class="col-md-4 col-form-label text-md-right">{{ __('Slide 2 Title') }}</label>

    <div class="col-md-6">
        <input id="slide2_title" type="text" class="form-control @error('slide2_title') is-invalid @enderror" name="slide2_title" value="{{ old('slide2_title') ?? (optional($data)->parts['slide2_title'] ?? '') }}" autocomplete="slide2_title" autofocus >

        @error('slide2_title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="slide2_subtitle" class="col-md-4 col-form-label text-md-right">{{ __('Slide 2 Subtitle') }}</label>

    <div class="col-md-6">
        <input id="slide2_subtitle" type="text" class="form-control @error('slide2_subtitle') is-invalid @enderror" name="slide2_subtitle" value="{{ old('slide2_subtitle') ?? (optional($data)->parts['slide2_title'] ?? '') }}" autocomplete="slide2_subtitle" autofocus >

        @error('slide2_subtitle')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<hr>
<h5>Carosoul Slide 3</h5>
<div class="form-group row">
    <label for="slide3_url" class="col-md-4 col-form-label text-md-right">{{ __('Slide 3 Image URL') }}</label>

    <div class="col-md-6">
        <input id="slide3_url" type="text" class="form-control @error('slide3_url') is-invalid @enderror" name="slide3_url" value="{{ old('slide3_url') ?? (optional($data)->parts['slide3_url'] ?? '') }}" autocomplete="slide3_url" autofocus >

        @error('slide3_url')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="slide3_title" class="col-md-4 col-form-label text-md-right">{{ __('Slide 3 Title') }}</label>

    <div class="col-md-6">
        <input id="slide3_title" type="text" class="form-control @error('slide3_title') is-invalid @enderror" name="slide3_title" value="{{ old('slide3_title') ?? (optional($data)->parts['slide3_title'] ?? '') }}" autocomplete="slide3_title" autofocus >

        @error('slide3_title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="slide3_subtitle" class="col-md-4 col-form-label text-md-right">{{ __('Slide 3 Subtitle') }}</label>

    <div class="col-md-6">
        <input id="slide3_subtitle" type="text" class="form-control @error('slide3_subtitle') is-invalid @enderror" name="slide3_subtitle" value="{{ old('slide3_subtitle') ?? (optional($data)->parts['slide3_subtitle'] ?? '') }}" autocomplete="slide3_subtitle" autofocus >

        @error('slide3_subtitle')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>