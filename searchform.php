/**
Template Name: Search Form
**/

<form action="/" method="get" accept-charset="utf-8" id="searchform" role="search">
  <div>
    <input type="text" name="s" id="s" value="<?php the_search_query(); ?>" />
    <input type="submit" id="searchsubmit" value="Search" />
  </div>
</form>