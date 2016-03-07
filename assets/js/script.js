var site = function(){

	return {
	
		init: function(){

			var that = this;

			this.confirm_delete();

			this.mask_money();

			this.form_validate();
	
		},

		confirm_delete: function(){

			var that = this, btn = $('.btn-confirm-delete');

			btn.on('click',function(){
	            
	            var t = $(this), r = confirm('Deseja deletar este item?');

	            return (r == true) ? true : false;

	        });

		},

		mask_money: function(){

			var that = this, preco = $('.form-control-preco');

			preco.maskMoney({prefix:'', allowNegative: true, thousands:'', decimal:',', affixesStay: false});

		},


		form_validate: function(){

			var that = this, form = $('form');

			form.submit(function(form_el){

				var fr = $(this).find('.field_required'),
					error = 0, errors = [];

				fr.each(function(fr_el){
					
					var t = $(this), v = t.val(), l = (v) ? v.length : 0, type = t.data('type'),
						min = t.data('min'), title = t.data('title');

						t.removeClass('error');

					if( type == 'min' && l < min){

						error ++;
						errors.push('<strong>'+title+':</strong> no mínimo '+min+' caracteres');
						t.addClass('error');

					}else if( type == 'email' && !that.email_validate(v) ){

						error ++;
						errors.push('<strong>'+title+':</strong> preencha corretamente');
						t.addClass('error');

					}else if( type == 'select' && !v ){

						error ++;
						errors.push('<strong>'+title+':</strong> selecione 1 opção');
						t.addClass('error');

					}


				});

				// console.log(errors +' - '+error);

				return (error>0) ? false : true;

			});


		},

		email_validate: function(email) {
		    var r = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		    return r.test(email);
		}
	
	}
}

$(function () {

	s = new site();
	s.init();

});