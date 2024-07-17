<h3>Fornecedor</h3>

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Entre 1 e 9</h3>
@elseif(count($fornecedores) >= 10)
    <h3>maior ou igual a 10</h3>
@else
    <h3>Nenhum</h3>
@endif
