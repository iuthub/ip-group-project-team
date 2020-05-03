@extends('layouts.app')


@section('content')
       <header class="header" id="logo">
      <div class="container">
        <div class="header-bg"></div>
        <div class="header-content">
          <div class="header-title">Sneakers Summer Collection</div>
          <div class="header-description">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio
            cupiditate fugiat ipsam quis sunt, tempora consequuntur.
          </div>
          <a href="#" class="header-button" send="#women">Shop now</a>
        </div>
      </div>
    </header>

    <hr />
    <div class="section" id="men">
      <div class="container">
        <div class="title">Men</div>
        <div class="subtitle">new collection</div>
        @for($j = 0; $j < 2; $j++)
          <div class="row">
            @for($i = 0; $i < 4; $i++)
              <div class="col-md-3">
                <div class="card">
                  <div class="card-image">
                    <img
                      src="img/product1.jpg"
                      alt=""
                      width="263px"
                      height="330px"
                    />
                    <div class="card-hover">
                      <a href="#" class="card-button">Quick view</a>
                    </div>
                  </div>
                  <div class="card-title">Nike shoes</div>
                  <div class="card-price">
                    <span> </span>
                    $90.00
                  </div>
                </div>
              </div>
            @endfor  
          </div>
        @endfor
        <a href="/men" class="button-outline">
          See all items
        </a>
      </div>
    </div>

    <div class="adv-wrapper">
      <div class="container content-center">
        <div class="adv-title">Get something you love</div>
        <a href="#" class="header-button" send="#logo">Shop now</a>
      </div>
    </div>

    <div class="section" id="women">
      <div class="container">
        <div class="title">Women</div>
        <div class="subtitle">new collection</div>
        @for($j = 0; $j < 2; $j++)
          <div class="row">
            @for($i = 0; $i < 4; $i++)
              <div class="col-md-3">
                <div class="card">
                  <div class="card-image">
                    <img
                      src="img/product1.jpg"
                      alt=""
                      width="263px"
                      height="330px"
                    />
                    <div class="card-hover">
                      <a href="#" class="card-button">Quick view</a>
                    </div>
                  </div>
                  <div class="card-title">Nike shoes</div>
                  <div class="card-price">
                    <span> </span>
                    $90.00
                  </div>
                </div>
              </div>
            @endfor  
          </div>
        @endfor
        <a href="/women" class="button-outline">
          See all items
        </a>
      </div>
    </div>

    <div class="adv-wrapper">
      <div class="container content-center">
        <div class="adv-title">Get something you love</div>
        <a href="#" class="header-button" send="#logo">Shop now</a>
      </div>
    </div>

    @include('include.blog-section')

@endsection


