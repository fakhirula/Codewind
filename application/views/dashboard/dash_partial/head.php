<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="theme-color" content="#000000" />
<link rel="shortcut icon" href="<?php echo base_url('./assets/img/favicon.ico') ?>" />
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('./assets/img/apple-icon.png') ?>" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
<link rel="stylesheet" href="<?php echo base_url('./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url('./assets/tailwindcss/compiled-tailwind.css') ?>" />

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<title><?php echo SITE_NAME . ": " . ucfirst($this->uri->segment(1)) . " - " . ucfirst($this->uri->segment(2)) ?></title>