<?php
	$t_item = $this->getVar("item");
	$va_comments = $this->getVar("comments");
	$vn_comments_enabled = 	$this->getVar("commentsEnabled");
	$vn_share_enabled = 	$this->getVar("shareEnabled");
?>
<div class="row">
	<div class='col-xs-12 navTop'><!--- only shown at small screen size -->
		{{{previousLink}}}{{{resultsLink}}}{{{nextLink}}}
	</div><!-- end detailTop -->
	<div class='navLeftRight col-xs-1 col-sm-1 col-md-1 col-lg-1'>
		<div class="detailNavBgLeft">
			{{{previousLink}}}{{{resultsLink}}}
		</div><!-- end detailNavBgLeft -->
	</div><!-- end col -->
	<div class='col-xs-12 col-sm-10 col-md-10 col-lg-10'>
		<div class="container">
			<div class="row">
				<div class='col-md-12 col-lg-12 detail-metadata'>
                    <H4>{{{^ca_entities.preferred_labels.displayname}}}</H4>
                    {{{<ifdef code="ca_entities.nonpreferred_labels.displayname"><br><H6 style="display: inline">Alternative Name: </H6></ifdef>}}}
                    {{{<unit relativeTo="ca_entities" delimiter=" | ">
                        <ifdef code="ca_entities.nonpreferred_labels.displayname">^ca_entities.nonpreferred_labels.displayname</ifdef>
                    </unit>}}}

                    {{{<ifdef code="ca_entities.marc700d"><br><H6 style="display: inline">Birth and Death Date: </H6></ifdef>}}}
                    {{{<unit relativeTo="ca_entities" delimiter=" | ">^ca_entities.marc700d</unit>}}}
				</div><!-- end col -->
			</div><!-- end row -->
			<div class="row">
				<div class='col-md-6 col-lg-6 detail-metadata'>
					{{{<ifcount code="ca_objects" min="1"><H6 style="display: inline">Related objects: </H6>
                        <unit relativeTo="ca_objects" delimiter=" |  "><l>^ca_objects.preferred_labels.name</l></unit>
                    </ifcount>}}}
<?php
				# Comment and Share Tools
				if ($vn_comments_enabled | $vn_share_enabled) {

					print '<div id="detailTools">';
					if ($vn_comments_enabled) {
?>
						<div class="detailTool"><a href='#' onclick='jQuery("#detailComments").slideToggle(); return false;'><span class="glyphicon glyphicon-comment"></span>Comments (<?php print sizeof($va_comments); ?>)</a></div><!-- end detailTool -->
						<div id='detailComments'><?php print $this->getVar("itemComments");?></div><!-- end itemComments -->
<?php
					}
					if ($vn_share_enabled) {
						print '<div class="detailTool"><span class="glyphicon glyphicon-share-alt"></span>'.$this->getVar("shareLink").'</div><!-- end detailTool -->';
					}
					print '</div><!-- end detailTools -->';
				}
?>

				</div><!-- end col -->
				<div class='col-md-6 col-lg-6'>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end col -->
	<div class='navLeftRight col-xs-1 col-sm-1 col-md-1 col-lg-1'>
		<div class="detailNavBgRight">
			{{{nextLink}}}
		</div><!-- end detailNavBgLeft -->
	</div><!-- end col -->
</div><!-- end row -->
