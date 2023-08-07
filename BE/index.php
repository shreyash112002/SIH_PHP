<?php

//include hader.php file
include('header.php');


?>
  <div class="container">
    <img src="assets/Banner1.png" alt="Banner" style="width:100%;">
    <form method="post" action="calendar.php" autocomplete="off">
    <div class="select-guest" style="width:600px;">
      <select style="width:400px;" name="guest" id="guest" class="select1">
        <option value="0">Select Guest size:</option>
        <option value="1">Less than 50</option>
        <option value="2">Between 50-100</option>
        <option value="3">Between 100-150</option>
      </select>
    </div>

    <div class="select-occasion" style="width:600px;" >
      <select style="width:400px;" name="occassion" id="occassion" class="select2">
        <option value="0">Select Occasion:</option>
        <option value="1">Birthday</option>
        <option value="2">Wedding</option>
        <option value="3">Gathering/Meet</option>
        <option value="4">Haldi</option>
        <option value="5">Communion</option>
        <option value="6">Roce</option>
        <option value="7">Business Meet</option>
        <option value="8">Reunion</option>
        <option value="9">Naming Ceremony</option>

      </select>
    </div>
    <br><br>
    <input type="submit" value="Let's Go">  
    <br><br>
  
    <label id="demo1" >Language : </label>
    <br>
    <label id="demo2" >Language : </label>
  </form>
  </div>

<!---------End Main--------------->

<!-- END BODY -->


  





  


    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    
    <!-- Owl Carousel Js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--  isotope plugin cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>
    
    <!-- Custom Javascript -->
    <script src="index.js"></script>
</body>
</html>