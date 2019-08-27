
var ajax = new Array();

function getContractList(sel)
{
	var countryCode = sel.options[sel.selectedIndex].value;
	document.getElementById('dhtmlgoodies_city').options.length = 0;	// Empty city select box
	if(countryCode.length>0){
		var index = ajax.length;
		ajax[index] = new sack();
		
		ajax[index].requestFile = 'getcontracts.php?countryCode='+countryCode;	// Specifying which file to get
		ajax[index].onCompletion = function(){ createCities(index) };	// Specify function that will be executed after file has been found
		ajax[index].runAJAX();		// Execute AJAX function
	}
}

function createCities(index)
{
	var obj = document.getElementById('dhtmlgoodies_city');
	eval(ajax[index].response);	// Executing the response from Ajax as Javascript code	
}


function getSubCategoryList(sel)
{
	var category = sel.options[sel.selectedIndex].value;
	document.getElementById('company_subcategory').options.length = 0;	// Empty city select box
	if(category.length>0){
		var index = ajax.length;
		ajax[index] = new sack();
		
		ajax[index].requestFile = 'getSubCategories.php?category='+category;	// Specifying which file to get
		ajax[index].onCompletion = function(){ createSubCategories(index) };	// Specify function that will be executed after file has been found
		ajax[index].runAJAX();		// Execute AJAX function
	}
}
function createSubCategories(index)
{
	var obj = document.getElementById('contract_subcategory');
	eval(ajax[index].response);	// Executing the response from Ajax as Javascript code	
}		