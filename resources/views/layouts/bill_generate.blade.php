<div class="hero-wrap hero-bread" style="background-image: url('images/home1.jpg');">
    <div class="container">
    	<div class="row no-gutters slider-text align-items-center justify-content-center">
        	<div class="col-md-9 ftco-animate text-center">
			<div class="neon"><h1 class="mb-0 bread" style="color:black">Checkout</h1></div>
          	</div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
		<h2>Enter Patient ID : </h2>
	  	<form action="check_pid" method="post" >
	  		@csrf
			<input type="text" class="form-control" style="width:50%;" name="pid" placeholder="Patient ID"><br>
			<input type="submit" class="btn btn-primary py-3 px-4" value="Submit">
	  	</form>
        <div class="row justify-content-center">
        	<div class="col-xl-7 ftco-animate">
				<form action="confirm_bill" class="billing-form" method="POST">
					@csrf
					<h3 class="mb-4 billing-heading">Billing Details</h3>
					<div class="row align-items-end">
						<div class="col-md-6">
							<div class="form-group">
								<label for="Name">Name</label>
								<input type="text" style="font-weight: bold; font-size:20px;" class="form-control" name="name" value="{{$pnm}}" readonly>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="dob">Date Of Birth</label>
								<input type="text" style="font-weight: bold; font-size:20px;" class="form-control" name="dob" value="{{$pdob}}" readonly>
							</div>
						</div>
						<div class="w-100"></div>
						<div class="w-100"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="bg">BloodGroup</label>
								<input type="text" style="font-weight: bold; font-size:20px;" class="form-control" name="bdg" value="{{$pbdg}}" readonly>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="room">Room No</label>
								<input type="text" style="font-weight: bold; font-size:20px;" class="form-control" name="room" value="{{$proom}}" readonly>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="con">Contact</label>
								<input type="text" style="font-weight: bold; font-size:20px;" class="form-control" name="con" value="{{$pcon}}" readonly>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="email">Email Address</label>
								<input type="text" style="font-weight: bold; font-size:20px;" class="form-control" name="email" value="{{$pemail}}" readonly>
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="add">Address</label>
								<input type="text" style="font-weight: bold; font-size:20px;" class="form-control" name="address" value="{{$padd}}" readonly>
							</div>
						</div>
						<div class="w-100"></div>
					</div>
			</div>
			<div class="col-xl-5">
				<div class="row mt-5 pt-3">
					<div class="col-md-12 d-flex mb-5">
						<div class="cart-detail cart-total p-3 p-md-4">
							<h3 class="billing-heading mb-4">Bill</h3>
							<p class="d-flex">
								<span>Patient ID</span>
								<span><input type="text" name="pid" value="{{$pid}}" style="width:200px;" readonly></span>
							</p>
							<p class="d-flex">
								<span>Check-in Date</span>
								<span><input type="text" name="ckin" value="{{$pckin}}" style="width:200px;" readonly></span>
							</p>
							<p class="d-flex">
								<span>Check-out Date</span>
								<span><input type="text" name="ckout" value="{{$pckout}}" style="width:200px;" readonly></span>
							</p>
							<p class="d-flex">
								<span>Stay in Hospital</span>
								<span><input type="text" name="tdays" value="{{$tdays}}" style="width:200px;" readonly></span>
							</p>
							<hr>
							<p class="d-flex total-price">
								<span>Total</span>
								<span><input type="text" name="total" value="Rs.{{$total}}" style="width:200px;" readonly></span>
							</p>
							<input type="submit" class="btn btn-primary py-3 px-4" value="Generate Bill">
						</div>
				</form><!-- END -->
	        		</div>
	        	</div>
          	</div> <!-- .col-md-8 -->
        </div>
    </div>
</section> <!-- .section -->