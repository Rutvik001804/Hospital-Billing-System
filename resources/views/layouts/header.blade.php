<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
    	<a class="navbar-brand" href="/">Health Care</a>
      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
	    </button>

	    <div class="collapse navbar-collapse" id="ftco-nav">
	    	<ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
			  @if(session()->has('data'))
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Patient Details</a>
					<div class="dropdown-menu" aria-labelledby="dropdown04">
						<a class="dropdown-item" href="show_details">Show Details</a>
						<a class="dropdown-item" href="insert_details">Insert Details</a>
						<a class="dropdown-item" href="update_details">Update Details</a>
						<a class="dropdown-item" href="patient_history">Patient History</a>
					</div>
				</li>
				<li class="nav-item"><a href="bill" class="nav-link">Bill</a></li>
			  @endif
	          <li class="nav-item"><a href="about" class="nav-link">About</a></li>
			  @if(session()->has('data'))
			  	<li class="nav-item"><a href="logout" class="nav-link">Logout</a></li>
			  @else
              	<li class="nav-item"><a href="signin" class="nav-link">Login</a></li>
			  @endif
	        </ul>
	      </div>
	</div>
</nav>