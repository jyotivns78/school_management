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
    <div class="col-12 mt-5 pt-2 mb-1">
      <h4 class="text-uppercase">Select Criteria</h4>
    </div>
  </div>

  <div class="row">
    <div class="col-xl-6 col-md-12">
      <div class="card overflow-hidden">
        <div class="card-content">
          <div class="card-body cleartfix d-flex table_flex">
           <div class="col-xl-6 col-12">
           <label>Class</label>
          <select class="form-select" aria-label="Default select example">
  <option selected>Select Class</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
           </div>
           <div class="col-xl-6 col-12">
           <label>Section</label>
          <select class="form-select" aria-label="Default select example">
  <option selected>Select Section</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
<button class="btn btn-dark search_b mt-2"><i class="fa fa-search"></i> Serach</button>
           </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-6 col-md-12">
      <div class="card">
        <div class="card-content" style="padding-bottom: 1.5rem  !important;">
          <div class="card-body cleartfix" >
          <label>Serach By Keywords</label>
          <select class="form-select" aria-label="Default select example">
  <option selected>Serach By Student Name, Roll Number, Enroll Number, National Id, Local Id Etc</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
<button class="btn btn-dark search_b mt-2"><i class="fa fa-search"></i> Serach</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xl-12 col-md-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body cleartfix">
          <div class="container">
  <div class="row">
    <div class="col-12 table_container">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Admission No</th>
            <th scope="col">Student Name</th>
            <th scope="col">Class</th>
            <th scope="col">Father Name</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Gender</th>
            <th scope="col">Category</th>
            <th scope="col">Mobile No</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Cristina</td>
            <td>Two</td>
            <td>Mr. Max</td>
            <td>02/03/1999</td>
            <td>Female</td>
            <td>OBC</td>
            <td>7583950385</td>
            <td>
            <button type="button" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button>
              <button type="button" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Cristina</td>
            <td>Two</td>
            <td>Mr. Max</td>
            <td>02/03/1999</td>
            <td>Female</td>
            <td>OBC</td>
            <td>7583950385</td>
            <td>
            <button type="button" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button>
              <button type="button" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Cristina</td>
            <td>Two</td>
            <td>Mr. Max</td>
            <td>02/03/1999</td>
            <td>Female</td>
            <td>OBC</td>
            <td>7583950385</td>
            <td>
              <button type="button" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button>
              <button type="button" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
          </div>
        </div>
      </div>
    </div>

   
  </div>
</section>
</div>

@endsection