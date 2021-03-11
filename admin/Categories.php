<?php
include "includes/header.php";
?>

<body id="page-top">
   
    
    


    <!-- Navbar Search -->
  
      
      <?php  
      include "includes/Navigation.php";
      
      
      ?>
    <div class="col-xs-6" dir="ltr">
    <form action="">
    <div class="form-group">
        <label for="cat_title">add category</label>
        <input type="text"  class="form-control" name="cat_title">
        </div>
            <div class="form-group">
        <input class="btn btn-primary" type="submit" name="submit" value="add category">
        </div>
    
    
    </form>
      
      
      
      </div>
    
    
    
    <div class="col-xs-6">
        
          <?php 
            
            $query="select * from categories";
            $select_categories=mysqli_query($connection,$query);
           
            
            ?>
        
        
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                        <th>Id</th>
                        <th>Category Title</th>
                </tr>
            
            </thead>
            
            <tbody>
                <?php
                 while($row = mysqli_fetch_assoc($select_categories)){
             $cat_id = $row['cat_id'];

               $cat_title = $row['cat_title'];
                     echo "<tr>"; 
                echo "<td>{$cat_id}</td>";
                echo "<td>{$cat_title}</td>";
                     echo "</tr>";
                
            }
                
                
                
                ?>
           
            </tbody>
        
        </table>
    
    
    
    </div>

    
    
    
    
  
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


 <?php include "includes/footer.php"; ?>