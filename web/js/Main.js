var customer = new Customer();

$(document).ready(function()
{
	$('#addCustomer').on('click', function() {		
		customer.createCustomerForm();
	});
		
	$('.modal')
	.on('click', '#createCustomer', function() {
		customer.createCustomer();		
	})
	.on('click', '#customer-tab a', function(e) {
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
		
});

