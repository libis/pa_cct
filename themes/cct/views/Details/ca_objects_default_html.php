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

			<div class='col-sm-12 col-md-12 col-lg-12 detail-metadata'>
				<H3>{{{<unit relativeTo="ca_collections" delimiter=" | "><l>^ca_collections.preferred_labels.name</l></unit>
                    <ifcount min="1" code="ca_collections"> ➔ </ifcount>}}}{{{ca_objects.preferred_labels.name}}}</H3>
				<HR>

				{{{<ifdef code="ca_objects.idno"><br><H6 style="display: inline">Identifer: </H6>^ca_objects.idno</ifdef>}}}

                {{{<ifdef code="ca_objects.nonpreferred_labels"><br><H6 style="display: inline">Alternative title: </H6></ifdef>}}}
                {{{<unit delimiter=" | ">^ca_objects.nonpreferred_labels</unit>}}}
				
                {{{<ifcount code="ca_objects.marc210a" min="1"><br><H6 style="display: inline">Abbreviated Title: </H6></ifcount>}}}
                {{{<unit delimiter=" | ">^ca_objects.marc210a</unit>}}}

				{{{<ifcount code="ca_entities" restrictToRelationshipTypes="aut" min="1"><br><H6 style="display: inline">Author: </H6></ifcount>}}}
				{{{<unit relativeTo="ca_entities" restrictToRelationshipTypes="aut" delimiter=" | "><l>^ca_entities.preferred_labels.displayname</l></unit>}}}

				{{{<ifcount code="ca_entities" restrictToRelationshipTypes="clb"><br><H6 style="display: inline">Collaborator: </H6></ifcount>}}}
				{{{<unit relativeTo="ca_entities" restrictToRelationshipTypes="clb" delimiter=" | "><l>^ca_entities.preferred_labels.displayname</l></unit>}}}

				{{{<ifcount code="ca_entities" restrictToRelationshipTypes="nio"><br><H6 style="display: inline">Nihil Obstat: </H6></ifcount>}}}
                {{{<unit relativeTo="ca_entities" restrictToRelationshipTypes="nio" delimiter=" | "><l>^ca_entities.preferred_labels.displayname</l></unit>}}}

				{{{<ifcount code="ca_entities" restrictToRelationshipTypes="imp"><br><H6 style="display: inline">Imprimatur: </H6></ifcount>}}}
				{{{<unit relativeTo="ca_entities" restrictToRelationshipTypes="imp" delimiter=" | "><l>^ca_entities.preferred_labels.displayname</l></unit>}}}

				{{{<ifcount code="ca_entities" restrictToRelationshipTypes="ppf"><br><H6 style="display: inline">Pre/Post Faces: </H6></ifcount>}}}
				{{{<unit relativeTo="ca_entities" restrictToRelationshipTypes="ppf" delimiter=" | "><l>^ca_entities.preferred_labels.displayname</l></unit>}}}

                {{{<ifdef code="ca_objects.marc260c"><br><H6 style="display: inline">Date: </H6></ifdef>}}}
                {{{<unit delimiter=" | ">^ca_objects.marc260c</unit>}}}

                {{{<ifcount code="ca_places.preferred_labels" restrictToRelationshipTypes="printedIn" min = "1"><br><H6 style="display: inline">Impressum - Place: </H6></ifcount>}}}
                {{{<unit relativeTo="ca_places" restrictToRelationshipTypes="printedIn" delimiter=" | "><l>^ca_places.preferred_labels</l></unit>}}}

                {{{<ifcount code="ca_entities.preferred_labels" restrictToRelationshipTypes="printer" min = "1"><br><H6 style="display: inline">Impressum - Printer: </H6></ifcount>}}}
                {{{<unit relativeTo="ca_entities" restrictToRelationshipTypes="printer" delimiter=" | "><l>^ca_entities.preferred_labels</l></unit>}}}

                {{{<ifcount code="ca_objects.marc300" min = "1"><br><H6 style="display: inline">Physical Description: </H6></ifcount>}}}
                {{{<unit delimiter=" | ">^ca_objects.marc300.marc300a</unit>}}}

                {{{<ifcount code="ca_objects.marc520a_cont"  min = "1"><br><H6 style="display: inline">Contents: </H6></ifcount>}}}
                {{{<unit delimiter=" | ">^ca_objects.marc520a_cont</unit>}}}

                {{{<ifcount code="ca_objects.marc529a"  min = "1"><br><H6 style="display: inline">Notes on Contents: </H6></ifcount>}}}
                {{{<unit delimiter=" | ">^ca_objects.marc529a</unit>}}}

                {{{<ifcount code="ca_objects.marc530a"  min = "1"><br><H6 style="display: inline">Notes on text History: </H6></ifcount>}}}
                {{{<unit delimiter=" | ">^ca_objects.marc530a</unit>}}}

                {{{<ifcount code="ca_list_items" restrictToRelationshipTypes="category" min="1"><br><H6 style="display: inline">Category: </H6></ifcount>}}}
                {{{<unit relativeTo="ca_list_items" restrictToRelationshipTypes="category" delimiter=" | ">^ca_list_items.preferred_labels</unit>}}}

                {{{<ifdef code="ca_objects.marc655a"><br><H6 style="display: inline">Document Type: </H6>^ca_objects.marc655a</ifdef>}}}

                {{{<ifdef code="ca_objects.marc900a"><br><H6 style="display: inline">Type of Source: </H6>^ca_objects.marc900a</ifdef>}}}

                {{{<ifcount code="ca_entities.preferred_labels" restrictToRelationshipTypes="printerReprint" min = "1"><br><H6 style="display: inline">Reprints: </H6></ifcount>}}}
                {{{<unit relativeTo="ca_entities" restrictToRelationshipTypes="printerReprint" delimiter=" | "><l>^ca_entities.preferred_labels</l></unit>}}}

                {{{<ifcount code="ca_objects.marc794.marc794a" min = "1"><br><H6 style="display: inline">Ancient Translations: </H6></ifcount>}}}
                {{{<unit delimiter=" | ">^ca_objects.marc794.marc794a</unit>}}}

				{{{<ifdef code="ca_objects.related.preferred_labels" restrictToRelationshipTypes="r77300,r77301,r77302,r77501,r77500,r77501"><br><H6 style="display: inline">Link Other: </H6></ifdef>}}}
                {{{<unit relativeTo="ca_objects_x_objects" restrictToRelationshipTypes="r77300,r77301,r77302,r77501,r77500,r77501" delimiter=" | ">^relationship_typename: <l>^ca_objects_x_objects.link_part_of.link_partOf_llr</l></unit>}}}
                {{{<unit relativeTo="ca_objects_x_objects">
                    ^relationship_typename : ^ca_objects_x_objects.link_part_of.link_partOf_llr
                </unit>}}}

                {{{<ifcount code="ca_objects.marc020a" min = "1"><br><H6 style="display: inline">ISBN: </H6></ifcount>}}}
                {{{<unit delimiter=" | ">^ca_objects.marc020a</unit>}}}

                {{{<ifcount code="ca_objects.marc022a" min = "1"><br><H6 style="display: inline">ISSN: </H6></ifcount>}}}
                {{{<unit delimiter=" | ">^ca_objects.marc022a</unit>}}}

                {{{<ifcount code="ca_objects.related.preferred_labels" restrictToRelationshipTypes="partOfSeries" min="1"><br><H6 style="display: inline">Series: </H6></ifcount>}}}
                {{{<unit relativeTo="ca_objects.related" restrictToRelationshipTypes="partOfSeries" delimiter=" | ">
                    <l>^ca_objects.preferred_labels</l>
                    <unit>
                        <ifdef code="ca_objects_x_objects.marc440.marc440b">^ca_objects_x_objects.marc440.marc440b</ifdef>
                        <ifdef code="ca_objects_x_objects.marc440.marc440v">^ca_objects_x_objects.marc440.marc440v</ifdef>
                    </unit>
                </unit>}}}

                {{{<ifcount code="ca_objects.marc773" min="1"><br><H6 style="display: inline">Periodical: </H6></ifcount>}}}
                {{{<unit delimiter=" | ">
                        <ifdef code="ca_objects.marc773.marc773a">^ca_objects.marc773.marc773a</ifdef>
                        <ifdef code="ca_objects.marc773.marc773g">^ca_objects.marc773.marc773g</ifdef>
                </unit>}}}

                {{{<ifcount code="ca_objects.marc269" min="1"><br><H6 style="display: inline">Impressum - Date of Printing (Chinese Date): </H6></ifcount>}}}
                {{{<unit delimiter=" | ">
                    <ifdef code="ca_objects.marc269.marc269a">^ca_objects.marc269.marc269a</ifdef>
                    <ifdef code="ca_objects.marc269.marc269b">^ca_objects.marc269.marc269b</ifdef>
                    <ifdef code="ca_objects.marc269.marc269c">^ca_objects.marc269.marc269c</ifdef>
                </unit>}}}

                {{{<ifcount code="ca_objects.marc852_vrij" min="1"><br><H6 style="display: inline">Library Copies (Enkel Vrije Tekst): </H6></ifcount>}}}
                {{{<unit delimiter=" | ">
                    <ifdef code="ca_objects.marc852_vrij">^ca_objects.marc852_vrij</ifdef>
                </unit>}}}

                {{{<ifdef code="ca_objects.marc795" ><br><H6 style="display: inline">Adaptations from West: </H6></ifdef>}}}
                {{{<unit delimiter=" | ">
                    <ifdef code="ca_objects.marc795.marc795a">^ca_objects.marc795.marc795a</ifdef>
                    <ifdef code="ca_objects.marc795.marc7959">(^ca_objects.marc795.marc7959)</ifdef>
                </unit>}}}

                {{{<ifcount code="ca_objects.marc539a" min="1"><br><H6 style="display: inline">Authors Note: </H6></ifcount>}}}
                {{{<unit delimiter=" | ">^ca_objects.marc539a</unit>}}}

                {{{<ifcount code="ca_objects.marc500a" min="1"><br><H6 style="display: inline">General Note: </H6></ifcount>}}}
                {{{<unit delimiter=" | ">^ca_objects.marc500a</unit>}}}

                {{{<ifcount code="ca_objects.marc599a" min="1"><br><H6 style="display: inline">Internal Remark: </H6></ifcount>}}}
                {{{<unit delimiter=" | ">^ca_objects.marc599a</unit>}}}

                {{{<ifcount code="ca_objects.marc856" min="1"><br><H6 style="display: inline">URL-link: </H6></ifcount>}}}
		        {{{<unit delimiter="<br>">
		            <ifdef code="ca_objects.marc856.marc856u"><a href="^ca_objects.marc856.marc856u" target="_blank">^ca_objects.marc856.marc856u</a></ifdef>
                    <ifdef code="ca_objects.marc856.marc856y">^ca_objects.marc856.marc856y</ifdef>
                    <ifdef code="ca_objects.marc856.marc856z">^ca_objects.marc856.marc856z</ifdef>
                </unit>}}}

                {{{<ifcount code="ca_entities.preferred_labels" restrictToRelationshipTypes="libraryCopy" min = "1"><br><H6 style="display: inline">Library copies: </H6></ifcount>}}}
                {{{<unit relativeTo="ca_entities" restrictToRelationshipTypes="libraryCopy" delimiter=" | "><l>^ca_entities.preferred_labels</l></unit>}}}

                {{{<ifcount code="ca_objects.related.preferred_labels" restrictToRelationshipTypes="ancientList" min="1"><br><H6 style="display: inline">Ancient Lists: </H6></ifcount>}}}
                {{{<unit relativeTo="ca_objects.related" restrictToRelationshipTypes="ancientList" delimiter=" | ">
                    <l>^ca_objects.preferred_labels</l>
                    <unit delimiter="; ">
                        <ifdef code="ca_objects_x_objects.marc532_al.marc532a_al">^ca_objects_x_objects.marc532_al.marc532a_al</ifdef>
                        <ifdef code="ca_objects_x_objects.marc532_al.marc532c_al">(^ca_objects_x_objects.marc532_al.marc532c_al)</ifdef>
                        <ifdef code="ca_objects_x_objects.marc532_al.marc5329_al">^ca_objects_x_objects.marc532_al.marc5329_al</ifdef>
                        <ifdef code="ca_objects_x_objects.marc532_al.marc532z_al">^ca_objects_x_objects.marc532_al.marc532z_al</ifdef>
                    </unit>
                </unit>}}}

                {{{<ifcount code="ca_objects.related.preferred_labels" restrictToRelationshipTypes="modernList" min="1"><br><H6 style="display: inline">Modern Lists: </H6></ifcount>}}}
                {{{<unit relativeTo="ca_objects.related" restrictToRelationshipTypes="modernList" delimiter=" | ">
                    <l>^ca_objects.preferred_labels</l>
                    <unit delimiter="; ">
                        <ifdef code="ca_objects_x_objects.marc532_ml.marc532b_m">^ca_objects_x_objects.marc532_ml.marc532b_m</ifdef>
                        <ifdef code="ca_objects_x_objects.marc532_ml.marc532c_ml">(^ca_objects_x_objects.marc532_ml.marc532c_ml) </ifdef>
                    </unit>
                </unit>}}}

                {{{<ifcount code="ca_entities.preferred_labels" restrictToRelationshipTypes="reviewer" min = "1"><br><H6 style="display: inline">Reviews: </H6></ifcount>}}}
                {{{<unit relativeTo="ca_entities" restrictToRelationshipTypes="reviewer" delimiter=" | ">
                    <l>^ca_entities.preferred_labels</l>:
                    <unit delimiter="; ">
                        <ifdef code="ca_objects_x_entities.marc520.marc520a">^ca_objects_x_entities.marc520.marc520a</ifdef>
                        <ifdef code="ca_objects_x_entities.marc520.marc520a_freetext">^ca_objects_x_entities.marc520.marc520a_freetext</ifdef>
                        <ifdef code="ca_objects_x_entities.marc520.marc520g">^ca_objects_x_entities.marc520.marc520g</ifdef>
                        <ifdef code="ca_objects_x_entities.marc520.marc5209">^ca_objects_x_entities.marc520.marc5209</ifdef>
                    </unit>
                </unit>}}}

                {{{<ifcount code="ca_objects.related.preferred_labels" excludeRelationshipTypes="r77301,r77302,r77300,r77301,r77500,r77501,ancientList,modernList,partOfSeries,descriptionTitle,facsimile,reprintSeries" min="1"><br><H6 style="display: inline">Link Translation: </H6></ifcount>}}}
                {{{<unit relativeTo="ca_objects.related.link_translation" excludeRelationshipTypes="r77301,r77302,r77300,r77301,r77500,r77501,ancientList,modernList,partOfSeries,descriptionTitle,facsimile,reprintSeries" delimiter=" | ">
                    <l>^ca_objects.preferred_labels</l>
                    <unit delimiter="; ">
                        <ifdef code="ca_objects_x_objects.link_translation.link_translation_lkrl">^ca_objects_x_objects.link_translation.link_translation_lkrl</ifdef>
                        <ifdef code="ca_objects_x_objects.link_translation.link_translation_llrm">^ca_objects_x_objects.link_translation.link_translation_llrm</ifdef>
                        <ifdef code="ca_objects_x_objects.link_translation.link_translation_lkrr">^ca_objects_x_objects.link_translation.link_translation_lkrr</ifdef>
                        <ifdef code="ca_objects_x_objects.link_translation.link_translation_llrn">^ca_objects_x_objects.link_translation.link_translation_llrn</ifdef>
                    </unit>
                </unit>}}}

                {{{<ifcount code="ca_objects.related.preferred_labels" restrictToRelationshipTypes="descriptionTitle" min="1"><br><H6 style="display: inline">Description Based On: </H6></ifcount>}}}
                {{{<unit relativeTo="ca_objects.related" restrictToRelationshipTypes="descriptionTitle" delimiter=" | ">
                    <l>^ca_objects.preferred_labels</l>
                    <unit>
                        <ifdef code="ca_objects_x_objects.marc250Title.marc2509">^ca_objects_x_objects.marc250Title.marc2509</ifdef>
                        <ifdef code="ca_objects_x_objects.marc250Title.marc250z">(^ca_objects_x_objects.marc250Title.marc250z)</ifdef>
                    </unit>
                </unit>}}}

                {{{<ifcount code="ca_objects.related.preferred_labels" restrictToRelationshipTypes="facsimile" min="1"><br><H6 style="display: inline">Facsimile editions: </H6></ifcount>}}}
                {{{<unit relativeTo="ca_objects.related" restrictToRelationshipTypes="facsimile" delimiter=" | ">
                    <l>^ca_objects.preferred_labels</l>
                    <unit>
                        <ifdef code="ca_objects_x_objects.marc793.marc793b">, ^ca_objects_x_objects.marc793.marc793b </ifdef>
                        <ifdef code="ca_objects_x_objects.marc793.marc7939">(^ca_objects_x_objects.marc793.marc7939)</ifdef>
                        <ifdef code="ca_objects_x_objects.marc793.marc793w">^ca_objects_x_objects.marc793.marc793w </ifdef>
                        <ifdef code="ca_objects_x_objects.marc793.marc793x">Shelf: ^ca_objects_x_objects.marc793.marc793x</ifdef>
                        <ifdef code="ca_objects_x_objects.marc793.marc793y">, ^ca_objects_x_objects.marc793.marc793y</ifdef>
                    </unit>
                </unit>}}}

                {{{<ifcount code="ca_objects.related.preferred_labels" restrictToRelationshipTypes="reprintSeries" min="1"><br><H6 style="display: inline">Reprints in series: </H6></ifcount>}}}
                {{{<unit relativeTo="ca_objects.related" restrictToRelationshipTypes="reprintSeries" delimiter=" | ">
                    <l>^ca_objects.preferred_labels</l>
                    <unit>
                        <ifdef code="ca_objects_x_objects.marc791.marc791b">, ^ca_objects_x_objects.marc791.marc791b </ifdef>
                        <ifdef code="ca_objects_x_objects.marc791.marc7919">(^ca_objects_x_objects.marc791.marc7919) </ifdef>
                        <ifdef code="ca_objects_x_objects.marc791.marc791t">^ca_objects_x_objects.marc791.marc791t </ifdef>
                        <ifdef code="ca_objects_x_objects.marc791.marc791w">^ca_objects_x_objects.marc791.marc791w </ifdef>
                        <ifdef code="ca_objects_x_objects.marc791.marc791x">,Shelf:^ca_objects_x_objects.marc791.marc791x </ifdef>
                        <ifdef code="ca_objects_x_objects.marc791.marc791y">, ^ca_objects_x_objects.marc791.marc791y</ifdef>
                    </unit>
                </unit>}}}


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
