<div class="container-fluid pt-4 pb-4 " style="background-color: #3c3c3c; margin-top: 150px; background-size: cover;">	
	<div class="container">
		<div class="row mt-5">
			<div class="col-12 col-md-3 pb-3">
				<h6 class="font-weight-bold text-white"><strong>MICRO</strong> <strong style=" color: #fec20c;">FINANCE</strong></h6>
				<p class="text-justify text-white">God comes to us in free and undeserved favor in the person of Jesus Christ who lived, died, and rose for us that we might belong to God and serve Christ in the world.</p>
				<hr style="background-color: #a0a0a0;">

				<p class="text-justify text-white">This know also, that in the last days perilous times shall come. </p>
				
			</div>

			<div class="col-12 col-md-3 pb-3">
				<h6 class="font-weight-bold text-white"><strong>LATEST </strong> <strong style=" color:#fec20c;"> GALLERY</strong></h6>
                
                <div class="row">
                   @foreach($gallery as $gallery)
                	  <div class="col-6 col-md-6 pb-4">
                          <img src="/img/{{$gallery->image}}" alt="" class="img-fluid ">
                      </div>
                   @endforeach
                </div>

    
			</div><!-- end of col -->

			<div class="col-12 col-md-3 pb-3">
				<h6 class="font-weight-bold text-white"><strong>USEFUL</strong> <strong style=" color: #fec20c;">LINKS</strong></h6>
				<p><a href="/" class="text-white">Home <span style=" color: #fec20c;">&raquo;</span></a></p>
				<p><a href="/about" class="text-white">About Us <span style=" color: #fec20c;">&raquo;</span></a></p>
				<p><a href="/business" class="text-white">Business <span style=" color: #fec20c;">&raquo;</span></a></p>
				<p><a href="/contact" class="text-white">Contact Us <span style=" color: #fec20c;">&raquo;</span></a></p>

			</div><!-- end of col -->

			<div class="col-12 col-md-3 pb-3">
				<h6 class="font-weight-bold text-white"><strong>WORKING</strong> <strong style=" color: #fec20c;">HOURS</strong></h6>

				<p class="text-white">Monday &nbsp;  &nbsp;  &nbsp;  <span style=" color: #fec20c;">8:30am - 4:00pm </span></p>
				<hr style="background-color: #a0a0a0;">

				<p class="text-white">Tuesday &nbsp;  &nbsp;  &nbsp;  <span style=" color: #fec20c;">8:30am - 4:00pm </span></p>
				<hr style="background-color: #a0a0a0;">

				<p class="text-white">Wednesday &nbsp;  &nbsp;  &nbsp;  <span style=" color: #fec20c;">8:30am - 4:00pm </span></p>
				<hr style="background-color: #a0a0a0;">

				<p class="text-white">Thursday &nbsp;  &nbsp;  &nbsp;  <span style=" color: #fec20c;">8:30am - 4:00pm </span></p>
				<hr style="background-color: #a0a0a0;">

				<p class="text-white">Friday &nbsp;  &nbsp;  &nbsp;  <span style=" color: #fec20c;">8:30am - 4:00pm </span></p>
				<hr style="background-color: #a0a0a0;">

				<p class="text-white">Saturday &nbsp;  &nbsp;  &nbsp;  <span style=" color: #fec20c;">Closed </span></p>
				<hr style="background-color: #a0a0a0;">

				<p class="text-white">Sunday &nbsp;  &nbsp;  &nbsp;  <span style=" color: #fec20c;">Closed </span></p>
				<hr style="background-color: #a0a0a0;">
			</div>
			

		</div><!-- end of row -->
	</div><!-- container -->

	       <footer class="mt-1">
                <div class="col-12 col-md-12 text-center">
                    <p class="text-white"> &copy; Copyright 2018 <strong style=" color: #fec20c;">Micro Finance </strong> All Rights Reserved </p>
               </div>   
           </footer>

       
</div><!-- container-fluid -->

<h6 class="pt-2 pb-2 text-center" style="background-color: #222;">
       <small class="text-white">Website Developed by: <strong ><a href="" style=" color: #fec20c;">Ap-kwat Tech</a></strong></small>
</h6>