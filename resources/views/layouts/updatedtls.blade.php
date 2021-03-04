<div class="hero-wrap hero-bread" style="background-image: url('images/med2.jpg');">
    <div class="container">
    	<div class="row no-gutters slider-text align-items-center justify-content-center">
        	<div class="col-md-9 ftco-animate text-center">
			<div class="neon"><h1 class="mb-0 bread" style="color:black">Update Details</h1></div>
          	</div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart">
	<div class="container">
    	<div>
    		<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    			<div class="cart-total mb-3">
    				<h3>Change Patient Room</h3>
  					<form action="change_room" class="info" method='POST'>
					 	@csrf
						<div class="form-group">
							Patient ID : 
							<input type="text" name="p_id" class="form-control text-left px-3" placeholder="Patient ID">
						</div>
						<input type="submit" class="btn btn-primary py-3 px-4" value="SUBMIT">
					</form>
    			</div>
    		</div>
			<div class="cart-total mb-3">
				<form action="confirm_update" class="billing-form" method="POST">
					@csrf
					<input type="hidden" name="pid" value="{{$pid}}">
					<div class="row align-items-end">
						<div class="col-md-6">
							<div class="form-group">
								<label for="Name">Name</label>
								<input type="text" style="font-weight: bold; font-size:20px;" class="form-control" name="name" value="{{$pnm}}">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="Room">Room</label>
								<input type="text" style="font-weight: bold; font-size:20px;" class="form-control" name="room" value="{{$proom}}">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="Contact">Contact</label>
								<input type="text" style="font-weight: bold; font-size:20px;" class="form-control" name="con" value="{{$pcon}}">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group" align="center">
								<input type="submit" class="btn btn-primary py-3 px-4" value="UPDATE DETAILS">
							</div>
						</div>
					</div>
				</form>
			</div>
    		<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
				<h2>Search Here</h2>
				<input class="form-control" id="myInput" type="text" placeholder="Search.."><br>
    			<div class="cart-total mb-3">
					<table class="table">
					    <thead class="thead-primary">
					    	<tr class="text-center">
						        <th>ID</th>
						        <th>Name</th>
								<th>Room No</th>
						    </tr>
						</thead>
						<tbody id="myTable">
							@foreach($patient as $p)
							    <tr class="text-center">
								  	<td>{{$p->P_ID}}</td>
						        	<td>{{$p->P_Name}}</td>
									<td>{{$p->Room_No}}</td>
						      	</tr>
							@endforeach
						</tbody>
					</table>
					<script>
						$(document).ready(function(){
							$("#myInput").on("keyup", function() {
								var value = $(this).val().toLowerCase();
								$("#myTable tr").filter(function() {
									$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
								});
							});
						});
					</script>
    			</div>
    		</div>
    	</div>
	</div>
</section>