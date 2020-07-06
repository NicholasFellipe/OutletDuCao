    $(document).ready(function () {
        // validar frete
        $('#buscar_frete').click(function () {
            var CEP_CLIENTE = $('#cep_frete').val();
            var PESO_FRETE = $('#peso_frete').val();
            if (CEP_CLIENTE.length !== 8) {
                alert('Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto');
                $('#frete').addClass(' text-center text-danger');
                $('#frete').html('<b>Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto</b>');
                $('#cep_frete').focus();
            } else {
                $('#frete').html('<img src="view/images/loader.gif"> <b>Carregando...</b>');
                $('#frete').addClass(' text-center text-danger');
                // carrego o combo com os bairros
                $('#frete').load('https://outletducao.com.br/controller/frete.php?cepcliente=' + CEP_CLIENTE + '&pesofrete=' + PESO_FRETE);
            } // fim do IF digitei o CEP
        }); // fim do change
    }); // fim do ready