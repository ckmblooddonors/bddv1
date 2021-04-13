		<hr>
		<h5>SEO</h5>
		<h6>Google	</h6>
		<div class="form-group row">
		    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
		
		    <div class="col-md-6">
		        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{old('description') ?? (!empty($data->seo)? $data->seo['description']:'')  }}" autocomplete="description" autofocus >
		
		        @error('description')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
		    </div>
		</div>
		<div class="form-group row">
		    <label for="keywords" class="col-md-4 col-form-label text-md-right">{{ __('Keywords') }}</label>
		
		    <div class="col-md-6">
		        <input id="keywords" type="text" class="form-control @error('keywords') is-invalid @enderror" name="keywords" value="{{ old('keywords') ?? (!empty($data->seo)? $data->seo['keywords']:'')   }}" autocomplete="keywords" autofocus >
		
		        @error('keywords')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
		    </div>
		</div>
		<div class="form-group row">
		    <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('Author') }}</label>
		
		    <div class="col-md-6">
		        <input id="author" type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ old('author') ?? (!empty($data->seo)? $data->seo['author']:'') }}" autocomplete="author" autofocus >
		
		        @error('author')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
		    </div>
		</div>
		<div class="form-group row">
		    <label for="copyright" class="col-md-4 col-form-label text-md-right">{{ __('Copyright') }}</label>
		
		    <div class="col-md-6">
		        <input id="copyright" type="text" class="form-control @error('copyright') is-invalid @enderror" name="copyright" value="{{ old('copyright') ?? (!empty($data->seo)? $data->seo['copyright']:'') }}" autocomplete="copyright" autofocus >
		
		        @error('copyright')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
		    </div>
		</div>
		<div class="form-group row">
		    <label for="application_name" class="col-md-4 col-form-label text-md-right">{{ __('Application Name') }}</label>
		
		    <div class="col-md-6">
		        <input id="application_name" type="text" class="form-control @error('application_name') is-invalid @enderror" name="application_name" value="{{ old('application_name') ?? (!empty($data->seo)? $data->seo['application_name']:'') }}" autocomplete="application_name" autofocus >
		
		        @error('application_name')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
		    </div>
		</div>

		<hr>
		<h6>Facebook</h6>
		<div class="form-group row">
		    <label for="og_title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
		
		    <div class="col-md-6">
		        <input id="og_title" type="text" class="form-control @error('og_title') is-invalid @enderror" name="og_title" value="{{ old('og_title') ?? (!empty($data->seo)? $data->seo['og_title']:'')  }}" autocomplete="og_title" autofocus >
		
		        @error('og_title')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
		    </div>
		</div>
		<div class="form-group row">
		    <label for="og_type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
		
		    <div class="col-md-6">
		        <input id="og_type" type="text" class="form-control @error('og_type') is-invalid @enderror" name="og_type" value="{{ old('og_type') ?? (!empty($data->seo)? $data->seo['og_type']:'') }}" autocomplete="og_type" autofocus >
		
		        @error('og_type')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
		    </div>
		</div>
		<div class="form-group row">
		    <label for="og_image" class="col-md-4 col-form-label text-md-right">{{ __('Image URL') }}</label>
		
		    <div class="col-md-6">
		        <input id="og_image" type="text" class="form-control @error('og_image') is-invalid @enderror" name="og_image" value="{{ old('og_image') ?? (!empty($data->seo)? $data->seo['og_image']:'')}}" autocomplete="og_image" autofocus >
		
		        @error('og_image')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
		    </div>
		</div>
		
		<div class="form-group row">
		    <label for="og_url" class="col-md-4 col-form-label text-md-right">{{ __('URL') }}</label>
		
		    <div class="col-md-6">
		        <input id="og_url" type="text" class="form-control @error('og_url') is-invalid @enderror" name="og_url" value="{{ old('og_url') ?? (!empty($data->seo)? $data->seo['og_url']:'') }}" autocomplete="og_url" autofocus >
		
		        @error('og_url')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
		    </div>
		</div>


		<div class="form-group row">
		    <label for="og_description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
		
		    <div class="col-md-6">
		        <input id="og_description" type="text" class="form-control @error('og_description') is-invalid @enderror" name="og_description" value="{{ old('og_description') ?? (!empty($data->seo)? $data->seo['og_description']:'') }}" autocomplete="og_description" autofocus >
		
		        @error('og_description')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
		    </div>
		</div>


		<div class="form-group row">
		    <label for="fb_app_id" class="col-md-4 col-form-label text-md-right">{{ __('App ID') }}</label>
		
		    <div class="col-md-6">
		        <input id="fb_app_id" type="text" class="form-control @error('fb_app_id') is-invalid @enderror" name="fb_app_id" value="{{ old('fb_app_id') ?? (!empty($data->seo)? $data->seo['fb_app_id']:'') }}" autocomplete="fb_app_id" autofocus >
		
		        @error('fb_app_id')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
		    </div>
		</div>

		<div class="form-group row">
		    <label for="og_locale" class="col-md-4 col-form-label text-md-right">{{ __('Locale') }}</label>
		
		    <div class="col-md-6">
		        <input id="og_locale" type="text" class="form-control @error('og_locale') is-invalid @enderror" name="og_locale" value="{{ old('og_locale') ?? (!empty($data->seo)? $data->seo['og_locale']:'') }}" autocomplete="og_locale" autofocus >
		
		        @error('og_locale')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
		    </div>
		</div>
		
		<hr>
		<h6>Twitter</h6>
		<div class="form-group row">
		    <label for="twitter_card" class="col-md-4 col-form-label text-md-right">{{ __('Card') }}</label>
		
		    <div class="col-md-6">
		        <input id="twitter_card" type="text" class="form-control @error('twitter_card') is-invalid @enderror" name="twitter_card" value="{{ old('twitter_card') ?? (!empty($data->seo)? $data->seo['twitter_card']:'') }}" autocomplete="twitter_card" autofocus >
		
		        @error('twitter_card')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
		    </div>
		</div>
		<div class="form-group row">
		    <label for="twitter_title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
		
		    <div class="col-md-6">
		        <input id="twitter_title" type="text" class="form-control @error('twitter_title') is-invalid @enderror" name="twitter_title" value="{{ old('twitter_title') ?? (!empty($data->seo)? $data->seo['twitter_title']:'') }}" autocomplete="twitter_title" autofocus >
		
		        @error('twitter_title')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
		    </div>
		</div>
		<div class="form-group row">
		    <label for="twitter_description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
		
		    <div class="col-md-6">
		        <input id="twitter_description" type="text" class="form-control @error('twitter_description') is-invalid @enderror" name="twitter_description" value="{{ old('twitter_description') ?? (!empty($data->seo)? $data->seo['twitter_description']:'') }}" autocomplete="twitter_description" autofocus >
		
		        @error('twitter_description')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
		    </div>
		</div>
		<div class="form-group row">
		    <label for="twitter_image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
		
		    <div class="col-md-6">
		        <input id="twitter_image" type="text" class="form-control @error('twitter_image') is-invalid @enderror" name="twitter_image" value="{{ old('twitter_image') ?? (!empty($data->seo)? $data->seo['twitter_image']:'') }}" autocomplete="twitter_image" autofocus >
		
		        @error('twitter_image')
		            <span class="invalid-feedback" role="alert">
		                <strong>{{ $message }}</strong>
		            </span>
		        @enderror
		    </div>
		</div>
