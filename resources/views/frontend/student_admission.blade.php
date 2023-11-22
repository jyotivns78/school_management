@extends('frontend.layout.main')
@section('main.container')

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../../assets/css/dashboard.css" />


<div class="grey-bg container-fluid">
  <section id="minimal-statistics">
   
  <section id="stats-subtitle">
  <div class="row">
    <div class="col-12 mt-3 pt-2 mb-1">
    </div>
  </div>


  <div class="row">
    <div class="col-xl-12 col-md-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body cleartfix">
          <div class="d-flex justify-content-between">
          <h3>Student Admission</h3>
          <button class="btn btn-dark "><i class="fa fa-upload" aria-hidden="true"></i> import</button>
          </div>
          <div class="panel-body">
    <form>
<div class="col-md-12 col-sm-12">
	<div class="input_flex_div d-flex">
    <div class="form-group col-md-3 col-sm-3">
            <label for="name">Admission No*	</label>
            <input type="text" class="form-control input-sm" id="name" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="email">Roll Number*</label>
            <input type="email" class="form-control input-sm" id="email" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="mobile">Class*</label>
            <select class="form-control input-sm" id="years" style="height: 30px;">
		<option>-- Select --</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
	      </select>
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="city">Section*</label>
            <select class="form-control input-sm" id="years" style="height: 30px;">
		<option>-- Select --</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
	      </select>
        </div>

	
    </div>


    <div class="input_flex_div d-flex">
    <div class="form-group col-md-3 col-sm-3">
            <label for="name">First Name*	</label>
            <input type="text" class="form-control input-sm" id="name" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="email">Last Name*</label>
            <input type="email" class="form-control input-sm" id="email" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="mobile">Gender*</label>
            <select class="form-control input-sm" id="years">
		<option>-- Select --</option>
		<option>Male</option>
		<option>Female</option>
	      </select>
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="city">Date of Birth*</label>
            <input type="date" class="form-control input-sm" id="city" placeholder="">
        </div>

	
    </div>


    <div class="input_flex_div d-flex">
    <div class="form-group col-md-3 col-sm-3">
            <label for="name">Category*	</label>
            <select class="form-control input-sm" id="years">
		<option>-- Select --</option>
		<option>OBC</option>
		<option>General</option>
		<option>SC/ST</option>
	      </select>
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="email">Religion*</label>
            <input type="email" class="form-control input-sm" id="email" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="mobile">Caste*</label>
            <input type="text" class="form-control input-sm" id="mobile" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="city">Mobile Number*</label>
            <input type="text" class="form-control input-sm" id="city" placeholder="">
        </div>

	
    </div>


    <div class="input_flex_div d-flex">
    <div class="form-group col-md-3 col-sm-3">
            <label for="email">Email*</label>
            <input type="email" class="form-control input-sm" id="email" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="email">Admission Date*</label>
            <input type="date" class="form-control input-sm" id="email" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="mobile">Student Photo*</label>
            <input type="file" class="form-control input-sm" id="mobile" placeholder="" style="padding: 2px 0px;">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="city">Blood Group*</label>
            <select class="form-control input-sm" id="years" style="height: 30px;">
		<option>-- Select --</option>
		<option>AB-</option>
		<option>AB+</option>
		<option>A+</option>
		<option>A-</option>
		<option>O+</option>
		<option>O-</option>
	      </select>
        </div>

	
    </div>


    <div class="input_flex_div d-flex">
    <div class="form-group col-md-3 col-sm-3">
            <label for="name">House*	</label>
            <select class="form-control input-sm" id="years">
		<option>-- Select --</option>
		<option>White-Gray Dress</option>
		<option>White Dress</option>
	      </select>
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="email">Height*</label>
            <input type="email" class="form-control input-sm" id="email" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="mobile">Weight*</label>
            <input type="text" class="form-control input-sm" id="mobile" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="city">Measurement Date*</label>
            <input type="date" class="form-control input-sm" id="city" placeholder="">
        </div>

	
    </div>
    <!-- <div class="col-md-12 col-sm-12" id="addblock">
	<div class="form-group col-md-3 col-sm-3">
		<input type='button' class="btn btn-primary" value="Add" id="add"/>
	</div>
</div> -->

<h3 class="mt-3 mb-3">Transport Details</h3>

<div class="input_flex_div d-flex">
    <div class="form-group col-md-4 col-sm-4">
            <label for="name">Route List*	</label>
            <select class="form-control input-sm" id="years" style="height: 30px;">
		<option>-- Select --</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
	      </select>
        </div>
        <div class="form-group col-md-4 col-sm-4">
            <label for="email">Pickup Point*</label>
            <select class="form-control input-sm" id="years" style="height: 30px;">
		<option>-- Select --</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
	      </select>
        </div>
        <div class="form-group col-md-4 col-sm-">
            <label for="mobile">Fees Month*</label>
            <select class="form-control input-sm" id="years" style="height: 30px;">
		<option>-- Select --</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
	      </select>
        </div>
     

	
    </div>

    <h3 class="mt-3 mb-3">Hostel Details</h3>

<div class="input_flex_div d-flex">
    <div class="form-group col-md-6 col-sm-6">
            <label for="name">Hostel*	</label>
            <select class="form-control input-sm" id="years" style="height: 30px;">
		<option>-- Select --</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
	      </select>
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="email">Room No*</label>
            <select class="form-control input-sm" id="years" style="height: 30px;">
		<option>-- Select --</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
	      </select>
        </div>
     

	
    </div>

    <h3 class="mt-3 mb-3">Parent Guardian Detail</h3>

<div class="input_flex_div d-flex">
    <div class="form-group col-md-3 col-sm-3">
            <label for="name">Father Name*	</label>
            <input type="text" class="form-control input-sm" id="name" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="email">Father Phone*</label>
            <input type="email" class="form-control input-sm" id="email" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="email">Father Occupation*</label>
            <input type="email" class="form-control input-sm" id="email" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="email">Father Photo*</label>
            <input type="file" class="form-control input-sm" id="mobile" placeholder="" style="padding: 2px 0px;">
        </div>
	
    </div>
	

    <div class="input_flex_div d-flex">
    <div class="form-group col-md-3 col-sm-3">
            <label for="name">Mother Name*	</label>
            <input type="text" class="form-control input-sm" id="name" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="email">Mother Phone*</label>
            <input type="email" class="form-control input-sm" id="email" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="email">Mother Occupation*</label>
            <input type="email" class="form-control input-sm" id="email" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="email">Mother Photo*</label>
            <input type="file" class="form-control input-sm" id="mobile" placeholder="" style="padding: 2px 0px;">
        </div>
	
    </div>

    <div class="input_flex_div d-flex">
    <div class="form-group col-md-12 col-sm-12">
            <label for="name">If Guardian Is*	</label>
            <input type="text" class="form-control input-sm" id="name" placeholder="">
        </div>
       
	
    </div>

    <div class="input_flex_div d-flex">
    <div class="form-group col-md-3 col-sm-3">
            <label for="name">Guardian Name*	</label>
            <input type="text" class="form-control input-sm" id="name" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="email">Guardian Relation*</label>
            <input type="email" class="form-control input-sm" id="email" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="email">Guardian Email*</label>
            <input type="email" class="form-control input-sm" id="email" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="email">Guardian Photo*</label>
            <input type="file" class="form-control input-sm" id="mobile" placeholder="" style="padding: 2px 0px;">
        </div>
	
    </div>
	

    <div class="input_flex_div d-flex">
    <div class="form-group col-md-3 col-sm-3">
            <label for="name">Guardian Phone*	</label>
            <input type="text" class="form-control input-sm" id="name" placeholder="">
        </div>
        <div class="form-group col-md-3 col-sm-3">
            <label for="email">Guardian Occupation*</label>
            <input type="email" class="form-control input-sm" id="email" placeholder="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label for="email">Guardian Address*</label>
            <input type="address" class="form-control input-sm" id="email" placeholder="">
        </div>
        
	
    </div>
	

<div class="col-md-12 col-sm-12 text-center">
	<div class="form-group col-md-12 col-sm-12 " >
			<input type="submit" class="btn btn-primary" value="Submit"/>
	</div>
</div>
</form>
</div>
          </div>
        </div>
      </div>
    </div>

   
  </div>
</section>
</div>

@endsection