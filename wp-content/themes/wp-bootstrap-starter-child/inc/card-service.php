<?php $home = get_page_by_title('Home'); ?>

<?php if(have_rows('pagina_carousel', $home)): while(have_rows('pagina_carousel', $home)) : the_row(); ?>
    <div class="row justify-content-center">
        
        <?php if(have_rows('item_carousel', $home)): while(have_rows('item_carousel', $home)) : the_row(); ?>
            <div class="col-md-3">
                <a href="/nic/sub-servico">
                    <div class="card">
                        <div class="content">
                            <h1><?php the_sub_field('numero_item', $home) ?></h1>
                            <h3><?php the_sub_field('nome_servico', $home) ?></h3>
                            <p>
                                <?php the_sub_field('texto_item', $home) ?>
                            </p>
                            <div class="img-area">
                                <img src="<?php the_sub_field('imagem_item', $home) ?>" alt="foto-servico">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endwhile; else : endif; ?>  
    </div>
<?php endwhile; else : endif; ?>