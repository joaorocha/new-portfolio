        <!--FOOTER-->
        <footer id="footer">
            <div class="container">
                <div class="row my-3">
                    <!--ABOUT-->
                    <div class="col-12 col-lg-4">
                        <div class="about">
                            <h3>About me</h3>
                            <p>My name is João Victor Rocha. I'm 25, front-end, web designer and developer based on Brazil's capital. Graduated on Computer Science currently working as freelancer.</p>
                            <p>I'm always trying to make new projects, improve my criativity and learn more about The new web standards to keep myself well informed about it.</p>
                        </div>
                    </div><!--END ABOUT-->

                    <!--SAY HELLO-->
                    <div class="col-12 col-lg-4 my-3 my-lg-0">
                        <div class="contact">
                            <h3>Say Hello!</h3>
                            <form>
                                <div class="form-group">
                                    <label for="EmailInput" class="contact-label">Email address:</label>
                                    <input type="email" class="form-control email-input" name="email">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="MessageInput" class="contact-label">Message:</label>
                                    <textarea class="message-field form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-light contact-btn">Enviar</button> 
                            </form>
                        </div>
                    </div><!--END SAY HELLO-->

                    <!--FOLLOW ME-->
                    <div class="col-12 col-lg-4">
                        <div class="social">
                            <h3>Follow me</h3>
                            <a href="" class="social-icon"><i class="fab fa-facebook-f fb-icon"></i></a>
                            <a href="" class="social-icon"><i class="fab fa-linkedin-in li-icon"></i></a>
                        </div>
                    </div><!--END FOLLOW ME-->

                </div>
            </div>
        </footer><!--END FOOTER-->


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <!--WOW JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!--CIRCULAR ANIMATED PROGRESSBARS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/1.0.1/progressbar.min.js"></script>
        <script type="text/javascript">
            var dino = $('#skills').offset().top;
            var isActive = true;

            $(window).scroll(function(){
                

                if($(window).scrollTop() >= (dino - 320) && isActive){
                    bar.animate(0.85);
                    bar2.animate(0.75);
                    bar3.animate(0.9);
                    isActive = false;
                }
            })

            var bar = new ProgressBar.Circle(skill1, {
              color: '#d9593d',
              trailColor: '#e8e8e8',
              trailWidth: 6,
              text: {
                value:'HTML5',
              },
              duration: 1400,
              easing: 'bounce',
              strokeWidth: 6,
              from: {color: '#b0442c', a:0},
              to: {color: '#d9593d', a:1},
              // Set default step function for all animate calls
              step: function(state, circle) {
                circle.path.setAttribute('stroke', state.color);
              }
            });

            var bar2 = new ProgressBar.Circle(skill2, {
              color: '#86A894',
              trailColor: '#e8e8e8',
              trailWidth: 6,
              text: {
                value:'CSS3',
              },
              duration: 1400,
              easing: 'bounce',
              strokeWidth: 6,
              from: {color: '#4b6054', a:0},
              to: {color: '#89ae99', a:1},
              // Set default step function for all animate calls
              step: function(state, circle) {
                circle.path.setAttribute('stroke', state.color);
              }
            });

            var bar3 = new ProgressBar.Circle(skill3, {
              color: '#51454a',
              trailColor: '#e8e8e8',
              trailWidth: 6,
              text: {
                value:'BOOTSTRAP',
              },
              duration: 1400,
              easing: 'bounce',
              strokeWidth: 6,
              from: {color: '#332b2e', a:0},
              to: {color: '#51454a', a:1},
              // Set default step function for all animate calls
              step: function(state, circle) {
                circle.path.setAttribute('stroke', state.color);
              }
            });
        </script>
        <!--JQuery Easing FOR SMOOTH SCROLLING-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script type="text/javascript">
            $('a.smooth-scroll[href*="#"]:not([href="#"])').click(function() {
              if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                  $('html, body').animate({
                    scrollTop: target.offset().top
                  }, 1000);
                  return false;
                }
              }
            }); 
        </script>
        <!--SCRIPT TO CLOSE MENU ITENS ON CLICK (MOBILE)-->
        <script type="text/javascript">
          $('.navbar-nav>li>a').on('click', function(){
              $('.navbar-collapse').collapse('hide');
          });
        </script>
  </body>
</html>