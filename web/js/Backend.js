var Backend = new function()
{
	this.call = function(url, method, data, callback)
	{
		callback = callback || {};
		
		return $.ajax({
			url: url,
			data: data,
			method: method,
			dataType: 'json',
			success: callback,
			error: function() {
				alert('An error occured');
			}
		})
	}
	
	return this;
};