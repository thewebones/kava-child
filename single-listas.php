<?php get_header(); ?>

<div class="container">    
  
    <div class="row">
        
        <div class="col-md-12">

            <div class="jumbotron">

            <h2>
				     Este es el espacio para el banner promocional
				   </h2>

            
             </div>
        </div>
          
    </div>  
</div>  

<div class="container">    
  
    <div class="row">
        
        <div class="col-md-12">

            <div class="jumbotron">

            <h2>
				     Este es el espacio para el card con la posición #1
				   </h2>
           
            
             </div>
        </div>
          
    </div>  
</div>  

<div class="container">    
  
      <div class="row">

      <div class="col-md-8">

            
          </div>

          <div class="col-md-4">

            <span class="R">Samana Anterior</span>&nbsp;
            <span class="R">Samana en Lista</span>&nbsp;
            <span class="R">Mejor Posición</span>

          </div>
     </div>  
</div>  

      <?php if( have_rows('canciones')): ?>
       
         <?php while( have_rows('canciones')): the_row(); ?>    
         
    <div class="container">    
   
      <div class="row" style="border-top-style:solid; border-top-color:#bfbfbf; border-top-width:1px;">
        
                       <div class="col-md-1"><span class="position"><?php the_sub_field('posicion'); ?></span></div>
     
                       <div class="col-md-2">
                         
                          <?php $image = get_sub_field('caratula'); ?> 
                          
                          <img class="image-style" src="<?php echo $image['sizes']['thumbnail'];?>" /> 

                        </div>

                       <div class="col-md-6"><span class="T"><?php the_sub_field('sencillo'); ?></span> </div>

                       <div class="col-md-1"><span class="N"><?php the_sub_field('sa'); ?></span> </div>

                       <div class="col-md-1"><span class="N"><?php the_sub_field('sl'); ?></span> </div>

                       <div class="col-md-1"><span class="N"><?php the_sub_field('2s'); ?></span></div>

      </div>

</div>   

            <?php endwhile; ?>
 
           <?php endif; ?>

<?php get_footer(); ?>