
        var btn = document.getElementById('form-submit');

        btn.addEventListener('click', () => {

		var nomejs = document.getElementById('nome').value;
		var emailjs = document.getElementById('email').value;
		var datajs = document.getElementById('data').value;
		var senhajs = document.getElementById('senha').value;
		var Csenhajs = document.getElementById('Csenha').value;
		var imagemjs = document.getElementById('imagem').value;

    if(nomejs == "" || nomejs == null){

      $("#erro-nome").html("Nome é obrigatório.");

      alert('Preencha todos os campos!')

      return(false);

    }

    if(emailjs == "" || emailjs == null){

      $("#erro-email").html("Email é obrigatório.");

      alert('Preencha todos os campos!')
      
      return(false);

    }

   	return(true);

});

 


