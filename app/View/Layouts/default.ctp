<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Olasz Balázs Ügyvédi Iroda | <?php echo $title_for_layout; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <?php echo $this->Html->css(array('normalize', 'main')); ?>
        <?php echo $this->Html->script(array('vendor/modernizr-2.6.2.min')); ?>
        <?php 
            echo $this->fetch('css');
        ?>
    </head>
    <body id="<?php echo $body_id; ?>">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <header>
            <div id="languages">
                <span>
                    <?php echo $this->Html->link('Magyar', '/' . $current_page_hun, array('id' => 'hun', 'class' => ($this->Session->read('Config.language') == 'hun' ? 'selected' : ''))); ?>
                    /
                    <?php echo $this->Html->link('English', '/en/'. $current_page_eng, array('id' => 'eng', 'class' => ($this->Session->read('Config.language') == 'eng' ? 'selected' : ''))); ?>
                </span>
            </div>
            <div id="head">
                <?php echo $this->Html->link($this->Html->image('logo.png', array('alt' => 'Olasz Balázs Ügyvédi Iroda')), '/', array('escape' => false, 'id' => 'logo')); ?>
                <nav id="main-nav">
                    <ul>
                        <li class="<?php echo $body_id == 'home' ? 'active' : ''; ?>"><?php echo $this->Html->link(__('home'), '/' . $lang); ?></li>
                        <li class="<?php echo $body_id == 'specialization' ? 'active' : ''; ?>"><?php echo $this->Html->link(__('specialization'), '/' . $lang . __('specialization_url')); ?></li>
                        <li class="<?php echo $body_id == 'collegues' ? 'active' : ''; ?>"><?php echo $this->Html->link(__('collegues'), '/' . $lang . __('collegues_url')); ?></li>
                        <li class="<?php echo $body_id == 'contact' ? 'active' : ''; ?>"><?php echo $this->Html->link(__('contact'), '/' . $lang . __('contact_url')); ?></li>
                        <li class="<?php echo $body_id == 'documents' ? 'active' : ''; ?>"><?php echo $this->Html->link(__('documents'), '/' . $lang . __('documents_url')); ?></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section id="main">
            <?php echo $this->fetch('content'); ?>
        </section>
        <footer id="main-footer">
            <p>Olasz Balázs Ügyvédi Iroda &copy; <?php echo date('Y'); ?> | <?php echo $this->Html->link('Adatkezelés', '/privacy') ?> <?php echo $this->Html->link('Szabályzat', '/policies') ?></p>
        </footer>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        <?php echo $this->fetch('script'); ?>
    </body>
</html>

