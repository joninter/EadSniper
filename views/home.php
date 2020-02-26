
<!-- Card Course -->
<div class="container">
    <h3 class="my-courses" style="margin-top: 5rem;">Meus cursos</h3>
    <section class="area-cards" style="height: 1rem;">
        <?php foreach($cursos as $curso): ?>
            <article class="card" style="width: 20rem;">
                <img
                    src="<?php echo BASE; ?>assets/images/cursos/<?php echo $curso['imagem']; ?>"
                    class="card-img-top"
                    alt="Curso BMF"
                />
                <div class="card-body" style="height: 10rem;">
                    <h5 class="card-title"><?php echo $curso['nome']; ?></h5>
                    <p class="card-text" style="height: 1rem;">
                        <?php echo $curso['descricao']; ?>
                    </p>
                    <a href="<?php echo BASE; ?>cursos/entrar/<?php echo $curso['id_curso']; ?>" class="btn btn-primary btn-block btn-lg">
                        Assistir
                    </a>
                </div>
            </article>
        <?php endforeach; ?>
    </section>
</div>
<!-- /Card Course -->
<script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"
></script>
<script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"
></script>
<script src="<?php echo BASE;?>assets/js/script.js"></script>