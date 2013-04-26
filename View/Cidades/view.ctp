<div class="col_w620_w2col">
	<div class="col_w620_content">
       	<h3>Informações sobre o evento</h3>
        <p>Confira ao lado o cronograma do evento em Florianópolis.<br />
        	Abaixo informações de como chegar no evento.</p>
    </div>
	<div class="cleaner_h40"></div>

	<div id="contact_form">
    	<h4> Como Chegar</h4>
    	<p>Av. Governador Gustavo Richard - Centro, Florianópolis - SC, 88010-290. Tel:(48) 3251-4000</p>
    	<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?client=ubuntu&amp;channel=cs&amp;ie=UTF8&amp;q=centro+sul+florian%C3%B3polis&amp;fb=1&amp;gl=br&amp;hq=centro+sul&amp;hnear=Florian%C3%B3polis+-+Santa+Catarina&amp;t=h&amp;fll=-27.600741,-48.552205&amp;fspn=0.002767,0.005284&amp;st=115968771510351694523&amp;rq=1&amp;ev=zi&amp;split=1&amp;ll=-27.596201,-48.551545&amp;spn=0.013312,0.018239&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com.br/maps?client=ubuntu&amp;channel=cs&amp;ie=UTF8&amp;q=centro+sul+florian%C3%B3polis&amp;fb=1&amp;gl=br&amp;hq=centro+sul&amp;hnear=Florian%C3%B3polis+-+Santa+Catarina&amp;t=h&amp;fll=-27.600741,-48.552205&amp;fspn=0.002767,0.005284&amp;st=115968771510351694523&amp;rq=1&amp;ev=zi&amp;split=1&amp;ll=-27.596201,-48.551545&amp;spn=0.013312,0.018239&amp;z=15&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">Exibir mapa ampliado</a></small>
    </div>
</div>
        
        <div class="col_w300 col_last">
            <h3>O que espera por você!</h3>
            <?php foreach ($palestras as $palestra): ?>
            <div class="sb_news_box">
            	<div class="news_date"><?php echo date("d/m/Y H:i", strtotime($palestra['Palestra']['data'])); ?></div>
            	<img src="/images/avatar.gif" alt="Image 05" />
        		<h6>
                    <a href="/palestrantes/<?php echo Inflector::slug(strtolower($palestra['Palestrante']['nome']), '-'); ?>">
                        <?php echo $palestra['Palestrante']['nome']; ?>
                    </a>
                </h6>
                <strong><?php echo $palestra['Palestra']['titulo']; ?></strong>
              <div class="cleaner"></div>
            </div>
            <?php endforeach; ?>
            <!-- <div class="btn_more"><a href="#">Read more</a></div> -->
        </div>
    
    	<div class="cleaner"></div>