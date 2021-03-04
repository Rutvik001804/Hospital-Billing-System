<div class="hero-wrap hero-bread" style="background-image: url('images/med2.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <div class="neon"><h1 class="mb-0 bread" style="color:black">Insert Details</h1></div>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section contact-section bg-light">
  <div class="container">
    <div>
      <h1>INSERT PATIENT DETAILS</h1>
        <div>
          <form action="insert_data" class="bg-white p-5 contact-form" method = 'POST'>
            @csrf
            Name : 
            <input type="text" name="name" placeholder="Your Name" required>
            Date Of Birth : 
            <input type="date" name="dob" required>
            Blood Group : 
            <select name="bdg">
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
            </select>
            Contact : 
            <input type="text" name="con" placeholder="Contact" required>
            Email : 
            <input type="text" name="email" placeholder="Email" required>
            Address : 
            <input type="text" name="address" placeholder="Address" required>
            Room No. :
            <select name="room">
              <option value="101">101</option>
              <option value="102">102</option>
              <option value="103">103</option>
              <option value="104">104</option>
              <option value="105">105</option>
              <option value="106">106</option>
              <option value="107">107</option>
              <option value="108">108</option>
              <option value="109">109</option>
              <option value="110">110</option>
            </select>
            Check-in Date : 
            <input type="date" name="cin" required>
            <div class="form-group">
              <input type="submit" value="SUBMIT" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
        <div class="col-md-6 d-flex">
          <div id="map" class="bg-white"></div>
        </div>
    </div>
  </div>
</section>