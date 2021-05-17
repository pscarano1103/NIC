<?php 
                        /**
                         * Setup query to show the ‘services’ post type with ‘8’ posts.
                         * Output the title with an excerpt.
                         */
                        $args = array(  
                            'post_type' => 'servicos',
                            'post_status' => 'publish'
                        );

                        $loop = new WP_Query( $args ); 
                        
                        $contador = 0;
                        $card = "";

                        while ( $loop->have_posts() ) : $loop->the_post();
                            
                            $numeroItem = get_field('numero_item');
                            $nome_servico = get_field('nome_servico');
                            $texto_item = get_field('texto_item');
                            $imagem_item = get_field('imagem_item');
                            $link = get_permalink();

                            $card .= sprintf('<div class="col-md-3">
                                <a href="%s">
                                    <div class="card">
                                    <div class="content">
                                        <h1>%s</h1>
                                        <h3>%s</h3>
                                        <p>
                                            %s
                                        </p>
                                        <div class="img-area">
                                            <img src="%s" alt="foto-servico">
                                        </div>
                                    </div>
                                    </div>
                                </a>
                            </div>', $link, $numeroItem, $nome_servico, $texto_item, $imagem_item);

                            $contador++;

                        endwhile;

                        wp_reset_postdata(); 
?>
<div class="row justify-content-center">
    <?php echo $card ?>
</div>
