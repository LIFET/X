<?php
/**
 * G / 魔改版
 * <a href="https://gundam.exia.xyz/321.py">原作者</a>
 *
 *
 * @package X
 * @author XUHENG
 * @version 2.0
 * @link https://fateso.com
 */

 $this->need('header.php');
 ?>
<div id="article" class="clear">
<?php if ($this->options->enableOneRow == 0): ?>
  <div id="article-content">
 <?php while($this->next()): ?>
   <a href="<?php $this->permalink() ?>">

    <div id="article-<?php $this->cid();?>" class="article-item hoverup">
        <div id="article-header" style="background-image:url(<?php  $this->fields->imgurl(); ?>);"></div>

    	<h2 id="article-<?php $this->cid();?>-title"><span><?php $this->title() ?></span></h2>
     <em><?php  $this->fields->zy(); ?></em>
      <p class="clear"><span id="article-author"><?php $this->author(); ?></span><span id="article-date"><?php $this->date('F j, Y'); ?></span></p>
    </div>
    </a>
<?php endwhile; ?>
<div id="pages" class="clear">
  <?php $this->pageLink('更多 >','next'); ?>
  <?php $this->pageLink('< 返回','prev'); ?>
</div>
  </div>
<?php else: ?>
<?php if ($this->options->enableOneRow == 1): ?>
<div id="article-content">
  <div class="tiles" id="wookmark">
<ul>
 <?php while($this->next()): ?>
   <a href="<?php $this->permalink() ?>">
<li itemprop="divBody">
    <div id="article-<?php $this->cid();?>" class="article-item hoverup">
        <img class="gray" src="<?php if (isset($this->fields->tu)): ?> <?php  $this->fields->tu(); ?> <?php else: ?> <?php  $this->fields->imgurl(); ?>" <?php endif; ?>" width="350" height="<?php if (isset($this->fields->Height)): ?><?php $this->fields->Height(); ?><?php endif; ?>" />

    	<h2 id="article-<?php $this->cid();?>-title"><span><?php $this->title() ?></span></h2>
     
      <p class="clear"><span id="article-date"><?php $this->date('F j, Y'); ?></span></p>
    </div>
</li>
    </a>
<?php endwhile; ?>
</ul>
</div>
</div>
<div id="pages" class="clear">
  <?php $this->pageLink('更多 >','next'); ?>
  <?php $this->pageLink('< 返回','prev'); ?>
</div>
<?php else: ?>
<div id="article-content">
 <?php while($this->next()): ?>
   <a href="<?php $this->permalink() ?>">
    <div id="article-<?php $this->cid();?>" class="article-item hoverup">
    	<h2 id="article-<?php $this->cid();?>-title"><span><?php $this->title() ?></span></h2>
      <?php if ($this->options->enableOneRow == 2): ?><em><?php $this->excerpt(50);?></em><?php endif; ?>
      <p class="clear"><span id="article-author"><?php $this->author(); ?></span><span id="article-date"><?php $this->date('F j, Y'); ?></span></p>
    </div>
    </a>
<?php endwhile; ?>
<div id="pages" class="clear">
  <?php $this->pageLink('更多 >','next'); ?>
  <?php $this->pageLink('< 返回','prev'); ?>
</div>
  </div>
<?php endif; ?>
<?php endif; ?>

</div>




  <?php $this->need('footer.php'); ?>
