<div class="titulo">tipo Booleano</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False);
echo '<br>' . var_dump('False');
echo '<br>' . var_dump('true');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

// fazer as regras de conversãoes
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0) //apenas zero é falso
echo '<br>' . var_dump((bool) 20)
echo '<br>' . var_dump((bool) -1)