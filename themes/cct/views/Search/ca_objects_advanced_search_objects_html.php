<div class="container">
	<div class="row">
		<div class="col-sm-8 cct_result_div_bkg ">
			<h1>Objects Advanced Search</h1>

<?php			
	print "<p>Enter your search terms in the fields below.</p>";
?>

{{{form}}}
	
	<div class='advancedContainer'>
		<div class="advancedSearchField">
			Free Text:<br/>
			{{{_fulltext%width=210px&height=25px&placeholder='Type word or phrase and click Search'}}}
		</div>
        <div class="advancedSearchField">
            Identifier:<br/>
            {{{ca_objects.idno%width=210px}}}
        </div>
        <div class="advancedSearchField">
            Title:<br/>
            {{{ca_objects.preferred_labels.name%width=210px}}}
        </div>
        <div class="advancedSearchField">
            Title (Series):<br/>
            {{{ca_objects_x_objects.preferred_labels%restrictToRelationshipTypes=partOfSeries&width=210px}}}
        </div>
		<div class="advancedSearchField">
			Authors (all):<br/>
			{{{ca_entities.preferred_labels%restrictToRelationshipTypes=aut,clb,edt,edc,imp,trl,oth,ppf,com,ctb&width=210px}}}
		</div>
		<div class="advancedSearchField">
			Author(aut):<br/>
			{{{ca_entities.preferred_labels%restrictToRelationshipTypes=aut&width=210px}}}
		</div>
		<div class="advancedSearchField">
			Translator(trl):<br/>
			{{{ca_entities.preferred_labels%restrictToRelationshipTypes=trl&width=210px}}}
		</div>
		<div class="advancedSearchField">
			Collaborator(clb):<br/>
			{{{ca_entities.preferred_labels%restrictToRelationshipTypes=clb&width=210px}}}
		</div>
		<div class="advancedSearchField">
			Nihil Obstat(nio):<br/>
			{{{ca_entities.preferred_labels%restrictToRelationshipTypes=nio&width=210px}}}
		</div>
		<div class="advancedSearchField">
			*Imprimatur(imp):<br/>
			{{{ca_entities.preferred_labels%restrictToRelationshipTypes=imp&width=210px}}}
		</div>
		<div class="advancedSearchField">
			Pre/Post Faces(ppf):<br/>
			{{{ca_entities.preferred_labels%restrictToRelationshipTypes=ppf&width=210px}}}
		</div>
		<div class="advancedSearchField">
			Periodical:<br/>
			{{{ca_objects.marc773.marc773a%width=210px&height=25px}}}
		</div>
		<div class="advancedSearchField">
			Impressum (date):<br/>
			{{{ca_objects.marc260c%width=210px&height=25px}}}
		</div>
		<div class="advancedSearchField">
			Impressum (place):<br/>
			{{{ca_places.preferred_labels%restrictToRelationshipTypes=printedIn&width=210px}}}
		</div>
		<div class="advancedSearchField">
			Imprimatur:<br/>
			{{{ca_entities.preferred_labels%restrictToRelationshipTypes=imp&width=210px}}}
		</div>
		<div class="advancedSearchField">
			Description based on Title:<br/>
			{{{ca_objects_x_objects.preferred_labels%restrictToRelationshipTypes=descriptionTitle&width=210px}}}
		</div>
		<div class="advancedSearchField">
			Contents:<br/>
			{{{ca_objects.marc520a_cont%width=210px&height=25px}}}
		</div>
		<div class="advancedSearchField">
			Adaptations from West:<br/>
			{{{ca_objects.marc795.marc795a%width=210px&height=25px}}}
		</div>
		<div class="advancedSearchField">
			Facsimile editions:<br/>
			{{{ca_objects_x_objects.preferred_labels%restrictToRelationshipTypes=facsimile&width=210px}}}
		</div>
		<div class="advancedSearchField">
			Reprints(place):<br/>
			{{{ca_objects_x_places.preferred_labels%restrictToRelationshipTypes=printedIn&width=210px}}}
		</div>
		<div class="advancedSearchField">
			Reprints in Series:<br/>
			{{{ca_objects_x_objects.preferred_labels%restrictToRelationshipTypes=reprintSeries&width=210px}}}
		</div>
		<div class="advancedSearchField">
			Library copies:<br/>
			{{{ca_entities.preferred_labels%restrictToRelationshipTypes=libraryCopy&width=210px}}}
		</div>
		<div class="advancedSearchField">
			Ancient List:<br/>
			{{{ca_objects_x_objects.preferred_labels%restrictToRelationshipTypes=ancientList&width=210px}}}
		</div>
		<div class="advancedSearchField">
			Modern List:<br/>
			{{{ca_objects_x_objects.preferred_labels%restrictToRelationshipTypes=modernList&width=210px}}}
		</div>
		<div class="advancedSearchField">
			Reviews:<br/>
			{{{ca_entities.preferred_labels%restrictToRelationshipTypes=reviewer&width=210px}}}
		</div>
		<div class="advancedSearchField">
			Category:<br/>
			{{{ca_list_items.preferred_labels.name_plural%restrictToRelationshipTypes=category&width=210px}}}
		</div>
		<div class="advancedSearchField">
			Source:<br/>
			{{{ca_objects.marc900a%width=210px}}}
		</div>
		<div class="advancedSearchField">
			Type:<br/>
			{{{ca_objects.type_id%width=210px}}}
		</div>
		<div class="advancedSearchField">
			Document Type:<br/>
			{{{ca_objects.marc655a%width=210px}}}
		</div>
		<div class="advancedSearchField">
			Translation:<br/>
			{{{ca_objects_x_objects.link_translation_lkrr%excludeRelationshipTypes=r77301,r77302,r77300,r77301,r77500,r77501&width=210px}}}
		</div>
		<div class="advancedSearchField">
			Date range: <i>(e.g. 1970-1979)</i><br/>
			{{{ca_objects.yearOfPrinting_sort%width=210px&height=40px&useDatePicker=0}}}
		</div>
	</div>	
	
	<br style="clear: both;"/>
	
	<div style="float: left; margin-left: 20px; margin-right: 20px;">{{{reset%label=Reset}}}</div>
	<div style="float: left;">{{{submit%label=Search}}}</div>
{{{/form}}}

		</div>
		<div class="col-sm-4" style='border-left:1px solid #ddd;'>
			<h1>Helpful Links</h1>
			<p>Include some helpful info for your users here.</p>
		</div><!-- end col -->
	</div><!-- end row -->
</div><!-- end container -->
