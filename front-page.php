<?php get_header(); ?>

<main class="main-content">

    <section class="hero-slider">
        <div class="hero-slide active" style="background-image: linear-gradient(rgba(11,42,74,0.55), rgba(0,0,0,0.65)), url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero-slider-01.webp' ); ?>');">
            <div class="hero-content">
                <h1>Feito Para Você!</h1>
                <p>Nossos copos e garrafas térmicas acompanham o seu ritmo.</p>
                <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn hero-btn">Escolher o Meu</a>
            </div>
        </div>
        
        <div class="hero-slide" style="background-image: linear-gradient(rgba(11,42,74,0.55), rgba(0,0,0,0.65)), url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero-slider-02.webp' ); ?>');">
            <div class="hero-content">
                <h1>Seu Nome em Destaque!</h1>
                <p>Que tal um produto com a sua assinatura?</p>
                <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn hero-btn">Personalizar Agora</a>
            </div>
        </div>
        
        <div class="hero-slide" style="background-image: linear-gradient(rgba(11,42,74,0.55), rgba(0,0,0,0.65)), url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero-slider-03.webp' ); ?>');">
            <div class="hero-content">
                <h1>Temperatura Perfeita o Dia Todo!</h1>
                <p>Esqueça o café frio ou a água quente.</p>
                <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn hero-btn">Ver Coleção</a>
            </div>
        </div>

        <div class="hero-dots">
            <button class="hero-dot active" data-slide="0" aria-label="Slide 1"></button>
            <button class="hero-dot" data-slide="1" aria-label="Slide 2"></button>
            <button class="hero-dot" data-slide="2" aria-label="Slide 3"></button>
        </div>
        <button class="hero-arrow hero-arrow-prev" aria-label="Slide anterior"><i class='ph ph-caret-left'></i></button>
        <button class="hero-arrow hero-arrow-next" aria-label="Próximo slide"><i class='ph ph-caret-right'></i></button>
    </section>

    <section class="trust-badges-section">
        <div class="trust-badges-container">
            <div class="trust-badge">
                <i class='ph ph-shield-check'></i>
                <span>Qualidade Premium</span>
            </div>
            <div class="trust-badge">
                <i class='ph ph-package'></i>
                <span>Envio Rápido e Seguro</span>
            </div>
            <div class="trust-badge">
                <i class='ph ph-pencil-simple'></i>
                <span>Personalização Única</span>
            </div>
            <div class="trust-badge">
                <i class='ph ph-lock-key'></i>
                <span>Compra 100% Segura</span>
            </div>
        </div>
    </section>

    <section class="section categories-section">
        <div class="section-header center">
            <h2 class="section-title">Nossas Linhas</h2>
            <p class="section-subtitle">Escolha o formato ideal para sua rotina.</p>
        </div>
        
        <div class="categories-grid">
            <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>?product_cat=garrafas" class="category-card dark-card" style="background-image: linear-gradient(rgba(11,42,74,0.35), rgba(0,0,0,0.75)), url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/category-card-garrafas.webp' ); ?>');">
                <div class="category-content">
                    <h3>Garrafas</h3>
                    <span>Ver modelos <i class='ph ph-arrow-right'></i></span>
                </div>
            </a>
            
            <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>?product_cat=copos" class="category-card dark-card" style="background-image: linear-gradient(rgba(11,42,74,0.35), rgba(0,0,0,0.75)), url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/category-card-copos.webp' ); ?>');">
                <div class="category-content">
                    <h3>Copos</h3>
                    <span>Ver modelos <i class='ph ph-arrow-right'></i></span>
                </div>
            </a>
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <div>
                <h2 class="section-title">Novidades</h2>
                <p class="section-subtitle">Confira os últimos lançamentos!</p>
            </div>
            <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="see-more-link">Ver loja completa <i class='ph ph-arrow-right'></i></a>
        </div>
        <?php echo do_shortcode('[products limit="4" columns="4" orderby="date" order="DESC"]'); ?>
    </section>

    <section class="cta-banner" style="background-image: linear-gradient(90deg, rgba(7,26,45,0.86) 0%, rgba(11,42,74,0.62) 46%, rgba(7,26,45,0.16) 100%), url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/banner-personalizacao-exclusiva-ai.webp' ); ?>'); background-size: cover; background-position: center;">
        <div class="cta-content">
            <h2>PERSONALIZAÇÃO EXCLUSIVA</h2>
            <p>Adicione seu nome na sua garrafa ou copo térmico e torne seu produto único, com renderização em tempo real!</p>
            <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn">Personalizar Agora</a>
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <div>
                <h2 class="section-title">Mais Vendidos</h2>
                <p class="section-subtitle">As escolhas favoritas dos clientes!</p>
            </div>
        </div>
        <?php echo do_shortcode('[products limit="4" columns="4" best_selling="true"]'); ?>
    </section>

</main>

<?php get_footer(); ?>
