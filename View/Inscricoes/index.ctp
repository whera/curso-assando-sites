<div class="col_w620_w2col">
        	<div class="col_w620_content">
            
            	<h3>Inscrições abertas!</h3>
                <p>Inscreva-se no formulário abaixo e aguarde mais informações sobre atrações que acontecerão em sua região.</p>
			</div>
           
            <div id="contact_form">
            
            <h4>Inscreva-se!</h4>
            
          		<?php echo $this->Form->create('inscricao', array('action' => 'index')); ?>

                
					<div class="col_w300">
						<?php echo $this->Form->input('nome', array(
							'div'=>false,
							'class'=>'required input_field',
							'label'=>'Nome:'
						)); ?>
						<?php echo $this->Form->input('email', array(
							'div'=>false,
							'class'=>'required input_field',
							'label'=>'E-mail:'
						)); ?>
						<?php echo $this->Form->input('telefone', array(
							'div'=>false,
							'class'=>'required input_field',
							'label'=>'Telefone:'
						)); ?>
						<?php echo $this->Form->input('endereco', array(
							'div'=>false,
							'class'=>'required input_field',
							'label'=>'Endereço:'
						)); ?>
						<?php echo $this->Form->input('uf', array(
    						'options' => $estados,
    						'div'=>false,
							'class'=>'required input_field',
							'label'=>'Estado:'
						)); ?>

						<div class="cleaner_h10"></div>
						<?php echo $this->Form->submit('Cadastrar', array('class'=>'submit_btn float_r', 'id'=>'submit')) ?>
					</div>
				<?php echo $this->Form->end(); ?>

            
           	</div>
        </div>
        
        <?php echo $this->Element('palestrantes'); ?>
    
    	<div class="cleaner"></div>