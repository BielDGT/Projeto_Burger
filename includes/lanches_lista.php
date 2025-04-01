<section class="container-cards text-center">
     <div class="linha">
          <?php
          $select = 'SELECT * FROM tb_produtos ORDER BY RAND()';
          include './includes/lanches_card.php';
          ?>
     </div>
</section>