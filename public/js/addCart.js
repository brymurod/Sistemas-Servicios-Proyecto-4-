function add(idP,nameP,precioP,unidadP)
	{	
		swal({
		  title: 'Carrito de Compras, Por ' + unidadP,
		  input: 'number',
		  showCancelButton: true,
		  confirmButtonText: 'Enviar',
		  showLoaderOnConfirm: true,
		  preConfirm: function (cantidad) {
			return new Promise(function (resolve, reject) {
				var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
				$.ajax({
					url: 'shop_cart/add',
					method: 'post',             
					data: { id: idP, name: nameP, precio: precioP, quantity: cantidad,  _token: CSRF_TOKEN },
					dataType: 'JSON',
					success: function(data){
						/*alert('Success');
						alert(data);
						swal(
						  'Good job!',
						  'You clicked the button!',
						  'success'
						);*/
						resolve(data.name);
					},
					error: function(data){							
						reject('Error al añadir datos en el carrito');
					},
				}).done(function (data) {
					// I'm assuming that the 'property_details' table has a 'url' field?
					// If not, just replace this with whatever you need.
					//This always works
					//alert('Done');
					//alert(data.responseText);
					resolve(data.name);
				});
			})
		  },
		  allowOutsideClick: false
		}).then(function (response) {
		  swal({
			type: 'success',
			title: 'Accion Finalizada',
			html: 'Añadido el producto: ' + response
		  })
		}).catch(swal.noop);			        
		
		/*var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
		$.ajax({
			url: 'shop_cart/add',
			method: 'post',             
			data: { name: id, _token: CSRF_TOKEN },
			dataType: 'JSON',
			success: function(data){
				alert('Success');
				alert(data);
				swal(
				  'Good job!',
				  'You clicked the button!',
				  'success'
				);
			},
			error: function(data){	
				alert('Error');			
				alert(data.responseText);				
			},
		}).done(function (data) {
            // I'm assuming that the 'property_details' table has a 'url' field?
            // If not, just replace this with whatever you need.
			//This always works
            //alert('Done');
			//alert(data.responseText);
		});*/
	}