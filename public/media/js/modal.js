$(function(){
	let fx = {
		'initModal':function(){
			if($('.modal-window').length === 0){
				return $('<div>').addClass('modal-window').appendTo('body');
			}else{
				return $('.modal-window');
			}
		}
	}

	$('.my_modal').click(function(){
		let id = $(this).attr('data-id');
		let modal = fx.initModal();
		$.ajax({
			type: 'post',
			url: '/ajax/product',
			data: 'id=' + id,
			success: function(data){
				modal.append(data);
			},
			error: function(msg){
				console.log(msg);
			}

		});
	});

});