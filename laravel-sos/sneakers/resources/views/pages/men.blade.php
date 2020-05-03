@extends('layouts.app')


@section('content')

    <div class="section" id="men" style="padding-top: 0;">
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
        <a href="/women" class="button-outline">
          See all items
        </a>
      </div>
    </div>

@endsection