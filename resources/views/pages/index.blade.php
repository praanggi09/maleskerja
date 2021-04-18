@extends('layouts.app')

@section('title', 'Branding Consultant, Branding Agency')

@section('content')
<section class="hero mb-3 text-right py-5">
  <div class="container">
    <div class="row">
      <div class="col-5">
        <h1 class="text-light text-left" style="font-weight: lighter">
          The Art of Building
          <br />
          Sustainable Brands.
        </h1>
      </div>
    </div>
  </div>
</section>

<section class="description">
  <div class="container">
    <div class="row my-5">
      <div class="col-6 my-5">
        <div class="row px-3">
          <h5 class="mx-4">
            Males Kerja Creative
            <br />
            Branding Consultant Agency Indonesia
          </h5>
        </div>
        <div class="row px-3 my-1">
          <div class="col-1 mx-4 my-4 border-bottom">
          </div>
        </div>
        <div class="row px-3">
          <p class="mx-4 pr-4">
            Males Kerja Creative is a branding agency located in the heart of Jakarta, Indonesia. We specialise in
            branding,
            design,
            signage and marketing strategy. Our services include graphic design, corporate identity, brand guidelines,
            advertising
            and media. Our digital services include website design and development, photography documentation and video
            production.
          </p>
        </div>
      </div>
      <div class="col-6 my-5">
        <div class="row px-3">
          <h5 class="mx-4">
            Combining design +
            <br />
            powerful business strategy
          </h5>
        </div>
        <div class="row px-3 my-1">
          <div class="col-1 mx-4 my-4 border-bottom">
          </div>
        </div>
        <div class="row px-3">
          <p class="mx-4 pr-4">
            We help businesses build their brands and improve their business performances through design + great
            marketing strategy.
            Our passion is not to make your brand looks great, but to create a strong foundation whether your brand is
            able to add
            value to the society. We focus on the impact of the design not just how it looks.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-quote">
  {{-- <div class="container"> --}}
  <div class="row px-5 bg-secondary">
    <div class="col-12 my-5 text-center">
      <h1>
        "
      </h1>
    </div>
    <div class="col-6 offset-3 mb-5 text-center">
      <h5 class="px-5">
        We believe great branding incorporates great design, but great design doesn't make a great brand. It takes
        more
        than
        great design to bring your brand to life.
      </h5>
      <h6 class="mt-5">
        - Males Kerja
      </h6>
    </div>
  </div>
  {{-- </div> --}}
</section>

{{-- Expertise --}}
<section class="expertise">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12 my-5">
        <h3 class="text-center mx-auto mt-4">
          Our Expertise
        </h3>
      </div>
      <div class="row mb-5" data-aos="fade-up" data-aos-duration="4000">
        <div class="col-3">
          <figure class="mx-3">
            <img src="https://www.tdc-indonesia.com/img/graphic-icon.png" class="img-fluid px-3" alt="">
          </figure>
          <figcaption class="text-center">
            <h5>Branding & Advertising</h5>
          </figcaption>
        </div>
        <div class="col-3">
          <figure class="mx-3">
            <img src="https://www.tdc-indonesia.com/img/web-icon.png" class="img-fluid px-3" alt="">
          </figure>
          <figcaption class="text-center">
            <h5>Website & Digital</h5>
          </figcaption>
        </div>
        <div class="col-3">
          <figure class="mx-3">
            <img src="https://www.tdc-indonesia.com/img/icons-production.png" class="img-fluid px-3" alt="">
          </figure>
          <figcaption class="text-center">
            <h5>Photo & Video Production</h5>
          </figcaption>
        </div>
        <div class="col-3">
          <figure class="mx-3">
            <img src="https://www.tdc-indonesia.com/img/icons-signage.png" class="img-fluid px-3" alt="">
          </figure>
          <figcaption class="text-center">
            <h5>Legal</h5>
          </figcaption>
        </div>
      </div>
    </div>
    <div class="row mx-3 border-bottom">
      <div class="col-12 mb-5 pb-5 text-center">
        <a href="#" class="text-danger mx-5 d-inline-block text-decoration-none">
          <i>When to reach us?</i>
        </a>
      </div>
    </div>

  </div>

</section>

{{-- Clients --}}
<section class="proud-client">
  <div class="container">
    <div class="row mb-5 border-bottom">
      <div class="col-12 my-5">
        <h3 class="display-5 text-center mx-auto mt-4">Proud Clients</h3>
      </div>
      <div class="row mb-5 d-flex justify-content-between">
        <div class="col-md-2 my-3 align-self-center clients" data-aos="fade-up" data-aos-duration="4000">
          <img src="{{ url('frontend/images/hiber.jpg') }}" class="img-fluid img-clientstyle px-md-3 mx-auto">
        </div>
        <div class="col-md-2 my-3 align-self-center clients" data-aos="fade-up" data-aos-duration="5000">
          <img src="{{ url('frontend/images/kaloli.jpg') }}" class="img-fluid img-clientstyle px-md-3 mx-auto">
        </div>
        <div class="col-md-2 my-3 align-self-center clients" data-aos="fade-up" data-aos-duration="6000">
          <img src="{{ url('frontend/images/warkop.jpg') }}" class="img-fluid img-clientstyle px-md-3 mx-auto">
        </div>
        <div class="col-md-2 my-3 align-self-center clients" data-aos="fade-up" data-aos-duration="7000">
          <img src="{{ url('frontend/images/mangkok.jpg') }}" class="img-fluid img-clientstyle px-md-3 mx-auto">
        </div>
        <div class="col-md-2 my-3 align-self-center clients" data-aos="fade-up" data-aos-duration="8000">
          <img src="{{ url('frontend/images/gbfoods.jpg') }}" class="img-fluid img-clientstyle px-md-3 mx-auto">
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Journal --}}
<section class="journal">
  <div class="container">
    <div class="row mt-5 mb-3 mx-0 border-bottom">
      <div class="col-12 text-center my-3">
        <h2>
          The Branding Journal
        </h2>
      </div>
      <div class="row mt-5 pb-5">
        <div class="col-md-4 no-border pb-3">
          <a href="https://www.tdc-indonesia.com/blog/read/the-main-elements-of-brand-communication-strategy">
            <div class="img-portfolio-container px-3"
              style="background-image:url(https://www.tdc-indonesia.com/img/uploads/blog/1050000082/480x240/2883167bc9a12948611b963abc062377.jpg);background-position:center;background-size:cover;background-repeat:none;">
            </div>
          </a>
          <div class="pt-4">
            <a href="https://www.tdc-indonesia.com/blog/read/the-main-elements-of-brand-communication-strategy">
              <h4 class="spaced text-capitalize">The Main Elements of Brand Communication Strategy</h4>
            </a>
          </div>
          <p class="py-3 spaced blog-highlights">
            Brand communications is the bridge between your brand and your target audience. It serves as a guide for all
            types
            of in...</p>
          <a href="https://www.tdc-indonesia.com/blog/read/the-main-elements-of-brand-communication-strategy"
            class="active-link">READ MORE</a>
        </div>
        <div class="col-md-4 no-border pb-3">
          <a href="https://www.tdc-indonesia.com/blog/read/the-main-elements-of-brand-communication-strategy">
            <div class="img-portfolio-container px-3"
              style="background-image:url(https://www.tdc-indonesia.com/img/uploads/blog/1050000082/480x240/2883167bc9a12948611b963abc062377.jpg);background-position:center;background-size:cover;background-repeat:none;">
            </div>
          </a>
          <div class="pt-4">
            <a href="https://www.tdc-indonesia.com/blog/read/the-main-elements-of-brand-communication-strategy">
              <h4 class="spaced text-capitalize">The Main Elements of Brand Communication Strategy</h4>
            </a>
          </div>
          <p class="py-3 spaced blog-highlights">
            Brand communications is the bridge between your brand and your target audience. It serves as a guide for all
            types
            of in...</p>
          <a href="https://www.tdc-indonesia.com/blog/read/the-main-elements-of-brand-communication-strategy"
            class="active-link">READ MORE</a>
        </div>
        <div class="col-md-4 no-border pb-3">
          <a href="https://www.tdc-indonesia.com/blog/read/the-main-elements-of-brand-communication-strategy">
            <div class="img-portfolio-container px-3"
              style="background-image:url(https://www.tdc-indonesia.com/img/uploads/blog/1050000082/480x240/2883167bc9a12948611b963abc062377.jpg);background-position:center;background-size:cover;background-repeat:none;">
            </div>
          </a>
          <div class="pt-4">
            <a href="https://www.tdc-indonesia.com/blog/read/the-main-elements-of-brand-communication-strategy">
              <h4 class="spaced text-capitalize">The Main Elements of Brand Communication Strategy</h4>
            </a>
          </div>
          <p class="py-3 spaced blog-highlights">
            Brand communications is the bridge between your brand and your target audience. It serves as a guide for all
            types
            of in...</p>
          <a href="https://www.tdc-indonesia.com/blog/read/the-main-elements-of-brand-communication-strategy"
            class="active-link">READ MORE</a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
