<link rel="stylesheet" href="assets/css/prettify.css" />

<div class="page-content">
	<div class="page-header">
		<h1>
			Function Reference
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				$.getFolder()
			</small>
		</h1>
	</div>
	<div class="row">
		<div class="functions col-xs-9">
			<div>
				<h2 id="description">Description</h2>
				<div class="hr hr-dotted hr-2"></div>
				<p class="text-muted h-space"> Return site folder name.</p>
			</div>
			<div>
				<h2 id="usage">Usage</h2>
				<div class="hr hr-dotted hr-2"></div>
				<p class="text-success h-space"> $.getFolder( pathname );</p>
			</div>
			<div>
				<h2 id="parameters">Parameters</h2>
				<div class="hr hr-dotted hr-2"></div>
				<p><b>pathname</b></p>
				<p class="text-muted h-space"> <span class="orange">(string)</span> (optional) Segment of the URI</p>
				<p class="text-muted h-space">
					<ul>
						<li>base - returns base folder name</li>
						<li>main - (default) returns main folder or controllers folder name.</li>
						<li>sub - returns sub name or function name of curent controller.</li>
					</ul>
				</p>
				<p class="text-muted h-space">
					Default: base
				</p>
			</div>
			<div>
				<h2 class="return_value">Return Values</h2>
				<div class="hr hr-dotted hr-2"></div>
				<p class="text-muted h-space"> <span class="orange">(string) </span></p>
				<p class="text-muted h-space-20"> foldername with optional segment path. or returns null if pathname doesnt exist or an error occurred.</p>
			</div>
			<div>
				<h2 id="example">Examples</h2>
				<div class="hr hr-dotted hr-2"></div>
				<p class="text-muted"> 
					<pre class="prettyprint linenums">&lt;script type="text/javascript"&gt; 
   $.getFolder('main');
&lt;/script&gt;</pre>	
				</p>
			</div>
			<div>
				<h3 id="output" class="h-space">Output: </h3>
				<div class="hr hr-dotted hr-12"></div>
				<pre class="output">http://www.sample.com/folder_name/</pre>
			</div>
			<div>
				<h2 id="sample_usage" class="h-space">Sample Usage</h2>
				<div class="hr hr-dotted hr-2"></div>
			</div>
			<div>
				<h2 id="source_code" class="h-space">Source Code</h2>
				<div class="hr hr-dotted hr-2"></div>
				<p class="text-muted">$.getFolder() is located in <span class="text-success">assest/js/js_helper.js</span></p>
			</div>
		</div>

		<div class="col-xs-3">
			<?php get_view('function_reference/sidebar_contents'); ?>
		</div>

	</div>
</div>

<script src="assets/js/prettify.js"></script>

<script type="text/javascript">
	jQuery(function($) {
		
		$('.output').html($.getFolder('main'));

		window.prettyPrint && prettyPrint();
		$('#id-check-horizontal').removeAttr('checked').on('click', function(){
			$('#dt-list-1').toggleClass('dl-horizontal').prev().html(this.checked ? '&lt;dl class="dl-horizontal"&gt;' : '&lt;dl&gt;');
		});
	
	})
</script>