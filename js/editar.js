const form = document.querySelector('form#formProduto');
const inputPreco = form.querySelector('input#preco-compra');
const inputPreco2 = form.querySelector('input#preco-venda');

// Aplicamos as máscaras
VMasker(inputPreco).maskMoney();
VMasker(inputPreco2).maskMoney();

// quando o formulário for submetido
form.addEventListener('submit', () => {
    event.preventDefault(); // bloqueia o recarregamento
    const inputNome = form.querySelector('#nome');

    if (validarCampos(inputNome, inputPreco, inputPreco2)) {
        inputPreco.value = Number(inputPreco.value.replaceAll('.', '').replaceAll(',', '.'));
        inputPreco2.value = Number(inputPreco2.value.replaceAll('.', '').replaceAll(',', '.'));
        form.submit();
    }
});

function validarCampos(...campos)
{
    let status = true;
    const corrigeNumero = function(valor) {
        return Number(valor.replaceAll('.', '').replaceAll(',', '.'));
    }

    campos.forEach(campo => {
        console.log(campo)
        if (
            campo.value.length <= 1 ||
            campo.id == 'preco-compra' && corrigeNumero(campo.value) > 100000000 ||
            campo.id == 'preco-venda' && corrigeNumero(campo.value) > 100000000
        ) {
            campo.nextElementSibling.classList.remove('d-none');
            status = false;
        }
        else {
            campo.nextElementSibling.classList.add('d-none');
        }
    });

    return status;
}