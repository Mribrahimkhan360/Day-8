<?php include "header.php";?>
<!--//content-->
<div class="py-5">
    <div class="container">
        <div class="row">
           <div class="col-md-8 mx-auto">
               <div class="card">
                   <div class="card-header">My Calculator</div>
                   <div class="card-body">
                       <form action="action.php" method="POST">
                           <div class="row mb-3">
                               <label for="">First Number</label>
                               <div class="col-md-9">
                                   <input type="text" class="form-control" name="first_number">
                               </div>
                           </div>
                           <div class="row mb-3">
                               <label for="">Second Number</label>
                               <div class="col-md-9">
                                   <input type="text" class="form-control" name="second_number">
                               </div>
                           </div>
                           <div class="row">
                               <label for="">First Number</label>
                               <div class="col-md-9">
                                   <label><input type="radio" value="+" name="choice"/>Addation</label>
                                   <label><input type="radio" value="-" name="choice"/>Subtraction</label>
                                   <label><input type="radio" value="/" name="choice"/>Division</label>
                                   <label><input type="radio" value="*" name="choice"/>Multapplication</label>
                               </div>
                           </div>
                           <div class="row mb-3">
                               <label for="">Result</label>
                               <div class="col-md-9">
                                   <input type="text" class="form-control">
                               </div>
                           </div>
                           <div class="row mb-3">
                               <label for="">Second Number</label>
                               <div class="col-md-9">
                                   <input type="submit" name="submitBtn" class="btn btn-success" value="Submit"/>
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
        </div>
    </div>
</div>
<?php include "footer.php";?>