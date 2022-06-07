
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Mukta&family=Zen+Kaku+Gothic+Antique:wght@900&display=swap" rel="stylesheet">

  <!--Fa fa CDN-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Bootstrap CDN-->


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

 
</head>
<body>


<!--start crud coding-->
<div class="row py-4 m-0">
  <div class="col-md-9">
    <div class="d-flex justify-content-around">
<h1 class="p-0 m-0">CRUD Operation</h1>
<button class="btn btn-primary px-4 p-0 remove-focus add-data">Add Data</button>
</div>
<br><br>
<!--show data in table-->
<div>
  <table class="table">
   
  </table>
</div>

  </div>
  <div class="col-md-3"></div>
</div>



<!--Form modal-->

<!-- The Modal -->
<div class="form-modal modal animate__animated animate__slideInDown animate__faster" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Class teacher</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form class="submit-form">
         <div class="form-group">
           <label>Name</label>
           <input type="text" required name="name" class="form-control remove-focus" placeholder="Enter name" >
         </div>

         <div class="form-group">
           <label>Mobile</label>
           <input type="number" required name="mobile" class="form-control remove-focus" placeholder="Enter mobile" >
         </div>

         <div class="form-group">
           <label>Age</label>
           <input type="number" maxlength="2" required name="age" class="form-control remove-focus" placeholder="Enter age" >
         </div>

         <div class="form-group">
           <label>Subject</label>
           <input type="text" name="subject" required class="form-control remove-focus" placeholder="Enter name" >
         </div>


         <div class="form-group">
          <button class="btn btn-primary remove-focus submit-btn" type="submit">Submit</button>
         </div>


       </form>
      </div>

    
    </div>
  </div>
</div>





<script src="js/ajax.js"></script>
</body>
</html>