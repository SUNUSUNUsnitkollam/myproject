<center> <table>
      <thead>
       <h1> UPDATE AIRPORT </h1>
      </thead>
      <tbody>
      

    <center><form method="post" action="<?php echo base_url()?>first/updateairport">
        <?php 
    if(isset($user_data)) 
    {
      foreach($user_data->result() as $row1)
      {
      ?>
      <tr>
     <h1>AIRPORT DETAILS</h1>
      <tr><td>
        AIRPORT NAME:</td><td><input type="text" name="aname" placeholder="airport name" pattern=".{3,}" value="<?php echo $row1->airportname;?>"  required title="3 characters minimum" maxlength="25"></td></tr>
      <tr><td>
        ABBREVIATION:</td><td><input type="text" name="abr"  placeholder="Abrevation" pattern=".{3,}"  value="<?php echo $row1->abrv;?>" required title="3 characters minimum"  maxlength="10"></td></tr>
      <tr><td>
        CITY:</td><td><select name="city">
          <option><?php echo $row1->city;?></option>
          <option>TRIVANDRUM</option> 
          <option>KOCHI</option> 
          <option>KOZHIKODE</option> 
          <option>KANNUR</option> 
        </select>
        </td></tr>
        
      
      <tr><td>
        STATE:</td><td><select name="state">
          <option><?php echo $row1->state;?></option>
          <option>KEARLA</option> 
          <option>TAMILNADU</option> 
          <option>KARNATAKA</option> 
          <option>DELHI</option> 
        </select>
        </td></tr>
      <tr><td>
        ZIPCODE:</td><td><input type="text" name="zip" value="<?php echo $row1->zipcode;?>">
          </td></tr>
          <tr><td>
        TIME ZONE:</td><td><select name="tzone">
          <option><?php echo $row1->tzone;?></option>
          <option>+5.30</option> 
					<option>+4.30</option> 
					<option>+5.00</option> 
					<option>+1.30</option>  
        </select>
        </td></tr>
        </table>
        <input type="submit" name="update" value ="update" align="center" >
    
  </form>
</body>
</html>

<?php
          }
        } 
        ?>


