<div id="right_sidebar_inner">
  <ul class="sidebar_widgets">
    <li class="social-sidebar">
      <?php get_template_part('social', 'icons'); ?>
    </li>
    <li class="searchbox-sidebar">
        <?php get_search_form(); ?>
    </li>
    <li class="merge_body">
      <h3><span class="sidebar-icon sidebar-icon-newsletter"></span>Subscribe to my Posts</h3>
      <p> Subscribe to my blog so you will never miss any post. I'll never spam, that's my promise!</p>
      <form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=wazeem', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
        <div class="textbox">
          <input type="text" placeholder="Enter your email" name="email">
        </div>
        <p class="align-center">
          <input type="hidden" value="wazeem" name="uri"/>
          <input type="hidden" name="loc" value="en_US"/>
          <input class="btn btn-primary" value="Subscribe" type="submit">
        </p>
      </form>
    </li>
  </ul>
</div>
