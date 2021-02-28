<center> <table>
      <thead>
       <h1> UPDATE PROFILE</h1>
      </thead>
      <tbody>
      <body>

    <center><form method="post" action="<?php echo base_url()?>first/update">

        <?php 
    if(isset($user_data)) 
    {
      foreach($user_data->result() as $row1)
      {
      ?>
      <tr>
     <h1>Updation form</h1>
      <tr><td>
        FIRST NAME:</td><td><input type="text" name="fname" placeholder="firstname" pattern=".{3,}"  value="<?php echo $row1->fname;?>" required title="3 characters minimum" maxlength="25"></td></tr>
      <tr><td>
        LAST NAME:</td><td><input type="text" name="lname"  placeholder="lastname" pattern=".{3,}"  value="<?php echo $row1->lname;?>" required title="3 characters minimum"  maxlength="25"></td></tr>
      <tr><td>
        AGE:</td><td><input type="text" name="age" placeholder="age"  value="<?php echo $row1->age;?>"required minlength="1"maxlength="3"></td></tr>
        <tr><td>
               GENDER:</td><td><select name="gender">
              <option><?php echo $row1->gender;?></option>
              <option>Male</option>
              <option>Female</option>
            </select> </td></tr>
            <tr><td>
        ADDRESS:</td><td><textarea name="address"> <?php echo $row1->address;?></textarea></td></tr>
      <tr><td>  
        PHONE NUMBER:</td><td><input type="text" name="phno"  placeholder="phoneno" value="<?php echo $row1->phno;?>"required minlength="10"maxlength="12"></td></tr>
      <tr><td>  
        AADHHAR NUMBER:</td><td><input type="text" name="aadhar"  placeholder="Aadhar number"  value="<?php echo $row1->aadhar;?>"required minlength="12"maxlength="12"></td></tr>
      <tr><td>  
        EMAIL ID:</td><td><input type="email" name="email" value="<?php echo $row1->email;?>" required></td></tr>
    <tr><td>
        </td><td><input type="SUBMIT" name="update" value="update"align="center"> </td>  
        </tr> 
  </form>
  </tbody>
</body>
</table>
<?php
          }
        } 
        ?>

  </html>




