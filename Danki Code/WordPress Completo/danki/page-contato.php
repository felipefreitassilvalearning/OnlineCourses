<?php
	//Template Name: Contato
?>
	<?php
		get_header();
	?>
</div>
</section>

<?php the_field('formulario') ?>
	<section class="contato">
		<div class="center">
			<div class="w50 contato-info">
				<h2>A mais importante,<br/>primeira conversa.</h2>
				<br />
				<?php
					while(have_rows('nome_tipo_contato')){
						the_row();
				?>
				<p><b><?php echo get_sub_field('categoria') ?>:</b> <?php echo get_sub_field('valor') ?></p>
				<?php } ?>

			<div class="mapa-container">
				<div id="mapa"></div>
			</div><!--mapa-->
			</div>

			<div class="w50 contato-form">
				<form>
					<input placeholder="Nome" type="text" />
					<input placeholder="E-mail" type="text" />
					<input placeholder="Telefone" type="text" />
					<select>
						<option>Geral</option>
						<option>Suporte</option>
					</select>
					<textarea placeholder="Mensagem"></textarea>
					<input type="submit" value="Enviar!">
				</form>
			</div>
			<div class="clear"></div>
		</div>
	</section>


<?php get_footer(); ?>