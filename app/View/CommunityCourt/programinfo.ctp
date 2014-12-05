<div id="main-body">
    <div id="signin">
            <a href="mainmenu"><input type="button" value="   Main Menu   " name="login"></a>
    </div>
	<div id="note"> <h2> Account Details </h2> </div>
    <div id="formid">            
	&emsp;&emsp;&emsp;&emsp; <h4 style="margin-left:50px; background:#CCC; width:130px; padding:5px; align:center;"> Personal Information </h4>&emsp;
    <h4 style="width:130px; padding:5px; align:center;"><a href="caseinfo"> Case Information </a></h4>
    </div>
    <div id = "form1">
     <form name = "personalInfo" enctype="text/plain" id="form1" method="post">
        <a id="button" href="mainmenu"><strong>Main Menu</strong></a>
     <fieldset>
     <legend>Personal Details </legend>
     
     Current Date: <input type="text" id="datepicker1" placeholder="MM/DD/YYYY" onFocus="this.placeholder = ''"> 
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     Date Referred to Court: <input type="text" id="datepicker2" placeholder="MM/DD/YYYY" onFocus="this.placeholder = ''">
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     Citation Number: <input type="text" id="citationNumber">
	 <br><br> <hr size="1.2" noshade style="color:#000;"> <br>
     
     &nbsp;&nbsp; First Name: <input type="text" id="fName" style="margin-right:50px;">
     Middle Initial: <input type="text" id="mInitial" size="3" style="margin-right:50px">
     Last Name: <input type="text" id="lName">
     <br><br>
     
     &nbsp;&nbsp; Street Address: <textarea id="sAddress" rows="2" data-role="none" cols="30" 
     style="margin-right:53px; resize:none; overflow:auto;"> 
     </textarea>
     City: <input type="text" id="city" size="15" style="margin-right:40px; margin-top:16px;">
     State: <select name="state" id="state1" style="margin-right:40px"> <script> populateStates1() </script> </select>
     Zip Code: <input type="text" id="zip" size="5" maxlength="5">
     <br><br>
     
     &nbsp;&nbsp; Date of Birth: <input type="text" id="datepicker3" placeholder="MM/DD/YYYY" onFocus="this.placeholder = ''" 
     style="margin-right:50px;">
     Primary Phone Number: <input type="text" id="pPhone" size="10" maxlength="10" style="margin-right:50px;">
     Additional Phone Number: <input type="text" id="sPhone" size="10" maxlength="10" style="margin-right:50px;">
     <br><br>
     
     &nbsp;&nbsp; Gender: &nbsp;&nbsp; <input type="radio" name="gender" value="male"> Male &nbsp;&nbsp; <input type="radio" name="gender" value="female"> Female
     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp; Ethnicity/Race: <select id="ethnicity" style="margin-right:50px"> 
	 <script> ethnicity() </script> </select> 
     Highest Level of Education 
     <select id="education"> 
     <option> </option> <option>High Scool</option> <option> Bachelors </option> <option> Masters </option> 
     </select>
     <br><br> <hr size="1.2" noshade style="color:#000;"> <br>
     </fieldset>
     <br><br>
     
     <fieldset>
     <legend> Emergency Contact</legend>
     &nbsp;&nbsp; First Name: <input type="text" id="fContactName" size="15" style="margin-right:50px;">
     Last Name: <input type="text" id="lContactName" size="15" style="margin-right:50px;">
     Contact Number: <input type="text" id="eContactNumber" size="15" maxlength="10" style="margin-right:50px;">
     <br><br>
     
     &nbsp;&nbsp; Street Address: <textarea id="sAddress2" rows="2" data-role="none" cols="30" 
     style="margin-right:53px; resize:none; overflow:auto;"> 
     </textarea>
     City: <input type="text" id="city2" size="15" style="margin-right:40px; margin-top:16px;">
     State: <select name="state" id="state2" style="margin-right:40px"> <script> populateStates2() </script> </select>
     Zip Code: <input type="text" id="zip2" size="5" maxlength="5">
     <br><br>
     
     &nbsp;&nbsp; Comments: <textarea id="comments" rows="2" data-role="none" cols="135" 
     style="resize:none; overflow:auto;">
     </textarea>
     
     <br><br><br>
     <input type="button" value="Submit" name="retrieve" id="submit" style="background:#EFEFEF; margin-left:420px; padding:3px; width:80px">
     
     </fieldset>
     </form>
	</div>
</div>

<script>
$("#submit").click( function () {       
        var currentdate = $("#datepicker1").val();
        var datereffered = $("#datepicker2").val();
        var citationNumber = $("#citationNumber").val();
        var fName = $("#fName").val();
        var mInitial = $("#mInitial").val();
        var lName = $("#lName").val();
        var sAddress = $("#sAddress").val();
        var city = $("#city").val();
        var state1 = $("#state1").val();
        var zip = $("#zip").val();
        var dob = $("#datepicker3").val();
        var pPhone = $("#pPhone").val();
        var sPhone = $("#sPhone").val();
        var gender = $("input:radio[name=gender]:checked").val();
        var ethnicity = $("#ethnicity").val();
        var education = $("#education").val();
        var fContactName = $("#fContactName").val();
        var lContactName = $("#lContactName").val();
        var eContactNumber = $("#eContactNumber").val();
        var sAddress2 = $("#sAddress2").val();
        var city2 = $("#city2").val();
        var state2 = $("#state2").val();
        var zip2 = $("#zip2").val();
        var comments = $("#comments").val();
        console.log(gender);
        $.ajax({
            url: '<?php echo Router::Url(array('controller' => 'communitycourt','action' => 'programinfo'), TRUE); ?>',
            type: 'post',
            data: {
                currentdate     : currentdate,
                datereffered    : datereffered,
                citationNumber  : citationNumber,
                fName           : fName,
                mInitial        : mInitial,
                lName           : lName,
                sAddress        : sAddress,
                city            : city,
                state1          : state1,
                zip             : zip,
                dob             : dob,
                pPhone          : pPhone,
                sPhone          : sPhone,
                gender          : gender,
                ethnicity       : ethnicity,
                education       : education,
                fContactName    : fContactName,
                lContactName    : lContactName,
                eContactNumber  : eContactNumber,
                sAddress2       : sAddress2,
                city2           : city2,
                state2          : state2,
                zip2            : zip2,
                comments        : comments,
            },
        })  
        .success(function () {
            console.log("done");
        });
    });
</script>