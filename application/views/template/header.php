<!DOCTYPE html>

<html lang="en">

<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title><?= $title; ?></title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Health Care Medical Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Novena HTML Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets_user/images/icon.png'); ?>" />

  <!-- 
  Essential stylesheets
  =====================================-->
  <link rel="stylesheet" href="<?= base_url('assets_user/plugins/bootstrap/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets_user/plugins/icofont/icofont.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets_user/plugins/slick-carousel/slick/slick.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets_user/plugins/slick-carousel/slick/slick-theme.css'); ?>">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?= base_url('assets_user/css/style.css'); ?>">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />

  <style type="text/css">
    body {
      font-family: 'Poppins';
    }

    .timeline-steps {
      display: flex;
      justify-content: center;
      flex-wrap: wrap
    }

    .timeline-steps .timeline-step {
      align-items: center;
      display: flex;
      flex-direction: column;
      position: relative;
      margin: 1rem
    }

    @media (min-width:768px) {
      .timeline-steps .timeline-step:not(:last-child):after {
        content: "";
        display: block;
        border-top: .25rem dotted #3b82f6;
        width: 3.46rem;
        position: absolute;
        left: 7.5rem;
        top: .3125rem
      }

      .timeline-steps .timeline-step:not(:first-child):before {
        content: "";
        display: block;
        border-top: .25rem dotted #3b82f6;
        width: 3.8125rem;
        position: absolute;
        right: 7.5rem;
        top: .3125rem
      }
    }

    .timeline-steps .timeline-content {
      width: 10rem;
      text-align: center
    }

    .timeline-steps .timeline-content .inner-circle {
      border-radius: 1.5rem;
      height: 1rem;
      width: 1rem;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background-color: #3b82f6
    }

    .timeline-steps .timeline-content .inner-circle:before {
      content: "";
      background-color: #3b82f6;
      display: inline-block;
      height: 3rem;
      width: 3rem;
      min-width: 3rem;
      border-radius: 6.25rem;
      opacity: .5
    }
  </style>
</head>

<body id="top">
  <!--<header>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url('home'); ?>">
				<img src="<?= base_url('assets/images/patra.png'); ?>" alt="" class="img-fluid" style="width: 200px;">
			</a>
		</div>
	</nav>
</header>-->