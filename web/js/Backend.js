var Backend = new function()
{
	this.call = function(url, method, data, callback)
	{
		callback = callback || {};
		
		return $.ajax({
			url: url,
			data: data,
			method: method,
			success: callback,
			error: function(xhr, status, message) {
				alert(message);
			}
		})
	};
	
	return this;
};