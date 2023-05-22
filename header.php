<?php
include "php/dbconnection.php"
?>  
<header id="header">
  <div id="wrapper">
  <div class="bxs-menu">
      <ul class="navbar"><?php
 $array = [];
 $array2 = [];
 $query = "SELECT * FROM categories";
 $checkrepeats = false;
 $allquery = mysqli_query($connection, $query);
 $final = "";
 while ($row = mysqli_fetch_assoc($allquery)) {
     $temp_title = $row['cat_name'];
     $subtemp = $row['subcat_name'];
     $href = $row['href'];
 
     if (!in_array($temp_title, $array)) {
         $final .= "<li><a href='{$href}'>{$temp_title}</a>";
 
         if ($subtemp != "" && $temp_title != 'MOVIES') {
             array_push($array, $temp_title);
             $query2 = "SELECT subcat_name FROM categories WHERE cat_name='" . $temp_title . "'";
             $allquery2 = mysqli_query($connection, $query2);
             $subtittle = "<div class='sub-menu-1'><ul>";
 
             while ($row2 = mysqli_fetch_assoc($allquery2)) {
                 $temp = $row2['subcat_name'];
                 $subtittle .= "<li class='link'>{$temp}</li>";
             }
 
             $subtittle .= "</ul></div></li>";
             $final .= $subtittle;
         } else if ($temp_title != 'MOVIES') {
             array_push($array, $temp_title);
             $final .= "</li>";
              
         }
     }
 }
 echo $final;

        ?>
       <div id="form">
          <form  name="form" id="formid">
          <input type="text" placeholder="search bar" name="search">
      <button  type="submit" value="search">
  </div>
  <?php
  $search="";
  if(isset($_POST['submit'])){
    $search=$_POST['search'];
  }
  ?>
      </ul>
    
      </form>
      <div class="div1">
          <div class="div2">
              <div class="input-group">
                  <div class="form-outline">
                    
                 </div>
                  
                  
                </div>
      </div>
      </div>
  </div>
</div>
</header>