<?php session_start(); 
if(empty($_SESSION['user'])){
  ?>
  <script>
    window.location.href='login.php';
  </script>
  <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-dByWAgbS_9OR_-I5F3lv3mzrobuutzXElQ&usqp=CAU" type="image/icon type">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
  
      <div class="container-fluid">
        <a class="navbar-brand username " href="dashboard.php">Hi <?=$_SESSION['user'];?> </a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">me-auto</span>
          </button> -->
        <!-- <div class="collapse navbar-collapse" id="navbarText"> -->
       
          <?php
            if(isset($_POST['logout'])){
              session_unset();
              ?>
              <script>
                window.location.href='index.php';
              </script>
              <?php
            }
          ?>
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="customer.php">Customer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="employee.php">Employee</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bill.php">Bill</a>
          </li>
          <li class="nav-item">
        <form class="logout-form" action="" method="post">
            <button class="logout-btn nav-link" style="color:red;" type="submit" name="logout">Logout</button>
          </form>
        </li>
          
      
        </ul>
        <!-- </div> -->
      </div>
      
    </nav> 
    <?php
?>
    <style>
      
      .navtable{
        position: absolute;
        top: 8%;
      }
      .username{
        font-weight: 900;
        font-size: 20px;
      }
      table{
        box-shadow: 0 5px 7px 5px  #444;
      }
      .logout-btn {
      position: relative;
      background: transparent;
      border: none;
      outline: none;
      color: red; /* Apply red color */
      font-size: 16px; /* Set the font size */
      padding: 6px 12px; /* Add some padding for better spacing */
      border-radius: 5px; /* Optional: add rounded corners */
      cursor: pointer; /* Change the cursor to pointer on hover */
      transition: background-color 0.3s ease; /* Smooth transition on hover */
      }
      /* Optional: Add some margin to the button */

/* Optional: Add hover effect for the logout button */
      .logout-btn:hover {
          background-color: rgba(255, 0, 0, 0.1); /* Light red background on hover */
          color: darkred; /* Change text color on hover */
      }

    </style>
</body>
</html>