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
				<H3>{{{<unit relativeTo="ca_collections" delimiter="<br>"><l>^ca_collections.preferred_labels.name</l></unit>
                    <ifcount min="1" code="ca_collections"> ➔ </ifcount>}}}{{{ca_objects.preferred_labels.name}}}</H3>
				<HR>

			<div class="detail_field">{{{<ifdef code="ca_objects.idno"><H6>Identifer: </H6>^ca_objects.idno</ifdef>}}}</div>

            <div class="detail_field">{{{<ifcount code="ca_entities" restrictToRelationshipTypes="aut" min="1"><H6>Author</H6></ifcount>}}}
                <p>{{{<unit relativeTo="ca_objects_x_entities" restrictToRelationshipTypes="aut" delimiter="<br>">
                        <a href="/<?php echo basename(__CA_BASE_DIR__); ?>/index.php/Detail/entities/^ca_entities.entity_id" target="_blank" >^ca_entities.preferred_labels.displayname</a>
                        <ifdef code="ca_entities.preferred_labels.prefix">[^ca_entities.preferred_labels.prefix]</ifdef>
                        ^ca_entities.preferred_labels.suffix
                        <case>
                            <ifcount code="ca_entities.nonpreferred_labels" min="1" max="1">^ca_entities.nonpreferred_labels.displayname</ifcount>
                            <ifcount code="ca_entities.nonpreferred_labels" min="2">(^ca_entities.nonpreferred_labels.displayname%delimiter=_-_ )</ifcount>
                        </case>
                        <ifdef code="ca_entities.marc700d">(^ca_entities.marc700d)</ifdef>
                        <unit relativeTo="ca_objects_x_entities">
                            <ifdef code="ca_objects_x_entities.marc700.marc7009">(^ca_objects_x_entities.marc700.marc7009)</ifdef>
                        </unit>
                    </unit>}}}</p>
            </div>

            <div class="detail_field">{{{<ifcount code="ca_entities" restrictToRelationshipTypes="clb" min="1"><H6>Collaborator: </H6></ifcount>}}}
				<p>{{{
                    <unit relativeTo="ca_objects_x_entities" restrictToRelationshipTypes="clb" delimiter="<br>">
						<a href="/<?php echo basename(__CA_BASE_DIR__); ?>/index.php/Detail/entities/^ca_entities.entity_id" target="_blank" >^ca_entities.preferred_labels.displayname</a>						
                        <ifdef code="ca_entities.preferred_labels.suffix">[^ca_entities.preferred_labels.suffix]</ifdef>
                        ^ca_entities.preferred_labels.prefix
                        <case>
                            <ifcount code="ca_entities.nonpreferred_labels" min="1" max="1">^ca_entities.nonpreferred_labels.displayname</ifcount>
                            <ifcount code="ca_entities.nonpreferred_labels" min="2">(^ca_entities.nonpreferred_labels.displayname%delimiter=_-_)</ifcount>
                        </case>
                        <ifdef code="ca_entities.marc700d">(^ca_entities.marc700d)</ifdef>
                        <ifdef code="ca_objects_x_entities.marc700.marc7009">(^ca_objects_x_entities.marc700.marc7009)</ifdef>
                    </unit>
                    }}}</p>
            </div>

			<div class="detail_field">{{{<ifdef code="ca_objects.nonpreferred_labels|ca_objects.preferred_labels"><H6>Title: </H6></ifdef>}}}
                <p>{{{
                    <unit delimiter="<br>">^ca_objects.nonpreferred_labels</unit>
                    <ifdef code="ca_objects.nonpreferred_labels"><br></ifdef>^ca_objects.preferred_labels
                    }}}</p>
            </div>

            <div class="detail_field">{{{<ifdef code="ca_objects.marc260.marc260c"><H6>Date: </H6></ifdef>}}}
                <p>{{{<unit delimiter="<br>">
                        ^ca_objects.marc260.marc260c<ifdef code="ca_objects.marc260.marc2609"> [ ^ca_objects.marc260.marc2609 ] </ifdef>
                    </unit>}}}</p>
            </div>

            <div class="detail_field">
                {{{<ifdef code="ca_objects.marc2609a"><H6>Impressum - Place: </H6></ifdef>}}}
                <p>{{{<ifdef code="ca_objects.marc260p.marc260p9a">^ca_objects.marc260p.marc260p9a </ifdef>
                    <ifdef code="ca_objects.marc260p.marc260p_9a">(^ca_objects.marc260p.marc260p_9a)</ifdef>
                    }}}</p>
            </div>

            <div class="detail_field">
                {{{<ifcount code="ca_entities.preferred_labels" restrictToRelationshipTypes="printer" min = "1"><H6>Impressum - Printer: </H6></ifcount>}}}
                <p>{{{<unit relativeTo="ca_entities" restrictToRelationshipTypes="printer" delimiter="<br>">
                        <l>^ca_entities.preferred_labels</l> <ifdef code="ca_entities.nonpreferred_labels"> (^ca_entities.nonpreferred_labels)</ifdef>
                    </unit>}}}</p>
            </div>			
			
            <div class="detail_field">
                {{{<ifcount code="ca_entities" restrictToRelationshipTypes="libraryCopy" min="1"><H6>Descr. based on: </H6></ifcount>}}}
                <p>{{{<unit relativeTo="ca_objects_x_entities" restrictToRelationshipTypes="libraryCopy" delimiter="<br>">
                        <a href="/<?php echo basename(__CA_BASE_DIR__); ?>/index.php/Detail/entities/^ca_entities.entity_id" target="_blank" >
                            ^ca_entities.preferred_labels.displayname</a>
                        <unit relativeTo="ca_objects_x_entities" restrictToRelationshipTypes="libraryCopy" delimiter=" - ">
                            , Shelf: ^ca_objects_x_entities.marc250.marc250x
                            , ^ca_objects_x_entities.marc250.marc250y
                        </unit>
                    </unit>}}}</p>
            </div>

            <div class="detail_field">{{{<ifcount code="ca_objects.marc300" min = "1"><H6>Physical Description: </H6></ifcount>}}}
                <p>{{{<unit delimiter="<br>">^ca_objects.marc300.marc300a</unit>}}}</p>
            </div>

            <div class="detail_field">{{{<ifcount code="ca_entities" restrictToRelationshipTypes="nio" min="1"><H6>Nihil Obstat: </H6></ifcount>}}}
                <p>{{{<unit relativeTo="ca_objects_x_entities" restrictToRelationshipTypes="nio" delimiter="<br>">
                        <a href="/<?php echo basename(__CA_BASE_DIR__); ?>/index.php/Detail/entities/^ca_entities.entity_id" target="_blank" >^ca_entities.preferred_labels.displayname</a>
                        <ifdef code="ca_entities.preferred_labels.prefix">[^ca_entities.preferred_labels.prefix]</ifdef>
                        ^ca_entities.preferred_labels.suffix
                        <case>
                            <ifcount code="ca_entities.nonpreferred_labels" min="1" max="1">(^ca_entities.nonpreferred_labels.displayname) </ifcount>
                            <ifcount code="ca_entities.nonpreferred_labels" min="2">(^ca_entities.nonpreferred_labels.displayname%delimiter=_-_ ) </ifcount>
                        </case>
                        <ifdef code="ca_entities.marc700d">(^ca_entities.marc700d)</ifdef>
                    </unit>
                    }}}</p>
            </div>

            <div class="detail_field">{{{<ifcount code="ca_entities" restrictToRelationshipTypes="imp" min="1"><H6>Imprimatur: </H6></ifcount>}}}
                <p>{{{<unit relativeTo="ca_objects_x_entities" restrictToRelationshipTypes="imp" delimiter="<br>">
                        <a href="/<?php echo basename(__CA_BASE_DIR__); ?>/index.php/Detail/entities/^ca_entities.entity_id" target="_blank" >^ca_entities.preferred_labels.displayname</a>						
                        <ifdef code="ca_entities.preferred_labels.prefix">[^ca_entities.preferred_labels.prefix]</ifdef>
                        ^ca_entities.preferred_labels.suffix
                        <case>
                            <ifcount code="ca_entities.nonpreferred_labels" min="1" max="1">(^ca_entities.nonpreferred_labels.displayname) </ifcount>
                            <ifcount code="ca_entities.nonpreferred_labels" min="2">(^ca_entities.nonpreferred_labels.displayname%delimiter=_-_ )  </ifcount>
                        </case>
                        <ifdef code="ca_entities.marc700d">(^ca_entities.marc700d)</ifdef>
                        <unit relativeTo="ca_objects_x_entities" restrictToRelationshipTypes="imp" delimiter=" ">
                            <ifdef code="ca_objects_x_entities.marc700.marc7009">(^ca_objects_x_entities.marc700.marc7009)</ifdef>
                        </unit>
                    </unit>
                    }}}</p>
            </div>

            <div class="detail_field">{{{<ifcount code="ca_entities" restrictToRelationshipTypes="ppf" min="1"><H6>Pre/Post Faces: </H6></ifcount>}}}
                <p>{{{<unit relativeTo="ca_objects_x_entities" restrictToRelationshipTypes="ppf" delimiter="<br>">
                        <a href="/<?php echo basename(__CA_BASE_DIR__); ?>/index.php/Detail/entities/^ca_entities.entity_id" target="_blank" >^ca_entities.preferred_labels.displayname</a>						
                        <ifdef code="ca_entities.preferred_labels.prefix">[^ca_entities.preferred_labels.prefix]</ifdef>
                        ^ca_entities.preferred_labels.suffix
                        <case>
                            <ifcount code="ca_entities.nonpreferred_labels" min="1" max="1">(^ca_entities.nonpreferred_labels.displayname) </ifcount>
                            <ifcount code="ca_entities.nonpreferred_labels" min="2">(^ca_entities.nonpreferred_labels.displayname%delimiter=__-__ )  </ifcount>
                        </case>
                        <ifdef code="ca_entities.marc700d">(^ca_entities.marc700d)</ifdef>
                        <unit relativeTo="ca_objects_x_entities" restrictToRelationshipTypes="ppf" delimiter=" ">
                            <ifdef code="ca_objects_x_entities.marc700.marc7009">(^ca_objects_x_entities.marc700.marc7009)</ifdef>
                            <ifdef code="ca_objects_x_entities.marc700.marc700e">[^ca_objects_x_entities.marc700.marc700e]</ifdef>
                            ^ca_objects_x_entities.marc700.marc700f
                            <ifdef code="ca_objects_x_entities.marc700.marc700t">[^ca_objects_x_entities.marc700.marc700t]</ifdef>
                        </unit>
                    </unit>
                    }}}</p>
            </div>

            <div class="detail_field">{{{<ifcount code="ca_objects.marc520a_cont"  min = "1"><H6>Contents: </H6></ifcount>}}}
                <p>{{{<unit delimiter="<br>">^ca_objects.marc520a_cont</unit>}}}</p>
            </div>

            <div class="detail_field">
                {{{<ifcount code="ca_objects.related.preferred_labels" restrictToRelationshipTypes="facsimile" min="1"><H6>Facsimile editions: </H6></ifcount>}}}
                <p>{{{<unit relativeTo="ca_objects_x_objects" restrictToRelationshipTypes="facsimile" delimiter="<br>">
                        ^ca_objects.related.marc210a%returnAsLink=true&delimiter=
                        <ifdef code="ca_objects_x_objects.marc793.marc793b">, ^ca_objects_x_objects.marc793.marc793b </ifdef>
                        <ifdef code="ca_objects_x_objects.marc793.marc7939">(^ca_objects_x_objects.marc793.marc7939)</ifdef>
                        <more>[</more
                        <ifdef code="ca_objects_x_objects.marc793.marc793w">^ca_objects_x_objects.marc793.marc793w </ifdef>
                        <ifdef code="ca_objects_x_objects.marc793.marc793x">Shelf: ^ca_objects_x_objects.marc793.marc793x</ifdef>
                        <ifdef code="ca_objects_x_objects.marc793.marc793y">, ^ca_objects_x_objects.marc793.marc793y
                            ]</ifdef>
                    </unit>}}}</p>
            </div>
<!-- Temporarily hidden
            <div class="detail_field">{{{<ifcount code="ca_entities.preferred_labels" restrictToRelationshipTypes="printerReprint" min = "1"><H6>Reprints: </H6></ifcount>}}}
                <p>{{{<unit relativeTo="ca_entities" restrictToRelationshipTypes="printerReprint" delimiter="<br>">
                        <ifdef code="ca_objects_x_entities.marc790.marc790c">^ca_objects_x_entities.marc790.marc790c :</ifdef>
                        <ifdef code="ca_objects_x_entities.marc790.marc790a">^ca_objects_x_entities.marc790.marc790a :</ifdef>
                        <l>^ca_entities.preferred_labels</l>
                        <ifdef code="ca_objects_x_entities.marc790.marc7909">(^ca_objects_x_entities.marc790.marc7909)</ifdef>
                    </unit>
                    }}}</p>
            </div>
-->
            <div class="detail_field">
                {{{<ifcount code="ca_objects.related.preferred_labels" restrictToRelationshipTypes="reprintSeries" min="1"><H6>Reprints in series: </H6></ifcount>}}}
                <p>{{{<unit relativeTo="ca_objects_x_objects" restrictToRelationshipTypes="reprintSeries" delimiter="<br>">
                        ^ca_objects.related.marc210a%returnAsLink=true&delimiter=
                        <ifdef code="ca_objects_x_objects.marc791.marc791b">, ^ca_objects_x_objects.marc791.marc791b </ifdef>
                        <ifdef code="ca_objects_x_objects.marc791.marc7919">(^ca_objects_x_objects.marc791.marc7919) </ifdef>
                        <ifdef code="ca_objects_x_objects.marc791.marc791t">^ca_objects_x_objects.marc791.marc791t </ifdef>
                        <more>[</more
                        <ifdef code="ca_objects_x_objects.marc791.marc791w">^ca_objects_x_objects.marc791.marc791w </ifdef>
                        <ifdef code="ca_objects_x_objects.marc791.marc791x">,Shelf:^ca_objects_x_objects.marc791.marc791x </ifdef>
                        <ifdef code="ca_objects_x_objects.marc791.marc791y">, ^ca_objects_x_objects.marc791.marc791y]</ifdef>
                    </unit>}}}</p>
            </div>

            <div class="detail_field">{{{<ifcount code="ca_objects.marc794.marc794a" min = "1"><H6>Ancient Translations: </H6></ifcount>}}}
                <p>{{{<unit delimiter="<br>">
						Into ^ca_objects.marc794.marc794a
						<ifdef code="ca_objects.marc794.marc794b">, ^ca_objects.marc794.marc794b </ifdef>
						[</more
						<ifdef code="ca_objects.marc794.marc794c">^ca_objects.marc794.marc794c) </ifdef>
						<ifdef code="ca_objects.marc794.marc794d">, ^ca_objects.marc794.marc794d]</ifdef>				
				</unit>}}}</p>
            </div>

            <div class="detail_field">
                {{{<ifcount code="ca_entities.preferred_labels" restrictToRelationshipTypes="libraryCopy" min = "1"><H6>Library copies: </H6></ifcount>}}}
                <p>{{{<unit relativeTo="ca_entities" restrictToRelationshipTypes="libraryCopy" delimiter="<br>"><l>^ca_entities.preferred_labels</l></unit>}}}</p>
            </div>

            <div class="detail_field">
                {{{<ifcount code="ca_objects.related.preferred_labels" restrictToRelationshipTypes="modernList" min="1"><H6>Modern Lists: </H6></ifcount>}}}
                <p>{{{<unit relativeTo="ca_objects_x_objects" restrictToRelationshipTypes="modernList" delimiter="<br>">
                        ^ca_objects.related.marc210a%returnAsLink=true&delimiter=
                        <unit delimiter=", ">
                            <ifcount code="ca_objects_x_objects.marc532_ml.marc532c_ml, ca_objects_x_objects.marc532_ml.marc532b_ml" min="1">[</ifcount>
                                <ifdef code="ca_objects_x_objects.marc532_ml.marc532b_ml">^ca_objects_x_objects.marc532_ml.marc532b_ml</ifdef>
                                <ifdef code="ca_objects_x_objects.marc532_ml.marc532c_ml">(^ca_objects_x_objects.marc532_ml.marc532c_ml) </ifdef>
                            <ifcount code="ca_objects_x_objects.marc532_ml.marc532c_ml, ca_objects_x_objects.marc532_ml.marc532b_ml" min="1">]</ifcount>
                        </unit>
                    </unit>}}}</p>
            </div>

            <div class="detail_field">{{{<ifcount code="ca_objects.marc530a"  min = "1"><H6>Notes on text History: </H6></ifcount>}}}
                <p>{{{<unit delimiter="<br>">^ca_objects.marc530a</unit>}}}</p>
            </div>

            <div class="detail_field">{{{<ifcount code="ca_objects.marc500a"  min = "1"><H6>General Note: </H6></ifcount>}}}
                <p>{{{<unit delimiter="<br>">^ca_objects.marc500a</unit>}}}</p>
            </div>			
			
            <div class="detail_field">{{{<ifdef code="ca_objects.marc690"><H6>Category: </H6></ifdef>}}}
                <p>
                <?php
                    $base_search_url =  basename(__CA_BASE_DIR__)."/index.php/Search/objects?search=ca_objects.marc690";
                    $categories = $t_object->get("ca_objects.marc690", array('returnAsArray' => true, 'convertCodesToDisplayText'=>true));
                    foreach ($categories as $cat)
                        echo "<a href='/$base_search_url : \"$cat\"' style='text-decoration: none'>$cat</a> <br>";
                ?>
                </p>
            </div>

            <div class="detail_field">
                {{{<ifcount code="ca_objects.related.preferred_labels" restrictToRelationshipTypes="r77300,r77301,r77302,r77501,r77500,r77501" min="1"><H6>Link Other: </H6></ifcount>}}}
                <p>
                    <?php
                    $base_search_url =  basename(__CA_BASE_DIR__)."/index.php/Detail/objects";
                    $link_types_list = array("r77300","r77301","r77302","r77501","r77500","r77501");
                    $link_include_interstitial_list = array('link_partOf_llrl');
                    $link_other = $t_object->getRelatedItems("ca_objects", array(
                        'returnAsArray' => true,
                        'restrictToRelationshipTypes' => $link_types_list
                    ));
                    foreach ($link_other as $link){
                        if(!in_array($link['relationship_type_code'], $link_types_list))
                            continue;
                        $related_interstitial = new ca_objects_x_objects($link['relation_id']);
                        $interstitial_data = $related_interstitial->get('ca_objects_x_objects.link_part_of', array(
                            'returnWithStructure' => true,
                            'convertCodesToDisplayText'=>true
                        ));
                        if(isset($interstitial_data[$link['relation_id']])){
                            $data = $interstitial_data[$link['relation_id']];
                            $strArray = array();
                            foreach ($data as $item){
                                foreach ($item as $key => $vl)
                                    if(!in_array($key,$link_include_interstitial_list))
                                        unset($item[$key]);

                                $strArray[] = " (".implode(" ", $item).") ";
                            }
                        }
                        $obj_id = $link['object_id'];
                        $obj_label = $link['label'];
                        $obj_rel_name = $link['relationship_typename'];
                        echo "$obj_rel_name: <a href='/$base_search_url/$obj_id' style='text-decoration: none' target='_blank'>$obj_label</a>";
                        if(sizeof($strArray) > 0)
                            echo implode($strArray);
                        echo "<br>";
                    }
                    ?>
                </p>
            </div>

            <div class="detail_field">
                {{{<ifcount code="ca_objects.marc856" min="1"><H6>URL-link: </H6></ifcount>}}}
                <p>{{{<unit delimiter="<br>">
                        <ifdef code="ca_objects.marc856.marc856u"><a href="^ca_objects.marc856.marc856u" target="_blank">^ca_objects.marc856.marc856u</a></ifdef>
                        <ifdef code="ca_objects.marc856.marc856y">^ca_objects.marc856.marc856y</ifdef>
                        <ifdef code="ca_objects.marc856.marc856z">^ca_objects.marc856.marc856z</ifdef>
                    </unit>}}}</p>
            </div>

            <div class="detail_field">{{{<ifdef code="ca_objects.marc020a"><H6>ISBN: </H6></ifdef>}}}
                <p>{{{<unit delimiter="<br>">^ca_objects.marc020a</unit>}}}</p>
            </div>

            <div class="detail_field">{{{<ifdef code="ca_objects.marc022a"><H6>ISSN: </H6></ifdef>}}}
                <p>{{{<unit delimiter=";">^ca_objects.marc022a</unit>}}}</p>
            </div>
			
            <div class="detail_field">{{{<ifdef code="ca_objects.marc655a"><H6>Document Type: </H6>^ca_objects.marc655a</ifdef>}}}</div>

            <div class="detail_field">{{{<ifdef code="ca_objects.marc900a"><H6>Source Type: </H6>^ca_objects.marc900a</ifdef>}}}</div>

				<hr></hr>
					<div class="row">
						<div class="col-sm-6">
							<?php
							# Comment and Share Tools
							if ($vn_comments_enabled || $vn_share_enabled) {

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
