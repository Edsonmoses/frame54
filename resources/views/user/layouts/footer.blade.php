  <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12  col-md-12">
                    <img class="footer-logo"src="/user/img/Frame54-G.svg" alt="Frame54-G" />
                    <div class="row">
                        <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
                            <ul class="footer-menu">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-xs-2 col-sm-2 col-lg-2">
                            <ul class="footer-menu">
                                <li><a href="#">Join the team</a></li>
                                <li><a href="#">Developers/API</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-xs-2 col-sm-2 col-lg-2">
                            <ul class="footer-menu">
                                <li><a href="#">Press</a></li>
                                <li><a href="#">Help Center</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-xs-3 col-sm-3 col-lg-3">
                        <ul class="list-inline footer-socials">
                            <li>
                                <a href="#">
                                    <span class="fa-stack fa-sm">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa-stack fa-sm">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa-stack fa-sm">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa-stack fa-sm">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-md-8 col-xs-8 col-sm-8 col-lg-8"></div>
                <div class="col-md-4 col-xs-4 col-sm-6 col-lg-4">
                    <ul class="list-inline">
                        <li>Privacy Policy</li>
                        <li>Terms</li>
                        <li>Security</li>
                    </ul>
                </div>
                </div>
                <p class="copyright text-muted">Copyright &copy; {{ config('app.name', 'Laravel') }} <?php echo date("Y"); ?></p>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('user/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('user/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ asset('user/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('user/js/contact_me.js') }}"></script>

    <!-- Theme JavaScript -->
    <script src="{{ asset('user/js/clean-blog.min.js') }}"></script>
    <script type="text/javascript">
        $(window).load(function(){
        $('#myModal').modal('show');
        $('#termsPopup').modal('show');
            });

            $(".gal").masonry();

            $('.post').hover(
                function(){
                    $('#content').masonry('reload');
                },
                function(){
                    $('#content').masonry('reload');
                }
            );

    </script>

   <!-- //infinty loading -->
    <script type="text/javascript">
var page = 1;

	$(window).scroll(function() {

		if($(window).scrollTop() + $(window).height() >= $(document).height()) {

			page++;

			loadMoreData(page);

		}

	});


	function loadMoreData(page){

	  $.ajax(

			{

				url: '?page=' + page,

				type: "get",

				beforeSend: function()

				{

					$('.ajax-load').show();

				}

			})

			.done(function(data)

			{

				if(data.html == " "){

					$('.ajax-load').html("No more records found");

					return;

				}

				$('.ajax-load').hide();

				$("#post-data").append(data.html);

			})

			.fail(function(jqXHR, ajaxOptions, thrownError)

			{

				  alert('server not responding...');

			});

	}

    $(function() {

$('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
     $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});
$('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
     $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});

});
		</script>
    @section('footer')
        @show
