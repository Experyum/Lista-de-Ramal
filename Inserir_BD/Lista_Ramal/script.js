function filter() {
	var input, filter, table, trs, tableResults, containerFilter, containerGeral, titulo, icone;
	input = document.getElementById("nome_ramais");
	filter = input.value.toUpperCase();
	table = document.getElementById("table-ramal");
	trs = table.getElementsByTagName("tr");
	tableResults = document.getElementById("table-filtro");
	containerFilter = document.getElementById("container-filter");
	containerGeral = document.getElementById("container-geral");
	titulo = document.getElementById("titulo");


	logoMenor = document.getElementById("logo-menor")
	rowLogo = document.getElementById("row-logo-main");


	if (filter) {
		let resultsTotal = Array.from(trs).map(tr => {
			let results = [];
			if (Array.from(trs).indexOf(tr) != 0) {
				if (tr != null && tr != undefined && tr != 0) {
					let arrTd = Array.from(tr.getElementsByTagName("td"));
					if (arrTd.length > 0) {
						results = arrTd.filter(td => {
							let val = td.textContent || td.innerText;
							if (val)
								return val.toUpperCase().includes(filter);
							return false
						})
					}
				}
				if (results.length > 0) {
					tr.style.display = "";
				}
				else {
					tr.style.display = "none"
				}
			}
			return results;
		})
		if (resultsTotal.length > 0) {
			tableResults.style.display = "block";
			titulo.style.display = "none";
			containerFilter.classList.add('container-filter-search');
			rowLogo.style.display = "none";
			logoMenor.classList.add('logo-menor-show');


		}
		else {
			tableResults.style.display = "none"
			rowLogo.style.display = "block";
			logoMenor.classList.remove('logo-menor-show');
			containerFilter.classList.remove('container-filter-search');
		}
	}
	else {
		tableResults.style.display = "none";
		titulo.style.display = "";
		containerFilter.style.display = "";
		containerFilter.style.height = "";
		containerFilter.style.verticalAlign = "";
		rowLogo.style.display = "flex";
		logoMenor.classList.remove('logo-menor-show');
		containerFilter.classList.remove('container-filter-search');
	}

	// for (let i = 1; i < trs.length; i++) {
	// 	for (let j = 0; j < tds.length; j++) {
	// 		txtValue = tds[j].textContent || tds[j].innerText;
	// 		if (txtValue.toUpperCase().indexOf(filter) > -1) {
	// 			trs[i].style.display = "";
	// 		} else {
	// 			trs[i].style.display = "none";
	// 		}
	// 	}
	// }
}


function togglePopup() {
	if (document.getElementById("myForm").style.display != 'block')
		document.getElementById("myForm").style.display = "block";
	else
		document.getElementById("myForm").style.display = "none";
}


/*$(function(){
	$("#nome_ramais").keyup(function(){
		//Recuperar o valor do campo
		var nome_ramais = $(this).val();
		
		//Verificar se há algo digitado
		if(nome_ramais != ''){
			var dados = {
				palavra : nome_ramais
			}
			$.post('proc_pesq_user.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$(".resultado").html(retorna);
			});
		}
		$("#table-ramal").remove();
	});
});*/