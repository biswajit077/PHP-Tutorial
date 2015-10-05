/**
 * 
 */

$(function(){
	var $orders = $('#orders');
	var $name = $('#name');
	var $drink = $('#drink');
	
	function addOrder(order){
		$orders.append('<li>Name:'+order.name+', Dirnk:'+order.drink+'</li>');
	}
	
	$.ajax({
		type:'GET',
		url:'/api/orders',
		success:function(data){
			$.each(data, function(idx, obj){
				addOrder(obj);
			});
		},
		error:function()
		{
			alert('Error loading orders');
		}
	});
	
	$('#add-order').on('click', function(){
		var order = {
				name: $name.val(),
				drink: $drink.val()
		};
		
		$.ajax({
			type:'POST',
			url:'/api/orders',
			data: order,
			success: function(newData){
				addOrder(newData);
			},
			error:function()
			{
				alert('Error Saving orders');
			}
		});
	});
	
	$orders.delegate('.remove', 'click', function(){
		
		$.ajax({
			type:'DELETE',
			url:'/api/orders'+$(this).attr('data-id'),
			success: function(){
				
			}
		});
	});
});