<?php

get_header(); ?>
<div class="clear"></div>
<div class="go-post-header" style="background: url(<?php echo get_the_post_thumbnail_url() ?>) no-repeat center center; background-size: cover">
	<div class="post-header-content">
		<div class="item-title reveal">
			<h1><?php the_title(); ?></h1>
		</div>

		<div class="item-content wow fadeInDown">
			<?php the_field('descrição'); ?>
		</div>
	</div>
	<div class="item-animation reveal-hero">
		<div class="arrow bounce">
			<a href="javascript:void(0)" onclick="goTo(box1)" class="fa fa-chevron-down fa-2x" href="#"></a>
		</div>
	</div>
</div>
<div id="page-container" style="padding: 0">
	<div id="box1" class="container-content" style="padding: 0;">
		<?php 
		while ( have_posts() ) : the_post();
//get all pages 
		the_content();
		endwhile; ?>

		<?php get_the_content(); ?>

		<div class="normal-box">
			<div class="item-icon reveal">
				<i class="fa fa-mobile" aria-hidden="true"></i>
			</div>
			<div class="go-title-area reveal">
				<h3 class="go-title x1">CRIAÇÃO DE SITES RESPONSIVOS</h3>
			</div>

			<p><b>Sites Responsivos</b> são sites que se adequam automaticamente a qualquer dispositivo que o site está sendo acessado (computador, smartphone, tablet). A tela e conteúdo são ajustados para que tudo seja exibido de maneira harmônica para o usuário.</p>

			<div class="quote-box">
				<div class="item-quote"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
				<div class="item-content">
					Smartphone é principal meio de acesso à internet no Brasil, mostra IBGE
				</div>
			</div>

			<p>Atualmente 55.9% dos domicílios no Brasil possuem acesso à internet, sendo que mais de 80% dessas pessoas acessam a internet através de um aparelho celular. Hoje, mais da metade dos acessos a sites no mundo são registrados vindos de smartphones ou tablets, ter um <b>site responsivo</b> é se adequar a esses dados e a tendência futura, já que esses números vão crescer cada vez mais todos os anos.</p>
		</div>


		<div class="gradient-box">
			<div class="item-icon reveal ">
				<i class="fa fa-code" aria-hidden="true"></i>
			</div>
			<div class="go-title-area reveal">
				<h3 class="go-title x1 light">CÓDIGOS CRIADOS DO ZERO</h3>
			</div>
			<p>Criamos códigos do zero, limpos e sem qualquer tipo de limitação.</p>
			
			<div class="quote-box">
				<div class="item-quote"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
				<div class="item-content">
					Para cada 1 segundo de atraso, as taxas de conversão caem em torno de 7%”
				</div>
			</div>

			<p><b>Cada segundo é importante</b>. Ter um código criado do zero reduz a quantidade de arquivos e códigos desnecessários no seu site, fazendo com que o tempo de carregamento seja reduzido e a navegação pelo site seja mais rápida. É comum ver agencias que oferecem esse serviço e que criam sites a partir de temas prontos, limitando muito o que é possível fazer, dificultando a manutenção e ogerenciamento pós entrega, alem de deixar nos arquivos desnecessários na raiz do site. Aqui na gridworks nós identificamos a sua necessidade e desenvolvemos um código único, pensado para você, a sua ideia e a sua empresa.</p>
		</div>

		<div class="sub-box">
			<div class="item-icon reveal">
				<i class="fa fa-handshake-o" aria-hidden="true"></i>
			</div>
			<div class="go-title-area ">
				<h3 class="go-title x1 light reveal">Criamos com você</h3>
			</div>
			<p>Nosso processo é feito de <b>6 etapas</b>. Antes de avançar as etapas, são feitas revisões do que foi feito até o momento junto ao cliente, o início de cada nova etapa depende da aprovação do cliente, para que o mesmo possa acompanhar o serviço e fazer as alterações que julgar necessário.</p>

			<div class="ex-boxes go-flex">
				<div class="item-1">
					<div class="item-inner">
						<div class="item-index">1.</div>
						<div class="item-title">Analise de informações </div>
						<div class="item-content">Reunião com o cliente para levantar os primeiros dados, analise de necessidades e busca de soluções</div>
					</div>
				</div>
				
				<div class="item-1">
					<div class="item-inner">
						<div class="item-index">2.</div>
						<div class="item-title">Busca de recursos</div>
						<div class="item-content">Baseado nas informações da etapa 1, nós definimos os recursos que serão usados na identidade do site, como fontes, cores e etc</div>
					</div>
				</div>

				<div class="item-1">
					<div class="item-inner">
						<div class="item-index">3.</div>
						<div class="item-title">Montagem do protótipo</div>
						<div class="item-content">Após definir os estilos, criamos um protótipo estático do site, para que o cliente possa ter uma ideia de como ficará o site finalizado antes que seja iniciado a criação do código</div>
					</div>
				</div>

				<div class="item-1">
					<div class="item-inner">
						<div class="item-index">4.</div>
						<div class="item-title">Criação do código</div>
						<div class="item-content">Feito tudo isso, é hora de colocar a mão na massa e dar vida ao site</div>
					</div>
				</div>

				<div class="item-1">
					<div class="item-inner">
						<div class="item-index">5.</div>
						<div class="item-title">Publicação</div>
						<div class="item-content">Tudo feito? É hora de mostrar seu site ao mundo, nessa etapa fazemos a migração do seu site para a hospedagem, onde seu site ficara disponível para acesso</div>
					</div>
				</div>

				<div class="item-1">
					<div class="item-inner">
						<div class="item-index">6.</div>
						<div class="item-title">Suporte </div>
						<div class="item-content">Terminamos o serviço mas não te deixaremos na mão! Precisa de uma ajuda? Te daremos todo o suporte necessário após a entrega sempre que precisar</div>
					</div>
				</div>

			</div>
		</div>

		<div class="normal-box">
			<div class="item-icon reveal">
				<i class="fa fa-cloud" aria-hidden="true"></i>
			</div>
			<div class="go-title-area reveal">
				<h3 class="go-title x1">1 ano de hospedagem e dominio gratis</h3>
			</div>

			<p><b>Não precisa se preocupar</b> com pagamentos mensais de hospedagem, nós cuidamos disso para você. Todos os pacotes de serviço possuem 1 ano de hospedagem e domínio sem custo adicional.</p>

			<div class="quote-box hide">
				<div class="item-quote">"</div>
				<div class="item-content">
					Smartphone é principal meio de acesso à internet no Brasil, mostra IBGE
				</div>
			</div>
		</div>
		
		<?php require_once INC.'last-projects.php'; ?>

		<div class="price-boxes">
		<div class="item-icon reveal">
				<i class="fa fa-rocket" aria-hidden="true"></i>
			</div>
			<div class="go-title-area reveal">
				<h3 class="go-title x1">Tipos de serviço</h3>
				<p style="margin-top: 15px">Os valores variam de acordo com a necessidade de cada serviço</p>
			</div>

			<div class="price-box reveal">
				<div class="item-inner">
					<div class="item-title">Starter</div>
					<!-- <div class="item-price"><span>R$</span>960</div> -->
					<div class="item-content">
						<ul>
							<li>

								Layout totalmente excluisvo e desenvolvido para a necessidade do cliente
							</li>

							<li>
								Criação de até <b>6</b> páginas
							</li>

							<li>-</li><li>-</li>

							<li>
								<b>1</b> Ano de hospedagem gratuita
							</li>

							<li>

								Dominio gratuito
							</li>
							<li>Suporte gratuito</li>
							<li>Entrega em até <b>10</b> dias</li>
						</ul>
						<div class="item-options">
							<a class="go-button" href="contato">
								Solicitar
								</a>
						</div>
					</div>
				</div>
			</div>

			<div class="price-box reveal">
				<div class="item-inner">
					<div class="item-title ad">Advanced</div>
					<!-- <div class="item-price"><span>R$</span>1960</div> -->
					<div class="item-content">
						<ul>
							<li>

								Layout totalmente excluisvo e desenvolvido para a necessidade do cliente
							</li>

							<li>
								Conteúdo totalmente gerenciavel por CMS
							</li>

							<li>
								Quantidade de páginas <b>ilimitadas</b>
							</li>

							<li>
								Blog integrado
							</li>

							<li>
								<b>1</b> Ano de hospedagem gratuita
							</li>

							<li>

								Dominio gratuito
							</li>
							<li>Suporte gratuito</li>

							<li>Entrega em até <b>20</b> dias</li>
						</ul>

						<div class="item-options">
							<a class="go-button" href="contato">
								Solicitar
								</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="clear"></div>

<section class="custom-callsection">
	<div class="item-title reveal-banner">
		Precisa de um pacote diferente?
	</div>
	<div class="item-options reveal-banner">
		<a class="go-button" href="contato">
			Solicite um Orçamento
		</a>
	</div>
</section>

	</div>

	<!-- <?php if(!is_page('contato')): include INC . 'banner1.php'; endif; ?> -->

	<?php get_footer(); ?>