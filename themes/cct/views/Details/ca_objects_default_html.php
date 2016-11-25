<?php
/* ----------------------------------------------------------------------
 * themes/default/views/bundles/ca_objects_default_html.php : 
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2013-2015 Whirl-i-Gig
 *
 * For more information visit http://www.CollectiveAccess.org
 *
 * This program is free software; you may redistribute it and/or modify it under
 * the terms of the provided license as published by Whirl-i-Gig
 *
 * CollectiveAccess is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTIES whatsoever, including any implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 *
 * This source code is free and modifiable under the terms of 
 * GNU General Public License. (http://www.gnu.org/copyleft/gpl.html). See
 * the "license.txt" file for details, or visit the CollectiveAccess web site at
 * http://www.CollectiveAccess.org
 *
 * ----------------------------------------------------------------------
 */
 
	$t_object = 			$this->getVar("item");
	$va_comments = 			$this->getVar("comments");
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
		<div class="container"><div class="row">
			<div class='col-sm-6 col-md-6 col-lg-5 col-lg-offset-1'>
				<div id="detailAnnotations"></div>
			</div><!-- end col -->
			
			<div class='col-sm-6 col-md-6 col-lg-5'>
				<H4>{{{<unit relativeTo="ca_collections" delimiter="<br/>"><l>^ca_collections.preferred_labels.name</l></unit><ifcount min="1" code="ca_collections"> ➔ </ifcount>}}}{{{ca_objects.preferred_labels.name}}}</H4>
				<H6>{{{<unit>^ca_objects.type_id</unit>}}}</H6>
				<HR>
				
				{{{<ifdef code="ca_objects.measurementSet.measurements">^ca_objects.measurementSet.measurements (^ca_objects.measurementSet.measurementsType)</ifdef><ifdef code="ca_objects.measurementSet.measurements,ca_objects.measurementSet.measurements"> x </ifdef><ifdef code="ca_objects.measurementSet.measurements2">^ca_objects.measurementSet.measurements2 (^ca_objects.measurementSet.measurementsType2)</ifdef>}}}


				{{{<ifdef code="ca_objects.preferred_labels"><H6>Title:</H6>^ca_objects.preferred_labels<br/></ifdef>}}}
				{{{<ifdef code="ca_objects.marc242a"><H6>Title:</H6>^ca_objects.marc242a<br/></ifdef>}}}
				{{{<ifdef code="ca_objects.non_preferred_labels">^ca_objects.non_preferred_labels<br/></ifdef>}}}
				{{{<ifdef code="ca_objects.idno"><H6>Identifer:</H6>^ca_objects.idno<br/></ifdef>}}}

				{{{<ifcount code="ca_entities" min="1" max="1"><H6>Author</H6></ifcount>}}}
				{{{<ifcount code="ca_entities" min="2"><H6>Authors</H6></ifcount>}}}
				{{{<unit relativeTo="ca_entities" restrictToRelationshipTypes="Author" delimiter="<br/>"><l>^ca_entities.preferred_labels.displayname</l></unit>}}}

				{{{<ifdef code="ca_objects.marc520a_cont"><H6>Contents:</H6>^ca_objects.marc520a_cont<br/></ifdef>}}}
				{{{<ifdef code="ca_objects.marc529a"><H6>Notes on Contents:</H6>^ca_objects.marc529a<br/></ifdef>}}}

				{{{<ifcount code="ca_list_items" min="1"><H6>Category</H6></ifcount>}}}
				{{{<unit relativeTo="ca_list_items" restrictToRelationshipTypes="category" delimiter="<br/>">^ca_list_items.preferred_labels.name_plural</unit>}}}

				{{{<ifdef code="ca_objects.marc529a"><H6>Document Type:</H6>^ca_objects.marc655a<br/></ifdef>}}}
				{{{<ifdef code="ca_objects.marc529a"><H6>Type of Source:</H6>^ca_objects.marc900a<br/></ifdef>}}}
				 	
				
				<hr></hr>
					<div class="row">
						<div class="col-sm-6">
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
						<div class="col-sm-6 colBorderLeft">
							{{{map}}}
						</div>
					</div><!-- end row -->
			</div><!-- end col -->
		</div><!-- end row --></div><!-- end container -->
	</div><!-- end col -->
	<div class='navLeftRight col-xs-1 col-sm-1 col-md-1 col-lg-1'>
		<div class="detailNavBgRight">
			{{{nextLink}}}
		</div><!-- end detailNavBgLeft -->
	</div><!-- end col -->

</div><!-- end row -->

<script type='text/javascript'>
	jQuery(document).ready(function() {
		$('.trimText').readmore({
		  speed: 75,
		  maxHeight: 120
		});
	});
</script>