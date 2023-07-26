<div class="titulo">Intrgração CSS</div>

<h1 center>  
<?php
echo 'Olá';
echo '<small>';
echo ' Mundo!';
echo '</small>'
?>
</h1>

<?= "<div center azul>Outra forma de em 'expressar'!</div>" ?>

<br>
<div center><button dobro><?= "legal" ?></button></div>

<style>
    button{
        padding: 10px 25px;
        background-color: #a4d0fa;
        color: black;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
      color: #00008B;
    }

    [dobro] {
        font-size: 1.3rem;
    }
</style>