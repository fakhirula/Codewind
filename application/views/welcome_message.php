<!DOCTYPE html>
<html>

<head>
  <?php $this->load->view("partial/head.php") ?>
</head>

<body class="text-gray-800 antialiased">
  <?php $this->load->view("partial/navbar.php") ?>
  <main>
    <?php $this->load->view("partial/heading.php") ?>
    <?php $this->load->view("partial/subheading.php") ?>
    <?php $this->load->view("partial/body.php") ?>
    <?php $this->load->view("partial/testimonial.php") ?>
    <?php $this->load->view("partial/calltoaction.php") ?>
  </main>
  <?php $this->load->view("partial/footer.php") ?>
</body>
<?php $this->load->view("partial/javascript.php") ?>

</html>