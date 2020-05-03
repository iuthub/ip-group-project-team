<div class="section" id="blog">
      <div class="container">
        <div class="title">Blog</div>
        <div class="subtitle">Latest news</div>
      @for($i = 0; $i < 2; $i++)
        <div class="row blog-b">
          @for($j = 0; $j < 2; $j++)
            <div class="col-md-2">
              <img src="img/blog.jpg" alt="" />
            </div>
            <div class="col-md-4">
              <div class="blog-title">
                Lorem ipsum dolor sit amet
              </div>
              <div class="blog-description">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti
                commodi voluptatibus obcaecati necessitatibus iste est incidunt
              </div>
              <br />
              <a href="#" class="read-more"
                >Read more <i class="fas fa-chevron-right"></i
              ></a>
            </div>
          @endfor
         </div>
      @endfor
        
        <a href="#" class="button-outline read-all">
          Read all posts
        </a>
        <hr />
        <br />
        <br />
        <br />
        <div class="title">Join us</div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="description">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Perspiciatis rerum eligendi laborum culpa ab natus eveniet ratione
              accusamus repellendus sit. Ipsam laboriosam deserunt veritatis
              tempora enim est expedita, quisquam ex?
            </div>
          </div>
        </div>
      </div>
    </div>
    <form action="" class="subscribe">
      <input
        type="email"
        class="subscribe-input"
        placeholder="Your email address"
      />
      <input type="submit" class="subscribe-button" value="Subscribe" />
    </form>