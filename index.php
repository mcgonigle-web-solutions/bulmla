
<!-- The header detals are located here -->
<?php include 'partials/header.php';?>

<body class="<?php echo tplBulmlaHelper::setBodySuffix(); ?>">
<nav class="navbar container" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item is-link" href="<?php echo $this->baseurl; ?>/">
    <?php echo $logo; ?>
    <?php if ($this->params->get('sitedescription')) : ?>
    <?php echo '<div class="title">' . htmlspecialchars($this->params->get('sitedescription'), ENT_COMPAT, 'UTF-8') . '</div>'; ?>
    <?php endif; ?>
  </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarMainMenu">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
  <div id="navbarMainMenu" class="navbar-menu">
    <jdoc:include type="modules" name="navigation" /> 
    <div class="navbar-end">
      <div class="navbar-item">
    <div class="field is-grouped">
	<jdoc:include type="modules" name="navigationButtons" style="none" />	
	</div>
      </div>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<?php if ($this->countModules( 'hero' )) : ?>
<jdoc:include type="modules" name="hero" style="hero" />
<?php endif; ?>

<!-- Level Section -->
<section id="level">
	<nav class="level is-mobile container">
		<?php if ($this->countModules( 'level' )) : ?>
		<jdoc:include type="modules" name="level" style="level" />
		<?php endif; ?>
	</nav>
</section>

<!-- Main Body -->
<main id="main">
<jdoc:include type="message" />
	<div class="container p-md">
		<div class="columns">
			
			<!-- Left side column-->
			<?php if ($this->countModules('aside-left')) : ?>
			<div class="column is-one-quarter">
				<jdoc:include type="modules" name="aside-left" style="aside" />
			</div>
			<?php endif; ?>
			
			<!-- Main content/component -->
			<div class="column">
				<?php if ($this->countModules( 'header' )) : ?>
				<jdoc:include type="modules" name="header" style="none" />
				<?php endif; ?>
				<jdoc:include type="component"/>
			</div>

			<!-- Right side column-->
			<?php if ($this->countModules('aside-right')) : ?>
			<div class="column is-one-quarter">
				<jdoc:include type="modules" name="aside-right" style="aside" />
			</div>
			<?php endif; ?>
			
		</div>
	</div>
</main>

<!-- The footer details are located here -->
<?php include 'partials/footer.php';?>