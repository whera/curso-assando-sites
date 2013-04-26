<h3><?php echo $palestrante[0]['Palestrante']['nome']; ?></h3>

<div class="sb_news_box">
	<div class="news_date"></div>
    <img src="/images/avatar.gif" alt="Foto: <?php echo $palestrante[0]['Palestrante']['nome']; ?>" />
    <h6>
    	<a href="<?php echo $palestrante[0]['Palestrante']['site']; ?>" target="_blank" >
    		<?php echo $palestrante[0]['Palestrante']['site']; ?>
    	</a>
    </h6>
    <?php echo $palestrante[0]['Palestrante']['descricao']; ?>
    <div class="cleaner"></div>
</div>
<div class="cleaner"></div>