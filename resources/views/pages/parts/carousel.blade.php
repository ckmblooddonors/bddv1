<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('{{(!empty($data->parts) AND !empty($data->parts['slide1_url'])) ? $data->parts['slide1_url'] : 'https://res.cloudinary.com/debjit/image/upload/v1616307978/abdd/carosoul/photo-1615461065624-21b562ee5566.jpg'}}')">
          <div class="carousel-caption d-none d-md-block">
            <h3>{{(!empty($data->parts) AND !empty($data->parts['slide1_title'])) ? $data->parts['slide1_title']:__("Donate Blood")}}</h3>
            <p>{{(!empty($data->parts) AND !empty($data->parts['slide1_subtitle'])) ? $data->parts['slide1_subtitle']:__("Donate blood to save a life.")}}</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('{{(!empty($data->parts) AND !empty($data->parts['slide2_url'])) ? $data->parts['slide2_url']:'https://cdn.pixabay.com/photo/2020/11/08/15/47/heart-5724137_960_720.png'}}')">
          <div class="carousel-caption d-none d-md-block">
            <h3>{{(!empty($data->parts) AND !empty($data->parts['slide2_title'])) ? $data->parts['slide2_title']:__("Share")}}</h3>
            <p>{{(!empty($data->parts) AND !empty($data->parts['slide2_subtitle'])) ? $data->parts['slide2_subtitle']:__("Sharing is caring, share with your friends and family, so they can contact us in case they needed a donor.")}}</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('{{(!empty($data->parts) AND !empty($data->parts['slide3_url'])) ? $data->parts['slide3_url']: 'https://cdn.pixabay.com/photo/2015/04/20/21/42/blood-732297_960_720.jpg'}}')">
          <div class="carousel-caption d-none d-md-block">
            <h3>{{(!empty($data->parts) AND !empty($data->parts['slide3_title'])) ? $data->parts['slide3_title']:__("Join Us")}}</h3>
            <p>{{(!empty($data->parts) AND !empty($data->parts['slide3_subtitle'])) ? $data->parts['slide3_subtitle']:__("We do not have enough donor with us, please consider joining us.")}}</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">{{__("Previous")}}</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">{{__("Next")}}</span>
      </a>
    </div>