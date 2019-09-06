<html>
<head>
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0, width=device-width"/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<!-- DNS预解析 -->
	<link rel="dns-prefetch" href="//cdn.bootcss.com">
	<link rel="dns-prefetch" href="//i.loli.net">

	<title><?php $this->archiveTitle(' &raquo; ', '', ' | '); ?><?php $this->options->title(); ?></title>

	<link rel="stylesheet" href="<?php $this->options->themeUrl('CSS/G.css'); ?>" rel="stylesheet" />
	<link rel="stylesheet" href="<?php $this->options->themeUrl('CSS/shortcode.G.css'); ?>" rel="stylesheet" />
	<link rel="stylesheet" href="<?php $this->options->themeUrl('CSS/OwO.min.css'); ?>" rel="stylesheet" />
	<link rel="stylesheet" href="<?php $this->options->themeUrl('CSS/prism.css'); ?>" rel="stylesheet" />
	<link href="https://cdn.bootcss.com/fancybox/3.5.6/jquery.fancybox.min.css" rel="stylesheet">
	<link href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
	<style>
		<?php if ($this->options->enableOneRow == 0): ?>
		.article-item {
	    background: white;
	    border-radius: 10px;
	    box-shadow: 0px 0px 70px 6px rgba(0,0,0,0.12);
	    padding: 0;
	    margin: 20px 0;
		}
		.article-item h2{
	    /*margin-bottom: 20px;*/
		}

#article-author {
	float: left;
}

#article-date {
	float: right;
}      
        #article-header {
            position: relative;
            top: 0;
            left: 0;
            height: 300px;
            zoom: 1;
            background-color: #fff;
            background-repeat: no-repeat;
            background-size: cover;
            -webkit-background-size: cover;
            -o-background-size: cover;
            background-position: center center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
      
		@media screen and (max-width: 768px) {

			.article-item {
		    background: white;
		    border-radius: 10px;
		    box-shadow: 0px 0px 70px 6px rgba(0,0,0,0.12);
		    padding: 0;
		    width: 100%;
		    margin: 20px auto;
		    float: none;
			}
          
          #article-header {
            height: 200px;
        }

		}
		@media screen and (max-width: 1024px) {

			.article-item {
		    background: white;
		    border-radius: 10px;
		    box-shadow: 0px 0px 70px 6px rgba(0,0,0,0.12);
		    padding: 0;
		    width: 100%;
		    margin: 20px auto;
		    float: none;
			}

		}

		<?php else: ?>
<?php if ($this->options->enableOneRow == 1): ?>

/*=照片布局*/
#wookmark{margin:20px 0;position:relative;clear:both;}
.tiles{list-style-type:none;position:relative;margin:0;padding:0;}
.tiles li{
display:none;
-moz-box-sizing:border-box;
box-sizing:border-box;
-moz-border-radius: 2px;
-webkit-border-radius: 2px;
-webkit-transition: all 0.3s ease-out;
-moz-transition: all 0.3s ease-out;
-o-transition: all 0.3s ease-out;
transition: all 0.3s ease-out;
}
ol,ul{list-style:none;}
.tiles li.inactive{visibility:hidden;opacity:0;}
/*.tiles li:hover{background-color:#333;}*/
.tiles li a{color:#999;}
.tiles li a:hover{color:#fff;}
.tiles li p{margin:0;font-size:.8em;overflow:hidden;text-align:justify;word-wrap:break-word;}
.tiles li img{display:block;padding: 0; }

.wookmark-placeholder{
border-radius: 2px;
-moz-border-radius: 2px;
-webkit-border-radius: 2px;
border: 1px solid #333;
z-index: -1;
}


.article-item {
 background: white;
 border-radius: 10px;
 box-shadow: 0px 0px 70px 6px rgba(0,0,0,0.12);
 padding: 0;
 width: 350px;
 margin: 10px;
 float: left;
 }
       
.gray {
 border-top-left-radius: 10px;
 border-top-right-radius: 10px;
 }

.article-item h2 {
 padding: 15px 15px 0px 15px;
 text-align: center;
}
.article-item p {
 padding: 5px 15px 15px 15px;
}
#article-date {
 text-align: center;
 display: table-cell;
 width: 10%;
}  

      
#header-container,#article {
            width: <?php $this->options->kuan(); ?>;
        }

         @media screen and (max-width: 1024px) {
               #article {
            width: 800px;
            }        
                                            
             }
      
	 @media screen and (max-width: 768px) {
                 
                  #article {
            width: 95%;
            }
  
		.article-item {
            max-width: 350px;
	    background: white;
	    border-radius: 10px;
            box-shadow: 0px 0px 70px 6px rgba(0,0,0,0.12);
	    /*padding: 20px;*/
	    width: 100%;
	    margin: 0 auto;
	    float: none;
			}
            
            .article-item h2 {
            overflow: hidden;
            text-overflow: ellipsis;
        }

		}
<?php else: ?>
<?php if ($this->options->enableOneRow == 2): ?>
.article-item {
	    background: white;
	    border-radius: 10px;
	    box-shadow: 0px 0px 70px 6px rgba(0,0,0,0.12);
	    padding: 30px;
	    margin: 20px 0;
		}
		.article-item h2{
	    margin-bottom: 20px;
		}
		@media screen and (max-width: 768px) {
			.article-item {
		    background: white;
		    border-radius: 10px;
		    box-shadow: 0px 0px 70px 6px rgba(0,0,0,0.12);
		    padding: 20px;
		    width: 87%;
		    margin: 20px auto;
		    float: none;
			}
		}
		@media screen and (max-width: 1024px) {
			.article-item {
		    background: white;
		    border-radius: 10px;
		    box-shadow: 0px 0px 70px 6px rgba(0,0,0,0.12);
		    padding: 20px;
		    width: 90%;
		    margin: 20px auto;
		    float: none;
			}
		}
#article-author {
	float: left;
}

#article-date {
	float: right;
}      

<?php else: ?>
.article-item {
	    background: white;
	    border-radius: 10px;
	    box-shadow: 0px 0px 70px 6px rgba(0,0,0,0.12);
	    padding: 30px;
	    width: 320px;
	    margin: 10px;
	    float: left;
		}
		@media screen and (max-width: 768px) {
			.article-item {
		    background: white;
		    border-radius: 10px;
		    box-shadow: 0px 0px 70px 6px rgba(0,0,0,0.12);
		    padding: 20px;
		    width: 87%;
		    margin: 20px auto;
		    float: none;
			}
		}
#article-author {
	float: left;
}

#article-date {
	float: right;
}      

<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
		html{
                   
                 
			background-color: <?php $this->options->bkcolor(); ?>;
		}
		html::before{
			  background-image: url(<?php $this->options->bkimg(); ?>);
 overflow-x: hidden; 
		}


		<?php if ($this->options->enableOpac): ?>
		#zp,#links,#page,#post,#article,#comments{
		 opacity: 0.9;
	 	}
		<?php endif; ?>

		<?php if ($this->options->enableRDD == 0): ?>
		#header-logo{
			display: none;
		}
		<?php endif; ?>

		<?php if ($this->options->animateTime): ?>

		.opacity-show {
			animation: opacity-show <?php $this->options->animateTime(); ?>;
			-moz-animation: opacity-show <?php $this->options->animateTime(); ?>;
			/* Firefox*/
			-webkit-animation: opacity-show <?php $this->options->animateTime(); ?>;
			/* Safari and Chrome*/
			-o-animation: opacity-show <?php $this->options->animateTime(); ?>;
			/* Opera*/
		}
		.opacity-disappear {
			animation: opacity-disappear <?php $this->options->animateTime(); ?>;
			-moz-animation: opacity-disappear <?php $this->options->animateTime(); ?>;
			/* Firefox*/
			-webkit-animation: opacity-disappear <?php $this->options->animateTime(); ?>;
			/* Safari and Chrome*/
			-o-animation: opacity-disappear <?php $this->options->animateTime(); ?>;
			/* Opera*/
		}
		<?php else: ?>
		.opacity-show {
			animation: opacity-show 1s;
			-moz-animation: opacity-show 1s;
			/* Firefox*/
			-webkit-animation: opacity-show 1s;
			/* Safari and Chrome*/
			-o-animation: opacity-show 1s;
			/* Opera*/
		}
		.opacity-disappear {
			animation: opacity-disappear 1s;
			-moz-animation: opacity-disappear 1s;
			/* Firefox*/
			-webkit-animation: opacity-disappear 1s;
			/* Safari and Chrome*/
			-o-animation: opacity-disappear 1s;
			/* Opera*/
		}
		<?php endif; ?>

	</style>

	<link rel="icon" type="image/png" href="<?php $this->options->favicon(); ?>">
	<link href="<?php $this->options->favicon(); ?>" rel="icon">
	<link rel='dns-prefetch' href='//s.w.org'>
	<link rel="apple-touch-icon-precomposed" href="<?php $this->options->favicon(); ?>">
	<?php $this->header(); ?>
</head>

<body ontouchstart>
	<!-- 头部/pjax -->
	<div id="pjax-container">
		<div id="header">
			<img id="header-logo" src="https://i.loli.net/2019/06/29/5d17880508ea946510.png"></img>
                          
			<div id="header-container">
		                <div class="h-logo"> <h2><a href="<?php $this->options->siteUrl(); ?>"><?php echo $this->options->toux ? ('<img src="'.$this->options->toux.'">') : $this->options->title; ?></a>
                           </h2></div>
				<div class="clear">
					<!--<span><?php $this->options->description() ?></span>-->
					<nav>
						<a href="<?php Helper::options()->siteUrl()?>" <?php if ($this->is('index')) : ?> class="nav-focus"<?php endif; ?>>首页</a>
						<?php if ($this->options->enableIndexPage): ?>
								<a href="<?php Helper::options()->siteUrl()?>blog" <?php if ($this->is('archive') or $this->is('post')) : ?> class="nav-focus"<?php endif; ?>>文章</a>
      			<?php endif; ?>
						<a href="<?php Helper::options()->siteUrl()?>links.html" <?php if ($this->is('page','links')) : ?> class="nav-focus"<?php endif; ?>>友人帐</a>
						<a href="<?php Helper::options()->siteUrl()?>about.html" <?php if ($this->is('page','About')) : ?> class="nav-focus"<?php endif; ?>>关于</a>
					</nav>
				</div>
			</div>
		</div>

		<div id="M">
