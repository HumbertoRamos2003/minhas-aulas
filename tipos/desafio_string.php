<div class="titulo">Desafio string</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string,
// qual o métodos que a posição do texte 'abc'
// na string c retorne 1?

echo strpos('!AbcaBcabc', 'abc') . '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>';

echo stripos(strtolower('!AbcaBcabc'), strtolower('ABC'));