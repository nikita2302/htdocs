<div id="main-body">
   <div id="signin">
            <a href="mainmenu"><input type="button" value="   Main Menu   " name="login"></a>
    </div>
 	<div id="note"> <h2> Account Details </h2> </div>
     <div id="formid">
	&emsp;&emsp;&emsp;&emsp; 
     <h4 style="margin-left:-141px; margin-top:88px; margin-bottom:151px;"> <a href="programinfo"> Personal Information </a></h4>&emsp;
     <h4 style="margin-left:190px; background:#DDD; width:120px; text-align:center; margin-top:-150px; padding:5px; margin-bottom:47px;"> 
     Case Information </h4>
     </div>
     <div id = "form2">
      <form name = "caseInfo" enctype="text/plain">
      <fieldset>
      <legend>Case Details </legend>
      <h2 style="text-decoration:underline; color:#000; margin-left:20px; font-weight:500; margin-bottom:-2px"> TLC </h2>
      <br>
      
      &nbsp;&nbsp;&nbsp;&nbsp;Name of assigning Judge : 
      <select name="judge" style="width:80px;margin-right:60px;" name="jname"> 
      <option> </option> <option> Sloan</option> <option>Gaines</option>
      </select>
      Reason for Charge: <input type="text" name="reason" style="margin-right:60px;" name="reason">
      <br><br><br>
      
      <hr size="1.2" noshade style="color:#000;"> <br><br>
      
      &emsp; If speeding, how fast ?    <input type="number" min="0" max="150" style="width:50px" name="speed"> MPH
      <br><br><br>
      
      &emsp; License Suspended ? 
      <input type="radio" name="license">Yes
      <input type="radio" name="license">No
      <br><br><br>
      
      &emsp; Events that led to the current citation : 
      <textarea name="reason1" rows="2" data-role="none" cols="110" style="resize:none; overflow:auto; margin-left:10px;">
      </textarea> 
      <br><br><br>
      
      &emsp; Listening to music at the time of violation? 
      <input type="radio" name="music">Yes
      <input type="radio" name="music">No
      <br><br><br>
      
      &emsp; Using a cell phone at the time of violation? 
      <input type="radio" name="phone">Yes
      <input type="radio" name="phone">No
      <br><br><br>
      
      &emsp; Any other legal charges or traffic violations ? (Excluding current citation / charge) 
      <input type="radio" name="previous">Yes
      <input type="radio" name="previous">No
      <br><br>
      &emsp; <textarea name="reason2" rows="2" data-role="none" cols="160" style="resize:none; overflow:auto;"></textarea> 
      <br><br><br>
      
      &emsp; Any history of probation for traffic or criminal charges ?
      <input type="radio" name="history">Yes
      <input type="radio" name="history">No
      <br><br>
      &emsp; <textarea name="reason3" rows="2" data-role="none" cols="160" style="resize:none; overflow:auto;"></textarea> 
      <br><br><br>
      
      &emsp; Frequency of wearing seatbelt as a driver or passenger : 
      <select name="belt" style="margin-left:10px;" name="beltfrequency"> 
      <option></option> <option> Never</option><option>Sometimes</option><option>Often</option><option>Always</option>
      </select>
      <br><br><br>
      
      &emsp; Alcohol consumer ? (present / past)
      <input type="radio" name="alcohol">Yes
      <input type="radio" name="alcohol">No
      
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      &emsp; Drugs consumer ? (present / past)
      <input type="radio" name="drugs">Yes
      <input type="radio" name="drugs">No
	 <br><br><br>
      
      &emsp; Previously diagnosed with ADD / ADHD ?
      <input type="radio" name="disorder">Yes
      <input type="radio" name="disorder">No
      
      &emsp; Previously diagnosed with mental health issue ?
      <input type="radio" name="mhi">Yes
      <input type="radio" name="mhi">No
      <br><br>
      &emsp; <textarea name="mReason" rows="2" data-role="none" cols="160" style="resize:none; overflow:auto;"></textarea> 
      <br><br><br>
      
      &emsp; Taking any prescribed medication ?
      <input type="radio" name="medication">Yes
      <input type="radio" name="medication">No
      <br><br>
      &emsp; <textarea name="mDescription" rows="2" data-role="none" cols="160" style="resize:none; overflow:auto;"></textarea> 
      <br><br><br>
      
      &emsp; Program Requirements : 
      <br><br>
      
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <input type="checkbox" name="tlcreq"> Alive at 25
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      Date of Completion : <input type="text" name="datepicker5" placeholder="MM/DD/YYYY" onFocus="this.placeholder = ''" size="12">
      <br><br>
      
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <input type="checkbox" name="tlcreq"> Defensive Driving
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
      Date of Completion : <input type="text" name="datepicker6" placeholder="MM/DD/YYYY" onFocus="this.placeholder = ''" size="12">
      <br><br>
      
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <input type="checkbox" name="tlcreq"> Community Service
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
      Date of Completion : <input type="text" name="datepicker7" placeholder="MM/DD/YYYY" onFocus="this.placeholder = ''" size="12">
      <br><br><br>
      
      <font style="margin-left:220px">All conditions satisfied : </font>
      <input type="radio" name="satisfied">Yes
      <input type="radio" name="satisfied">No
      &emsp;&emsp;&emsp;&emsp;
      Follow up date : <input type="text" name="datepicker8" placeholder="MM/DD/YYYY" onFocus="this.placeholder = ''" size="12">
      <br><br><br><br><br><br>
      <center> 
      <a href="caseinfo" style="margin-left:10px;"> Case Info Home</a>
      <b style="margin-left:10px;">TLC</b> 
      <a href="restorativejustice" style="margin-left:10px;"> Restorative Justice</a>
      <a href="communityservice" style="margin-left:10px;"> Community Service</a>
      <a href="mentalhealth" style="margin-left:10px;"> Mental Health</a>
      </center>
      
      </fieldset>
      </form>
	</div>
</div>