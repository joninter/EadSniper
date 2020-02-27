<!-- Header Page -->
<div class="container">
    <div class="header-page">
        <h3 class="my-courses">Editar Curso</h3>
    </div>
</div>
<!-- /Header Page -->

<!-- Card Form -->
<div class="container">
    <form class="box-form">
        <div class="form-group">
            <h4 style="">Nome</h4>
            <input
                    type="text"
                    name="nome"
                    class="form-control"
                    id="exampleInputEmail1"
                    value="<?php echo $curso['nome']; ?>"

            />
        </div>

        <div class="form-group">
            <input
                    type="file"
                    class="form-control"
                    name="imagem"
            />
            <img src="<?php echo BASE; ?>../assets/images/cursos/<?php echo $curso['imagem']; ?>" border="0" height="80" />
        </div>
        <div class="form-group">
          <textarea
                  name="descricao"
                  style="resize: none;"
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
          ><?php echo $curso['descricao']; ?></textarea>
        </div>
        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Salvar" />>
    </form>
</div>
<script src="script.js"></script>