<?php

include "topo.php";
include "coluna-esquerda.php";

?>

      <div class="meio nopadding">
        <div class="topo">
        <iframe width="100%" height="303" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/159806824&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

         <!--  <iframe width="100%" height="303" src="https://www.youtube.com/embed/kXYiU_JCYtU?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe> -->
        </div>
        <div class="faixabranca">
          <div class="col-md-8">
            <img src="assets/imagens/perfil-mini.jpg" style="float: left; margin-right: 15px;">
            <p style="font-size: 18px; margin-top: -5px;"><b>Ensaio da Banda</b></p>
            <p style="line-height: 10px;"><b>Linkin Park</b></p><p style="font-size: 12px; margin-top: 2px;">Publicado dia 15 de fevereira de 2009</p>
          </div>
          <div class="col-md-4" style="height: 22px; line-height: 63px;">
            <a href="#" style="float:right;"><img src="assets/imagens/bt-gplus.jpg"></a>
            <a href="#" style="float:right; margin-right: 5px;"><img src="assets/imagens/fb-youtube.jpg"></a>
            <a href="#" style="float:right; margin-right: 5px;"><img src="assets/imagens/bt-twitter.jpg"></a>
            <a href="#" style="float:right; margin-right: 5px;"><img src="assets/imagens/bt-facebook.jpg"></a>
            <span style="font-size: 14px;float: right;margin-right: 14px; font-weight: bold !important;">Compartilhe: </span>
          </div>
          &nbsp;
        </div>
        
        <div class="padding">
         
          <div class="col-md-12" style="margin-top: 5px;">

            <?php for ($i = 1; $i <= 55; $i++) { ?>
            <div class="row nopadding" style="background-color: white; border-left: 1px solid #ccc; border-right: 1px solid #ccc; border-top: 1px solid #ccc; padding: 4px 10px 6px 11px !important; cursor: pointer;">
              <span style="float: left; color: #333333; font-size: 12px; line-height: 20px;">
                <img src="assets/imagens/cover-mini.jpg" style="float: left; margin-right: 5px; "> 
                <b>Linkin Park - Numb</b>
              </span>
              <span style="float: right; color: #999; font-size: 12px; line-height: 20px;"><img src="assets/imagens/play.jpg" style=" margin-right: 3px;">1.892</span>
            </div>
            <?php } ?>
            <div class="row nopadding" style="background-color: white; border-left: 1px solid #ccc; border-right: 1px solid #ccc; border-top: 1px solid #ccc;border-bottom: 1px solid #ccc; padding: 4px 10px 6px 11px !important; cursor: pointer;">
              <span style="float: left; color: #333333; font-size: 12px; line-height: 20px;">
                <img src="assets/imagens/cover-mini.jpg" style="float: left; margin-right: 5px; "> 
                <b>Linkin Park - Numb</b>
              </span>
              <span style="float: right; color: #999; font-size: 12px; line-height: 20px;"><img src="assets/imagens/play.jpg" style=" margin-right: 3px;">1.892</span>
            </div>&nbsp;
          </div>
        </div>
        <div class="padding">
          <div class="col-md-12">
          &nbsp;<br>
          &nbsp;
            <center><a href="#" class="carregar">CARREGAR MAIS MÚSICAS</a></center>
          </div>
        </div>
        <!--  FECHA COLUNA -->
      </div>

    <?php
    include "coluna-direita.php";
    include "rodape.php";
    ?>