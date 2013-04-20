$(document).ready(function(){
	//en la variable match se asignaran todos los input texto que que tengan la clase CSS default
	var match = 'input.default[@type=text]';
	$(match).focus(function(){ //escribe el valor real de la busqueda en negro
		this.valuedefault =  this.valuedefault || this.value;
		if (this.value == this.valuedefault)
			this.value = '';
			$(this).css('color','#000');
	});
	$(match).blur(function(){  //cuando se borre el texto se deja el valor por defecto
		if (this.value.length == 0 || this.value == this.valuedefault)
			$(this).css('color','#aaa');
		if (this.valuedefault && this.value.length==0)
			this.value = this.valuedefault;
	});
});
