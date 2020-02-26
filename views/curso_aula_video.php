<!-- Header Page -->
<div class="container">
    <div class="header-page">
        <h2><?php echo $curso->getNome();?></h2>
    </div>
</div>
<!-- /Header Page -->
<!-- Play Movie -->
<div class="container">
    <div class="play-movie">
        <article class="title-and-button">
            <h3 class="my-courses"><?php echo $aula_info['nome']; ?></h3>
            <?php if($aula_info['assistido'] == '1'):?>
                <p class="alert-success" style="font-size: 20px;">Esta aula já foi assistida!</p>
            <?php else: ?>
                <button class="btn btn-primary" onclick="marcarAssistido(this)" data-id="<?php echo $aula_info['id_aula']; ?>">Marcar como assistido</button>
            <?php endif;?>

        </article>
        <!-- <article class="area-movie"></article> -->
        <div class="c-video">
            <video
                    class="video"
                    src="//player.vimeo.com/video/<?php echo $aula_info['url'];?>"
                    controls
                    controlsList="nodownload"
            ></video>
        </div>
    </div>
</div>
<!-- /Play Movie -->
<!-- Card Form -->
<div class="container">
    <h3 class="my-courses">Dúvidas? Envie a sua pergunta</h3>
    <form class="box-form" method="POST">
        <div class="form-group">
          <textarea
                  style="resize: none;"
                  name="duvida"
                  placeholder="Sua mensagem"
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
          ></textarea>
        </div>
        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Enviar Dúvida" />
    </form>
</div>
<!-- /Card Form -->
<script src="<?php echo BASE;?>assets/js/script.js"></script>