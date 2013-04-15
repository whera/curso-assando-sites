<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "Maratona CakePHP: ".$title_for_layout; ?></title>
<link href="/templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<div id="templatemo_wrapper">
	
    <div id="templatemo_header">
    
   		<div id="site_title">
            <h1>
                <a href="/">
                    Maratona
                    <br /><br /><strong class="title_cake">CakePHP</strong>
                </a>
            </h1>
        </div> <!-- end of site_title -->

        <!-- Menu -->
        <?php
        	echo $this->element('menu');
        ?>
        <!-- Fim Menu -->
    
    </div>
    
    <div id="templatemo_middle">
    
    	<!--<h1>Maratona CakePHP</h1> -->
        <p>Um grande evento que percorrerá as capitais do país.<br />
        Uma maratona de conhecimento que levará até a sua capital tudo o que há de melhor em:</p>
        <h1 class="title">Desenvolvimento rápido com CakePHP framework.</h1>
        <!--<div class="learn_btn"><a href="#"></a></div> -->
    
    </div>
    
    <!-- Conteudo Site -->
    <div id="templatemo_content">
    	<?php echo $this->fetch('content'); ?>
    </div>
    <!-- Fim Conteudo Site -->
    
    <div id="templatemo_footer">
    
    	 Exercicio 02 <a href="http://www.assando-sites.com.br">Curso Assando sites</a> |
    	 Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
         
    </div>
    
</div>

</body>
</html>