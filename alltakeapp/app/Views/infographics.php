<div class="container mt-5 py-5">
  <div class="row">
    <div class="col-lg-12 mt-5 py-5">
       <h1 class="text-start fs-1 text-blue  mb-5">Infographics</h1>
        <div class="row">
         <?php

          foreach($infographics as $b)
          {
        ?>
        
            <div class="col-lg-4 mb-3 content1">
              <div class="col-12">
                <div class="mb-3">
                  <a target="_blank" href="<?php echo base_url('files/'.$b->i_pdf); ?>" class="text-decoration-none">
                    <img src="<?php echo base_url('infographics_images/'.$b->i_image); ?>"  class="img-fluid mb-3 rounded-0 border" alt="<?php echo base_url('infographics/'.$b->i_image); ?>">
                  </a>
                  <a target="_blank" href="<?php echo base_url('files/'.$b->i_pdf); ?>" class="fs-5 text-1 text-decoration-none ">
                  <p class="fs-5 text-1 text-decoration-none"><?php echo $b->i_title; ?></p>
                </a>
                </div>
              </div>
            </div>
        
         <?php } ?>
         
    </div>
            <div class="text-center mb-3">
                <a href="#" class="text-decoration-none text-blue text-small btn btn-blue btn-sm" id="loadMore">Load More</a>
            </div>
   </div>
  </div>
</div>


