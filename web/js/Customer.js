var Customer = function()
{
	this.createCustomerForm = function(customer, step)
	{
		customer = customer || {};
		var template = twig({
            href: 'templates/customer.form.twig',
            async: false
        });
		var body = template.render(customer);
		var modal = twig({
			href: 'templates/modal.twig',
			async: false
		});
		
		var dialog = modal.render({modal: {title: 'Add Customer', body: body}});
		$('.modal').empty().html(dialog);
		$('.modal').modal('show');
	};
	
	this.createCustomerAddress = function(customer)
	{
		$('.modal').modal('toggle');
		customer = customer || {};
		var template = twig({
            href: 'templates/address.form.twig',
            async: false
        });
		var body = template.render(customer);
		var modal = twig({
			href: 'templates/modal.twig',
			async: false
		});
		
		var dialog = modal.render({modal: {title: 'Add Customer\'s Address', body: ''}});
		$('.modal').empty().html(dialog);
		$('.modal').modal('show');
		console.log(dialog);
	}
	
	this.createCustomer = function()
	{
		var data = {};
		var inputs = $('.createCustomerForm input');
		inputs.push($('.createCustomerForm select'));

		for (var i = 0; i < inputs.length; i++) {
			
			var el = $(inputs[i]);
			var id = el.attr('id');
			
			if (el.prop('type') == 'checkbox') {
				if (inputs.is(':checked')) {
					data[id] = true;
				} else {
					data[id] = false;
				}
			} else {			
				data[el.attr('id')] = el.val();
			}
		}
				
		var promise = Backend.call('/customer', 'POST', data);		
		promise.done(function(data, status, xhr) {
			$('.modal').modal('toggle');
			location.reload();
		});
		
	};
	
	this.validate = function()
	{
		return true;
	}
	
	return this;
};