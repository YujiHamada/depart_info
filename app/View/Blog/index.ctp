
<div class="col-sm-8 leftContent">
	
	<h1 class="title"><?php echo $blogsTitle ?></h1>
	<a href="https://twitter.com/share" class="twitter-share-button" data-via="departinformat1" data-size="large" data-hashtags="百貨店">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	<?php foreach($blogs as $key => $blog): ?>
		<p class = "articleDate"><?php echo $blog['Blog']['date'] ?> </p>
		<h4 class = "articleTitle"><?php echo $blog['Blog']['title']; ?></h4>
		<hr width="80%" align="left">
		<?php echo $blog['Blog']['text']; ?>
		<?php if($key != count($blogs) - 1): ?>
			<p class = "deliminator"><?php echo '* * *' ?></p>
			<?php if($key == 0): ?>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- departInfo -->
				<ins class="adsbygoogle"
				style="display:block"
				data-ad-client="ca-pub-2860154430701982"
				data-ad-slot="1212603155"
				data-ad-format="auto"></ins>
				<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			<?php endif; ?>
		<?php endif; ?>
	<?php endforeach; ?>


</div>

<div class="col-sm-4 rightContent">
	<div class = "recent-blogs">
		<h4 class = "latest-blogs">記事一覧</h4>
		<?php foreach($blogs as $blog): ?>
			<ul>
				<li><a href="/blog/selectedBlog?id=<?php echo $blog['Blog']['id'] ?>"><?php echo $blog['Blog']['title'] ?> </a></li>
			</ul>
		<?php endforeach; ?>
	</div>
	<div class = "past-blogs">
		<h4>過去記事</h4>
		<?php foreach ($pastBlogsDate as $key => $date) :?>
			<ul>
				<li><a href="/blog/pastBlogs?date=<?php echo $date[0]['registedTime'] ?>" title=""><?php echo $date[0]['registedTime'] ?>(<?php echo $date[0]['count'] ?>)</a></li>
			</ul>		
		<?php endforeach ?>
	</div>
	<div　class = "blog-rankings">
		<table class = "blog-rankings-table">
			<tbody>
				<tr>
					<td><a href="//business.blogmura.com/ryutugyou/ranking.html" target="_blank"><img id = "blogVillage"  src="//business.blogmura.com/ryutugyou/img/ryutugyou88_31.gif" width="88" height="31" border="0" alt="にほんブログ村 企業ブログ 卸売・小売業へ" /></a><br /><a href="//business.blogmura.com/ryutugyou/ranking.html" target="_blank"></a></td>
					<td><a href="http://blog.with2.net/link.php?1869083:1568" title="小売・飲食業 ブログランキングへ" target="_blank"><img id = "blogRanking"  src="http://blog.with2.net/img/banner/c/banner_1/br_c_1568_1.gif" width="110" height="31" border="0" /></a><br /><a href="http://blog.with2.net/link.php?1869083:1568" style="font-size:12px;" target="_blank"></a></td>
				</tr>
			</tbody>
		</table>
	</div>

	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- departInfo -->
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- 横長スモール -->
	<ins class="adsbygoogle"
	style="display:inline-block;width:320px;height:100px"
	data-ad-client="ca-pub-2860154430701982"
	data-ad-slot="7020132753"></ins>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	<div id='inner_space'></div><script type='text/javascript' src='//blogparts.blogmura.com/pts/js/parts_view.js' charset='UTF-8'></script><script type='text/javascript'>parts(1507586,"FFFFFF","160","001eff",600000,"59","572","outrank","http://depart-info.com/blog", 2, 0, "F7F7F7", "001eff");</script>
</div>
<style type="text/css">
	h1.title{
		text-align: center;
		font-size: 24px;
	}
	h4.articleTitle{
		text-align: left;
		margin-top: 0;
	}
	p.articleDate{
		margin-bottom: 0;
		margin-left: 5px;
	}
	li{
		list-style: none;
	}
	.deliminator{
		font-size: 200%;
		text-align: center;
	}
	#blogVillage, #blogRanking{
		display: inline;
		margin-bottom: 10px;
	}
	.blog-images{
		max-width: 100%;
	}

</style>