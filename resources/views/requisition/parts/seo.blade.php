<meta name="description" content="{{(!empty($data->seo) AND !empty($data->seo['description'])) ? $data->seo['description']:($data->patient_name . ' needed '.$data->unit.' unit '. BloodGroupFunction($data->blood_group) .' blood urgently. Please conatact us for donation. Pincode : '.$data->pincode )}}" />
<meta name="keywords" content="{{(!empty($data->seo) AND !empty($data->seo['keywords'])) ? $data->seo['keywords']:('blood donation,blood,donation,ngo,non-profit,emergency blood donation')}}" />
<meta name="author" content="{{(!empty($data->seo) AND !empty($data->seo['author'])) ? $data->seo['author']:config('app.name', 'AlpanA')}}" />
<meta name="copyright" content="{{(!empty($data->seo) AND !empty($data->seo['copyright'])) ? $data->seo['copyright']: config('app.name', 'AlpanA')}}" />
<meta name="application-name" content="{{(!empty($data->seo) AND !empty($data->seo['application_name'])) ? $data->seo['application_name']:config('app.name', 'AlpanA')}}" />
<meta property="og:title" content="{{(!empty($data->seo) AND !empty($data->seo['og_title'])) ? $data->seo['og_title']:( BloodGroupFunction($data->blood_group).' blood '. $data->unit.' unit '.' needed urgently.' )}}" />
<meta property="og:type" content="{{(!empty($data->seo) AND !empty($data->seo['og_type'])) ? $data->seo['og_type']:('website')}}" />
<meta property="og:image" content="{{(!empty($data->seo) AND !empty($data->seo['og_image'])) ? $data->seo['og_image']:RequisitionSeoImgFunction($data->blood_group)}}" />
<meta property="og:url" content="{{(!empty($data->seo) AND !empty($data->seo['og_url'])) ? $data->seo['og_url']: url()->current()}}" />
<meta property="og:description" content="{{(!empty($data->seo) AND !empty($data->seo['og_description'])) ? $data->seo['og_description']:($data->patient_name . ' needed '.$data->unit.' unit '. BloodGroupFunction($data->blood_group) .' blood urgently. Please conatact us for donation. Pincode : '.$data->pincode )}}" />
<meta property="fb:app_id" content="" />
<meta property="og:locale" content="en_US" />
<meta property="og:locale:alternate" content="bn" />
<meta name="twitter:card" content="{{(!empty($data->seo) AND !empty($data->seo['og_title'])) ? $data->seo['og_title']:( BloodGroupFunction($data->blood_group).' blood '. $data->unit.' unit '.' needed urgently.' )}}" />
<meta name="twitter:title" content="{{(!empty($data->seo) AND !empty($data->seo['og_title'])) ? $data->seo['og_title']:( BloodGroupFunction($data->blood_group).' blood '. $data->unit.' unit '.' needed urgently.' )}}" />
<meta name="twitter:description" content="{{(!empty($data->seo) AND !empty($data->seo['twitter_description'])) ? $data->seo['twitter_description']:($data->patient_name . ' needed '.$data->unit.' unit '. BloodGroupFunction($data->blood_group) .' blood urgently. Please conatact us for donation.' )}}" />
<meta name="twitter:image" content="{{(!empty($data->seo) AND !empty($data->seo['twitter_image'])) ? $data->seo['twitter_image']:RequisitionSeoImgFunction($data->blood_group)}}" />