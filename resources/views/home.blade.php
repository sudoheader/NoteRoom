
<!doctype html>
<html lang ="en">
  <head>
  <meta charset="UTF-8">
    <title>Notes Page</title>

   

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel= "stylesheet" href = "\NoteRoom\public\css\myNotes.css">



    <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">

   <!--  <style>
          body{margin-top:50px;}
      .glyphicon { margin-right:10px; }
      .panel-body { padding:0px; }
      .panel-body table tr td { padding-left: 15px }
      .panel-body .table {margin-bottom: 0px; }

    </style> -->

  </head>

  <body>


 
  


 <nav class="navbar navbar-toggleable-md navbar-light bg-faded ">

 
<!--   <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <a class="navbar-brand" href="/noteroom/public/binder" ><img src="img/NRlogoblue.png" height="30" width="40">

  </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

 
    <div class="dropdown dropdown-accordion mr-auto" data-accordion="#accordion"> 

            <a class="nav-link dropdown" href="#" data-toggle="dropdown" >Home</a>

        <ul class="dropdown-menu" role="menu" aria- labelledby="dLabel">

          <li>

           <div class="panel-group" id="accordion">
             
                <div class="panel panel-default">


                        <a class = "dropdown-item" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">My Noterooms</a>
                    
               
                <div class="dropdown-divider"></div>

                 <div class="panel-collapse collapse" id="collapseOne"> 

                        <div class="panel-body"> 

                            <a class="dropdown-item" href="#">COMP 380</a>
                            <a class="dropdown-item" href="#">COMP 222</a>
                            <a class="dropdown-item" href="#">ECON 175</a>
                        </div>

                  </div>

                </div>

                
                <div class="dropdown-divider"></div> 
                <a class="dropdown-item" href="#">Join Noteroom</a>
                <a class="dropdown-item" href="#">Create Noteroom</a>

              

            </div>

          </li>


        </ul>

    </div>





    <!-- right side of dropdown -->
    <li class="nav nav-pills dropdown" style="left: 0;">

      <a class="nav-link dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">[User Here]</a>

        <div class="dropdown-menu" style="left:auto;right: 0;margin-right:5px">

          <a class="dropdown-item" href="/NoteRoom/public/binder">My Binder</a>
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Logout</a>

        </div>
    </li>

  </div>

</nav>

<div style="padding-top: 50px">
  

</div>

 


    <div class="container text-center"> 

        <div class="row content">
        
            <div class="col-sm-9 text-left"> 

              <div id="editor">
                              
              </div>

            </div>

            <div class="col-sm-3 sidenav">

              <div class="well">

              <label for="question">Ask a question</label>
                
                 <form action="">

                      
                      <input id="question" autocomplete="off"  placeholder="Enter question"/> <button type="submit" class="btn-sm btn-primary">Submit</button>

                 </form>
            
                <p><u>Questions</u></p> 

                  <div id="messages">
            
                  </div>

              </div>
  
              
            </div>

        </div>


    </div>




    <footer class="container-fluid text-center">

      <p>NoteRoom</p>

    </footer>



  <script>



  // Collapse accordion every time dropdown is shown
$('.dropdown-accordion').on('show.bs.dropdown', function (event) {
  var accordion = $(this).find($(this).data('accordion'));
  accordion.find('.panel-collapse.in').collapse('hide');
}); 

// Prevent dropdown to be closed when we click on an accordion link
$('.dropdown-accordion').on('click', 'a[data-toggle="collapse"]', function (event) {
  event.preventDefault();
  event.stopPropagation();
  $($(this).data('parent')).find('.panel-collapse.in').collapse('hide');
  $($(this).attr('href')).collapse('show');
})





  </script>



  <script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>
 
   
    
  <script src="\NoteRoom\node_modules\socket.io-client\dist\socket.io.js"></script>

     <!-- Initialize Quill editor -->
    <script src = "\NoteRoom\public\js\quillCode.js"></script> 
    
   <!-- {{--  temporarily commented to separate ask a question function from quill stuff - will need to integrate later... --}} -->
  <!--  <script src = "\NoteRoom\public\js\client.js"></script> -->

  </body>
</html>