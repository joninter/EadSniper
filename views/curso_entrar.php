<div class="container">
<div class="cursoinfo">
    <h3 class="my-courses" style="margin-top: 5rem;"><?php echo $curso->getNome();?></h3>
    <img src="<?php echo BASE;?>assets/images/cursos/<?php echo $curso->getImagem();?>" style="width: 20rem;">

    <p class="card-text">
        <?php echo $curso->getDescricao(); ?>
    </p>
</div>
    <table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Módulo</th>
        <th scope="col">Nome</th>
    </tr>
    </thead>
    <tbody>

<?php foreach($modulos as $modulo): ?>
<tr>
    <th scope="row"><?php echo $modulo['nome']; ?></th>
    <?php foreach($modulo['aulas'] as $aula): ?>

                <td><a href="<?php echo BASE; ?>cursos/aula/<?php echo $aula['id']; ?>"> <?php echo $aula['nome']; ?></a></td>
<tr>
    <?php endforeach; ?>

<?php endforeach; ?>
    </tr>
    </tbody>
    </table>

</div>
<script src="<?php echo BASE;?>assets/js/script.js"></script>