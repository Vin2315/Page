

			            
            const vinicio = document.querySelector("#email1");
			vinicio.addEventListener("submit", toto);

			function toto() {

			var tata = /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)$/;

			//$("#email1").removeClass("is-valid");
			//$("#email1").removeClass("is-invalid");

			if (vinicio.value.match(tata)) {
			//	document.querySelector("#email1").classList.add("mystyle");
			alert ("email ok"); 
			}else {
				//document.querySelector("#email1").classList.add("mystyle2");
				alert ("email pas ok ")
			}
        }
