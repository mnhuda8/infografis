<?php $this->load->view('front/templates/head') ?>

<div class="container">
	<?php $this->load->view('front/contents/'.$content) ?>
</div>

<?php 
    $this->load->view('front/templates/footer');
    $this->load->view('front/templates/javascript');
?>