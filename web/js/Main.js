var customer = new Customer();
var employee = new Employee();

$(document).ready(function()
{
	$('#addCustomer').on('click', function() {		
		customer.createCustomerForm();
	});
	
	$('#addEmployee').on('click', function() {		
		employee.createEmployeeForm();
	});
		
	$('.modal')
	.on('click', '#createCustomer', function() {
		customer.createCustomer();		
	})
	.on('click', '#createEmployee', function() {
		employee.createEmployee();		
	})
	.on('click', '#customer-tab a, #employee-tab a', function(e) {
		e.preventDefault();
		$(this).tab('show');
	})
	.on('change', 'input[type="text"]', function() {
		//alert('validate string')
	})
	.on('change', 'input[type="email"]', function() {
		//alert('validate email')
	})
	;
	
	window.setTimeout(function() {
		$('.flash').fadeTo(2000, 500)
		.slideUp(500, function(){
			this.remove();
			});
	}, 300);
		
});

