<div class="cursoinfo">
    <img src="<?php echo BASE;?>assets/images/cursos/<?php echo $curso->getImagem();?>" height="60">
    <h3><?php echo $curso->getNome();?></h3>
    <?php echo $curso->getDescricao(); ?>
</div>

<div class="curso_left">


</div>
<div class="curso_right">
<?php foreach($modulos as $modulo): ?>
    <div class="modulo">
        <?php echo $modulo['nome']; ?>
    </div>
    <?php foreach($modulo['aulas'] as $aula): ?>
        <a href="<?php echo BASE; ?>cursos/aula/<?php echo $aula['id'];?>">
            <div class="aula">
                <?php echo $aula['nome']; ?>
            </div>
        </a>
    <?php endforeach; ?>
<?php endforeach; ?>
</div>