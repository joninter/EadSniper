<div class="cursoinfo">
    <img src="<?php echo BASE;?>assets/images/cursos/<?php echo $curso->getImagem();?>" height="60">
    <h3><?php echo $curso->getNome();?></h3>
    <?php echo $curso->getDescricao(); ?>
</div>

<div class="curso_left">
<h1>Vídeo - <?php echo $aula_info['nome']; ?></h1>
<iframe width="640" height="300" frameborder="0" src="//player.vimeo.com/video/<?php echo $aula_info['url'];?>"></iframe><br/>
<?php echo $aula_info['descricao'];?>

<h3>Dúvidas? Envie a sua pergunta</h3>

<form method="POST">
<textarea name="duvida"></textarea><br/>
<input type="submit" value="Enviar Dúvida">
</form>
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