var Employee = function()
{
	this.createEmployeeForm = function(employee)
	{
		employee = employee || {};
		var template = twig({
            href: 'templates/employee.form.twig',
            async: false
        });
		var body = template.render(employee);
		var modal = twig({
			href: 'templates/modal.twig',
			async: false
		});
		
		var dialog = modal.render({modal: {title: 'Add Employee', body: body}});
		$('.modal').empty().html(dialog);
		$('.modal').modal('show');
	};
	
	this.createEmployee = function()
	{
		var data = {};
		var inputs = $('.createEmployeeForm input');
		inputs.push($('.createEmployeeForm select'));

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
			
		var promise = Backend.call('/employee', 'POST', data);		
		promise.done(function(data) {
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