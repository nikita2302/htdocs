// States
var s_a = new Array();
s_a[1] = "Alabama|Alaska|Arizona|Arkansas|California|Colorado|Connecticut|Delaware|District of Columbia|Florida|Georgia|Hawaii|Idaho|Illinois|Indiana|Iowa|Kansas|Kentucky|Louisiana|Maine|Maryland|Massachusetts|Michigan|Minnesota|Mississippi|Missouri|Montana|Nebraska|Nevada|New Hampshire|New Jersey|New Mexico|New York|North Carolina|North Dakota|Ohio|Oklahoma|Oregon|Pennsylvania|Rhode Island|South Carolina|South Dakota|Tennessee|Texas|Utah|Vermont|Virginia|Washington|West Virginia|Wisconsin|Wyoming";

function populateStates1() 
{
    var state = document.getElementById("state1");
	state.length = 0;
    state.options[0] = new Option(' ', '-1');
    state.selectedIndex = 0;
	var state_arr = s_a[1].split("|");
    for (var i = 0; i < state_arr.length; i++) 
	{
        state.options[state.length] = new Option(state_arr[i], state_arr[i]);
    }
}

function populateStates2() 
{
    var state = document.getElementById("state2");
	state.length = 0;
    state.options[0] = new Option(' ', '-1');
    state.selectedIndex = 0;
	var state_arr = s_a[1].split("|");
    for (var i = 0; i < state_arr.length; i++) 
	{
        state.options[state.length] = new Option(state_arr[i], state_arr[i]);
    }
}

function populateStates3() 
{
    var state = document.getElementById("state3");
	state.length = 0;
    state.options[0] = new Option(' ', '-1');
    state.selectedIndex = 0;
	var state_arr = s_a[1].split("|");
    for (var i = 0; i < state_arr.length; i++) 
	{
        state.options[state.length] = new Option(state_arr[i], state_arr[i]);
    }
}


var e_a = new Array();
e_a[1] = "White|African American|American Indian|Asian|Hispanic|Pacific Islander|Two or more races|Other";

function ethnicity()
{
	var eth = document.getElementById("ethnicity");
	eth.length = 0;
	eth.options[0] = new Option(' ', '-1');
	eth.selectedIndex = 0;
	var eselect = e_a[1].split("|");
    for (var i = 0; i < eselect.length; i++) 
	{
        eth.options[eth.length] = new Option(eselect[i], eselect[i]);
    }
}