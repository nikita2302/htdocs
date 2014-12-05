<div id="main-body">
	<div id="note"> 
        <h2> Welcome to the Data Entry System </h2> 
    </div> 
    <div id="permissions">
        <a id="button" href="home"><strong>Exit System </strong></a>
    <form name="user-admin" enctype="text/plain">            
        <fieldset style="padding:5px; border-style: solid; border-width: 1px; border-color: #666">
        <legend style="padding:5px; border-style: solid; border-width: 1px; border-color: #666"> Options Available </legend>
        	<a href = "programinfo">
                <?php echo $this->Html->image('createactive.png', array('width' => '120', 'height' => '50'));?>

               <!--  <img src="img/createactive.png" height="50" width="120" onMouseOver="this.src='img/createselected.png'" onMouseOut="this.src='img/createactive.png'"> -->
           </a>
            <a href = "searchedit">
                <?php echo $this->Html->image('editactive.png', array('width' => '120', 'height' => '50'));?>
                <!-- <img src="img/editactive.png" height="50" width="120" onMouseOver="this.src='img/editselected.png'" onMouseOut="this.src='img/editactive.png'"> -->
            </a>
            <a href="searchview">
                <!-- <img src="img/viewactive.png" height="50" width="120" onMouseOver="this.src='img/viewselected.png'" onMouseOut="this.src='img/viewactive.png'"> -->
                <?php echo $this->Html->image('viewactive.png', array('width' => '120', 'height' => '50'));?>
            </a>
        </fieldset>               
    </form>  
    </div>               
</div>
