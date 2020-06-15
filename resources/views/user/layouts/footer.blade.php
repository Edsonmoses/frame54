  <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; {{ config('app.name', 'Laravel') }} <?php echo date("Y"); ?></p>
                </div>
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
		</script>

<script type="text/javascript">
       /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
                }
            }
            }
     
		</script>
    @section('footer')
        @show

        
