 <div id="main-body">
 	<div id="note"> <h2> Account Details </h2> </div>
     <div id="formid">
	&emsp;&emsp;&emsp;&emsp; 
     <h4 style="margin-left:-141px; margin-top:88px; margin-bottom:151px;"> <a href="programinfo"> Personal Information </a></h4>&emsp;
     <h4 style="margin-left:190px; background:#DDD; width:120px; text-align:center; margin-top:-150px; padding:5px; margin-bottom:47px;"> 
     Case Information </h4>
     </div>
     <div id = "form2">
      <form name = "caseInfo" enctype="text/plain">
         <a id="button" href="mainmenu"><strong>Main Menu</strong></a>
      <fieldset>
      <legend>Case Details </legend>
      
      <h2 style="text-decoration:underline; color:#000; margin-left:20px; font-weight:500; margin-bottom:-2px"> Restorative Justice </h2>
      <br>         
      &nbsp;&nbsp;&nbsp;&nbsp;Name of assigning Judge : 
      <select name="judge" style="width:80px;margin-right:60px;"> 
      <option> </option> <option> Sloan</option> <option>Gaines</option> 
      </select>
      Reason for Charge: <input type="text" name="reason" style="margin-right:60px;">
      
      <hr size="1.2" noshade style="color:#000;">
      <br> 
      &emsp; <h4 style="margin-top:-20px;margin-bottom:-10px;">Module Assigned : </h4>
      <br><br>
      &emsp;&emsp;
      <input type="checkbox" name="module"> Module 1
      <input type="checkbox" name="module" style="margin-left:100px;"> Module 4
      <br><br>
      &emsp;&emsp;
      <input type="checkbox" name="module"> Module 2
      <input type="checkbox" name="module" style="margin-left:100px;"> Module 5
      <br><br>
	 &emsp;&emsp;
      <input type="checkbox" name="module"> Module 3
      <input type="checkbox" name="module" style="margin-left:100px;"> Module 6
      <br><br><br>
      
      &emsp; Present / Past enrolled in the Military
      <input type="radio" name="military">Yes
      <input type="radio" name="military">No
      <br><br>
      
      &emsp; If yes, which branch ? <select name="mil" style="margin-left:15px; margin-right:50px;">
      <option></option>
      <option>Air Force</option>
      <option>Army</option>
      <option>Coast Guard</option>
      <option>Marine</option>
      <option>Navy</option>
	 </select>
      Discharge Type : <select name="discharge" style="margin-left:15px; margin-right:50px;">
      <option></option>
      <option>General</option>
      <option>Honorable</option>
      <option>Other</option>
	 </select>
      If Other, specify :
      <textarea name="dischargeother" rows="2" cols="35" data-role="none" style="resize:none;overflow:auto;margin-top:-15px;">
      </textarea>
      <br><br><br>
      
      &emsp; Years of Service : <input type="number" min="0" max="50" style="width:50px; margin-right:50px;" name="years">
      Benefits Received : 
      <textarea name="benefits" rows="2" cols="60" data-role="none" style="resize:none;overflow:auto;margin-top:-15px;">
      </textarea>
      <br><br><br>
      
      &emsp; Forms of ID present : &emsp;&emsp;
      <input type="checkbox" name="idproof"> Birth Certificate
      &emsp;&emsp;
      <input type="checkbox" name="idproof"> Social Security Card
      &emsp;&emsp;
      <input type="checkbox" name="idproof"> State ID
      <br><br>
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <input type="checkbox" name="idproof"> Driver's License
      &emsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" name="idproof"> Medicaid
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <input type="checkbox" name="idproof"> Other, please specify : 
      <input type="text" name="otherid" style="margin-left:15px; size:40px">
      <br><br><br>
      
      &emsp; Other Sources of Income : &emsp;&emsp;
      <input type="checkbox" name="income"> TANF 
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
      <input type="checkbox" name="income"> Alimony
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <input type="checkbox" name="income"> Relative / Friends
      <br><br>
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
      <input type="checkbox" name="income"> SSI / SSD
      &emsp;&emsp;&emsp;&emsp;&nbsp;
      <input type="checkbox" name="income"> Spouse
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <input type="checkbox" name="income"> Medicaid / Medicare
      <br><br>
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
      <input type="checkbox" name="income"> Unemployment
      &emsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" name="income"> Pension / Retirement
      &emsp;&emsp;&emsp;
      <input type="checkbox" name="income"> Veterans Benefit
      <br><br><br>
      
      &emsp; Valid Medical Insurance ? 
      <input type="radio" name="insurance">Yes
      <input type="radio" name="insurance">No
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
      If yes, provider's name : <input type="text" name="insurer" style="margin-left:15px; width:200px">
      <br><br>
      
      &emsp; Any Hospitalization history (recent / past) ? 
      <input type="radio" name="hosp">Yes
      <input type="radio" name="hosp">No
      <br><br>
      
      &emsp; Currently on Medications ?
      <input type="radio" name="medication">Yes
      <input type="radio" name="medication">No
      &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
      If yes, list medications : <input type="text" name="medname" style="margin-left:15px; width:200px">
      <br><br>
      
      &emsp; Any ongoing treatment for a medical condition ? 
      <input type="radio" name="treatment">Yes
      <input type="radio" name="treatment">No
      &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
      If yes, list conditions : <input type="text" name="conditions" style="margin-left:15px; width:200px">
      <br><br>
      
      &emsp; Any previous charges ? 
      <input type="radio" name="pcharge1">Yes
      <input type="radio" name="pcharge1">No
      <br>
      <br>
      
      &emsp;&emsp;&emsp;&emsp;
      If yes, which year ? <input type="number" min="0" max="50" style="width:50px; margin-right:50px;" name="chargeyear">
      Charge : <input type="text" name="charge1" style="margin-right:50px;">
      Convicted ? 
      <input type="radio" name="convict1"> Yes
      <input type="radio" name="convict1"> No
      <br><br>
      
      &emsp;&emsp;&emsp;&emsp;
      If yes, which year ? <input type="number" min="0" max="50" style="width:50px; margin-right:50px;" name="convictyear">
      Charge : <input type="text" name="charge2" style="margin-right:50px;">
      Convicted ? 
      <input type="radio" name="convict2"> Yes
      <input type="radio" name="convict2"> No
      <br><br>
      
      &emsp; Previously Arrested ? 
      <input type="radio" name="acharge">Yes
      <input type="radio" name="acharge">No
      <br><br>
      
      &emsp;&emsp;&emsp;&emsp;
      If yes, which year ? <input type="number" min="0" max="50" style="width:50px; margin-right:50px;" name="arrest1">
      Charge : <input type="text" name="acharge1" style="margin-right:50px;">
      Convicted ? 
      <input type="radio" name="arrest1"> Yes
      <input type="radio" name="arrest1"> No
      <br><br>
      
      &emsp;&emsp;&emsp;&emsp;
      If yes, which year ? <input type="number" min="0" max="50" style="width:50px; margin-right:50px;" name="arrest2">
      Charge : <input type="text" name="acharge2" style="margin-right:50px;">
      Convicted ? 
      <input type="radio" name="arrest2"> Yes
      <input type="radio" name="arrest2"> No
      <br><br>
      &emsp; List of three people with positive influence in life and a brief description of the relationship with them :
      <br><br><br>
      
      &emsp;&emsp; Person 1 : 
      <input type="text" name="person1" style="margin-right:50px; margin-left:15px;">
      Relationship : 
      <textarea name="benefits1" rows="1" cols="60" data-role="none" style="resize:none;overflow:auto;margin-top:-9px;">
      </textarea>
      <br><br><br>
      
      &emsp;&emsp; Person 2 : 
      <input type="text" name="person2" style="margin-right:50px; margin-left:15px;">
      Relationship : 
      <textarea name="benefits2" rows="1" cols="60" data-role="none" style="resize:none;overflow:auto;margin-top:-9px;">
      </textarea>
      <br><br><br>
      
      &emsp;&emsp; Person 3 : 
      <input type="text" name="person3" style="margin-right:50px; margin-left:15px;">
      Relationship : 
      <textarea name="benefits3" rows="1" cols="60" data-role="none" style="resize:none;overflow:auto;margin-top:-9px;">
      </textarea>
      <br>
      <br>
      <center> Page 1 <a href="restorativejustice2" style="margin-left:10px"> Page 2</a>
      
      <br><br><br><br>
      <center> 
      <a href="caseinfo" style="margin-left:10px;"> Case Info Home</a>
      <a href="tlc" style="margin-left:10px;"> TLC</a>
      <b style="margin-left:10px;"> Restorative Justice</b>
      <a href="communityservice" style="margin-left:10px;"> Community Service</a>
      <a href="mentalhealth" style="margin-left:10px;"> Mental Health</a>
      </center>
      
      </fieldset>
      </form>
	</div>
</div>