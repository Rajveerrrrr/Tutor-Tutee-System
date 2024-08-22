<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .modal-header, h4, .close {
    background-color: #5cb85c;
    color:white !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color: #f9f9f9;
  }
   </style>
</head>
<body>
    <!-- <h1>TUTOR PARENTS INFORMATION</h1> -->
    <div class="container">
        <!-- <h2>Modal Login Example</h2> -->
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-default btn-lg" id="myBtn">ADD MEETING</button>
      
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
              </div>
              <div class="modal-body" style="padding:40px 50px;">
                <form role="form">
                  <div class="form-group">
                    <label for="usrname"><span class="glyphicon glyphicon-user"></span>Student Name</label>
                    <input type="text" class="form-control" id="usrname" placeholder="Student Name ">
                  </div>
                  <div class="form-group">
                    <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Parent's Name</label>
                    <input type="text" class="form-control" id="psw" placeholder="Parent's Name">
                  </div>
                  <div class="form-group">
                  <label for="datetime">Select a date and time:</label><br>
                  <input type="datetime-local" id="datetime" name="datetime">
                </div>
                <div class="form-group">
                    <label for="Remarks">Remarks</label><br>
                    <textarea rows="10" cols="30" id="remarks" name="remark">
                    </textarea> 
                </div>
                 
                    <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                </form>
              </div>
              <!-- <div class="modal-footer"> -->
                <!-- <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button> -->
                <!-- <p>Not a member? <a href="#">Sign Up</a></p> -->
                <!-- <p>Forgot <a href="#">Password?</a></p> -->
              <!-- </div> -->
            </div>
            
          </div>
        </div> 
      </div>
       
      <script>
      $(document).ready(function(){
        $("#myBtn").click(function(){
          $("#myModal").modal();
        });
      });
</script>
</body>
</html>