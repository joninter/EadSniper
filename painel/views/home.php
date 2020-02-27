<div class="container">
    <div class="cursoinfo">
        <h3 class="my-courses" style="margin-top: 5rem;">Cursos</h3>
    </div>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col" style="text-align: center">Imagem</th>
            <th scope="col" style="text-align: center">Nome</th>
            <th scope="col" style="text-align: center">Qt. de Alunos</th>
            <th scope="col" style="text-align: center">Ações</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach($cursos as $curso): ?>
        <tr>
            <td scope="row" style="text-align: center"><img src="<?php echo BASE;?>../assets/images/cursos/<?php echo $curso['imagem']; ?>" border="0" height="70" /> </td>
            <td style="text-align: center"><?php echo $curso['nome'];?> </td>
            <td style="text-align: center"><?php echo $curso['qtalunos'];?></td>
            <td style="text-align: center">
                <a href="<?php echo BASE;?>home/editar/<?php echo $curso['id'];?>" class="btn btn-info">Editar Curso</a>
                <a href="<?php echo BASE;?>home/excluir/<?php echo $curso['id'];?>" class="btn btn-danger">Excluir Curso</a>
            </td>
        </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

</div>
<script src="<?php echo BASE;?>assets/js/script.js"></script>