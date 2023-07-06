<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Admin Portal</title>
    <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet"
		href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxs-bank'></i>
      <span class="logo_name">BIET, Lucknow</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="User.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="personal.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Personal Info.</span>
          </a>
        </li>
        <li>
          <a href="education.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Education</span>
          </a>
        </li>


        <li>
          <a href="TC.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Training & Certif..</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Enquiry</span>
          </a>
        </li>

        <!-- <li>
          <a href="User_Update.html">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Update / Add Info.</span>
          </a>
        </li> -->
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Student Portal</span>
      </div>

      <div class="profile-details">
            User Name gdfbjfhbjrhd
            <!-- yaha ek user ka naam show karna hai -->
    </nav>



    <div class="home-content">
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
            <h2 style="color:green">Training & Certification</h2>
            <div style="width:40%;">
                <form>
                    <div class="">
                        <div class="col-lg-12">
                            <div id="row">
                                <div class="input-group m-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-success size"
                                                id="DeleteRow"
                                                type="button">
                                            Delete
                                        </button>
                                    </div>
                                    <div>
                                        <label> Certificate Name</label>
                                        <input type="text" class="form-control m-input" >
                                        <label>Certificate file</label>
                                    <input type="file" class="form-control m-input">
                                    </div>
                                    
                                </div>
                            </div>
        
                            <div id="newinput"></div>
                            <button id="rowAdder" type="button" class="btn btn-dark">
                                <span class="bi bi-plus-square-dotted">
                                </span> ADD
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>    
            <script type="text/javascript">
                $("#rowAdder").click(function () {
                    newRowAdd =
                        '<div id="row"> <div class="input-group m-3">' +
                        '<div class="input-group-prepend">' +
                        '<button style="width:80px; height:40px" class="btn btn-success" id="DeleteRow" type="button">' +
                        'Delete</button> </div> <br/> ' +
                        '<div><label> Certificate Name</label>' +
                        '<input type="text" class="form-control m-input" >'+
                        '<label>Certificate file</label>'+
                        '<input type="file" class="form-control m-input"></div></div> </div>';
        
                    $('#newinput').append(newRowAdd);
                });
                $("body").on("click", "#DeleteRow", function () {
                    $(this).parents("#row").remove();
                })
            </script>
            </div>
        
        </div>
        
    </div>
        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Update Profile</button></div>

                        
      
      
</body>
</hphp