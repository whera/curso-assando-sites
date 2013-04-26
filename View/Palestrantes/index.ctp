<h3>Palestrantes</h3>

<?php foreach($palestrantes as $palestrante): ?>
<div class="sb_news_box">
	<div class="news_date"></div>
    <img src="/images/avatar.gif" alt="Palestrante: <?php echo $palestrante['Palestrante']['nome']; ?>" />
    <h6>
    	<a href="/palestrantes/<?php echo Inflector::slug(strtolower($palestrante['Palestrante']['nome']), '-'); ?>" >
    		<?php echo $palestrante['Palestrante']['nome']; ?>
    	</a>
    </h6>
    <?php echo $this->Whera->limita_caracteres($palestrante['Palestrante']['descricao'], 300); ?>
    <div class="cleaner"></div>
</div>
<?php endforeach; ?>
<div class="cleaner"></div>