<div id="main-body">
    <div id="signin">
            <a href="mainmenu"><input type="button" value="   Main Menu   " name="login"></a>
    </div>
	<div id="note"> <h2> Account Details </h2> </div>    
    <br>
    <div id="formid">
    &emsp;&emsp;&emsp;&emsp; 
    <h4 style="margin-left:-141px; margin-top:88px; margin-bottom:151px;"> <a href="programinfo"> Personal Information </a></h4>&emsp;
    <h4 style="margin-left:190px; background:#DDD; width:120px; text-align:center; margin-top:-150px; padding:5px; margin-bottom:47px;"> 
    Case Information </h4>
    </div>
    <br>
    
    <div id = "form2">
     <form name = "caseInfo" enctype="text/plain">
     <fieldset>
     <legend>Case Details </legend>
     
     <br><br>
     &emsp; Citation Number: <input type="text" id="cid"> &emsp;&emsp;&emsp;&emsp;&emsp;
     Date Charged: <input type="text" id="datepicker4" placeholder="MM/DD/YYYY" onFocus="this.placeholder = ''" size="12"> 
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <br><br><br>
     
     &emsp; Recommended Programs: <input type="checkbox" id="tlc" name="program" style="margin-left:20px;"> TLC
     <input type="checkbox" id="cs" value="1" name="program" style="margin-left:25px"> Community Service
     <input type="checkbox" id="rj" value="1" name="program" style="margin-left:25px"> Restorative Justice
     <input type="checkbox" id="mh" value="1" name="program" style="margin-left:25px"> Mental Health Program
     
     <br><br><br><br><br><br>
     <center> 
     <b style="margin-left:10px;"> Case Info Home</b> 
     <a href="tlc" style="margin-left:10px;"> TLC</a>
     <a href="restorativejustice" style="margin-left:10px;"> Restorative Justice</a>
     <a href="communityservice" style="margin-left:10px;"> Community Service</a>
     <a href="mentalhealth" style="margin-left:10px;"> Mental Health</a>
     </center>  
     <br>
     <br>
     <br>
     <input type="button" value="Submit" name="retrieve" id="submit" style="background:#EFEFEF; margin-left:420px; padding:3px; width:80px">   
     </fieldset>
     </form>
	</div>
</div>

<script>
$("#submit").click( function () {       
        var citationNumber = $("#cid").val();
        var dateCharged = $("#datepicker4").val();
        var tlc = $("#tlc:checked").val();
        var communityService = $("#cs:checked").val();
        var restorativeJustice = $("#rj:checked").val();
        var mentalHealth = $("#mh:checked").val();
        if(!tlc) tlc = 0;
        if(!communityService) communityService = 0;
        if(!restorativeJustice) restorativeJustice = 0;
        if(!mentalHealth) mentalHealth = 0;
        $.ajax({
            url: '<?php echo Router::Url(array('controller' => 'communitycourt','action' => 'caseinfo'), TRUE); ?>',
            type: 'post',
            data: {
                citationNumber: citationNumber,
                dateCharged: dateCharged,
                tlc: tlc,
                communityService: communityService,
                restorativeJustice: restorativeJustice,
                mentalHealth: mentalHealth,
            },
        })  
        .success(function () {
            console.log("done");
        });
    });
</script>