<?php
  defined('_JEXEC') or die;
  $app = jFactory::getApplication();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale = 1.0">
  <jdoc:include type="head" />
  <script>
  (function(d) {
    var config = {
      kitId: 'hqg2pqs',
      scriptTimeout: 2000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
  <link rel="stylesheet" href="<?= $this->baseurl ?>/templates/system/css/system.css">
  <link rel="stylesheet" href="<?= $this->baseurl ?>/templates/<?= $this->template ?>/css/reset.css">
  <link rel="stylesheet" href="<?= $this->baseurl ?>/templates/<?= $this->template ?>/css/template.css">
</head>
<body>
  <header>
    <div class="wrapper">
      <div class="header-top">
        <jdoc:include type="modules" name="informer" style"none" />
      </div>
      <div class="header-bottom">
        <div class="search">
          <img src="images/icons/lupa_icon.svg" alt="Поиск">
        </div>
        <a href="#" class="menu-btn mobile">
          <img src="images/icons/menu_btn.svg" alt="Мобильное меню">
        </a>
        <a class="logo" href="/">
        <!-- TODO Сделать логотип в векторе -->
          <img src="images/logo.png" alt="ИА 'Новый День'">
        </a>
      </div>
    </div>
  </header>
  <div class="test">
    <jdoc:include type="modules" name="test" style"xhtml" />
  </div>
</body>
</html>