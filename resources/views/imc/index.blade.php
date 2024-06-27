<x-layout title="imc">

<div class="formulario">
<form method="post" action="/imc/store">
    @csrf
    <input type="text" name="nome" placeholder="Digite o seu nome">
    <input type="text" name="peso" placeholder="Digite o seu peso">
    <input type="text" name="altura" placeholder="Digite a sua altura"><br><br>
    <input type="submit" value="Calcular" class="btn btn-primary">
</form>   
    <label>RESULTADO:</label><br>
    <label>IMC: {{$resultado ["imc"]}}</label><br>
    <label>Faixa: {{$resultado ["faixa"]}}</label>
    <br><br><br>
</div>

</x-layout>