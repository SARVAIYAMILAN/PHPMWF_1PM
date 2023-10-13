<main id="main" class="main">

<div class="pagetitle">
  <h1>Add SubCategory of Food</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>admin-dashboard">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Layouts</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-8">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add catering SubCategory here</h5>

          <!-- Horizontal Form -->
          <form id="frm2" method="post">
           
          <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-5 col-form-label">Select Food category</label>
              <div class="col-sm-7">
                <select  name="catname"  placeholder="Food main Category" class="form-control" id="inputText">
                <option value="">-select category-</option>
                <?php 
                 foreach($shwcat as $shwcat1)
                 {
                ?>
                <option value="<?php echo $shwcat1["catering_id"];?>"><?php echo $shwcat1["catering_name"];?></option>
               <?php 
                 }
                 ?>
                </select>
              </div>
            </div>
          
          <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-5 col-form-label">Food Subcategory Name</label>
              <div class="col-sm-7">
                <input type="text" name="subcatname" data-bvalidator="required,alpha" placeholder=" Sub Category" class="form-control" id="inputText">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-5 col-form-label">Added Date</label>
              <div class="col-sm-7">
                <input type="date" name="adddate" data-bvalidator="required" class="form-control" id="inputEmail">
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary" name="addsubcat">AddySubCategory</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- End Horizontal Form -->

        </div>
      </div>

 
  </div>
</section>

</main><!-- End #main -->

<!-- bvalidator jquery call here -->
<script>
$(document).ready(function(){
$("#frm2").bValidator();
});

</script>