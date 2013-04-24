<h3>Agenda do evento</h3>
<?php foreach ($cidades as $key => $cidade): ?>
    <div class="sb_news_box">
        <div class="news_date">
        	Data: <?php echo date("d/m/Y",strtotime($cidade['Cidade']['inicio'])); ?> 
        	e <?php echo date("d/m/Y",strtotime($cidade['Cidade']['fim'])); ?>
        </div>
        <!--<img src="images/avatar.gif" alt="Image 05" /> -->
        <h6>
        	<a href="/cidades/<?php echo $cidade['Cidade']['slug']; ?>" title="Clique aqui para saber mais...">
        		<?php echo $cidade['Cidade']['cidade']; ?>
        	</a>
    	</h6>
        
        <div class="cleaner"></div>
    </div>
<?php endforeach; ?>
<div class="cleaner"></div>