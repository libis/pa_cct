<div class="container">
	<div class="row">
		<div class="col-sm-8 cct_result_div_bkg ">
			<h1>Objects Advanced Search</h1>

<?php			
	print "<p>Enter your search terms in the fields below.</p>";
?>

{{{form}}}

    <div style="float: right; margin-left: 20px; margin-right: 20px;">{{{reset%label=Reset}}}</div>
    <div style="float: right;">{{{submit%label=Search}}}</div>
    <br style="clear: both;"/>

	<div class='advancedContainer'>
		<div class="advancedSearchField">
			Free Text:<br/>
			{{{_fulltext%width=100%&height=50px&placeholder='Type word or phrase and click Search'}}}
		</div>
        <div class="advancedSearchField">
            Title:<br/>
            {{{ca_objects.preferred_labels.name%width=100%}}}
        </div>
        <div class="advancedSearchField">
            Source:<br/>
            {{{ca_objects.marc900a%width=100%}}}
        </div>
        <div class="advancedSearchField">
            Authors (all):<br/>
            {{{ca_entities.preferred_labels%restrictToRelationshipTypes=aut,clb,com,ctb,edt,edc,imp,oth,ppf,trl,nio&width=100%}}}
        </div>
        <div class="advancedSearchField">
            Category:<br/>
            {{{ca_list_items.preferred_labels.name_plural%restrictToRelationshipTypes=category&width=100%}}}
        </div>
        <div class="advancedSearchField">
            Document Type:<br/>
            {{{ca_objects.marc655a%width=100%}}}
        </div>
        <div class="advancedSearchField">
            Translations:<br/>
            {{{ca_objects_x_objects.link_translation_lkrr%excludeRelationshipTypes=r77301,r77302,r77300,r77301,r77500,r77501&width=100%}}}
        </div>
        <div class="advancedSearchField">
            Year From - To: <i>(e.g. 1970-1979)</i><br/>
            {{{ca_objects.yearOfPrinting_sort%width=100%&height=40px&useDatePicker=0}}}
        </div>
        <div class="advancedSearchField">
            Series:<br/>
            {{{ca_objects_x_objects.preferred_labels%restrictToRelationshipTypes=partOfSeries&width=100%}}}
        </div>
        <div class="advancedSearchField">
            Periodical:<br/>
            {{{ca_objects.marc773.marc773a%width=100%&height=25px}}}
        </div>
        <div class="advancedSearchField">
            Impressum - Place of Printing:<br/>
            {{{ca_places.preferred_labels%restrictToRelationshipTypes=printedIn&width=100%}}}
        </div>
        <div class="advancedSearchField">
            Impressum - Printer:<br/>
            {{{ca_entities.preferred_labels%restrictToRelationshipTypes=printer&width=100%}}}
        </div>
        <div class="advancedSearchField">
            Impressum - Date of Printing:<br/>
            {{{ca_objects.marc260c%width=100%&height=25px}}}
        </div>
        <div class="advancedSearchField">
            Description based on Title:<br/>
            {{{ca_objects_x_objects.preferred_labels%restrictToRelationshipTypes=descriptionTitle&width=100%}}}
        </div>
        <div class="advancedSearchField">
            Contents:<br/>
            {{{ca_objects.marc520a_cont%width=100%&height=25px}}}
        </div>
        <div class="advancedSearchField">
            Adaptations from West:<br/>
            {{{ca_objects.marc795.marc795a%width=100%&height=25px}}}
        </div>
        <div class="advancedSearchField">
            Facsimile editions:<br/>
            {{{ca_objects_x_objects.preferred_labels%restrictToRelationshipTypes=facsimile&width=100%}}}
        </div>
        <div class="advancedSearchField">
            Reprints in Series:<br/>
            {{{ca_objects_x_objects.preferred_labels%restrictToRelationshipTypes=reprintSeries&width=100%}}}
        </div>
        <div class="advancedSearchField">
            Reprints - Place of Printing:<br/>
            {{{ca_objects_x_places.preferred_labels%restrictToRelationshipTypes=printedIn&width=100%}}}
        </div>
        <div class="advancedSearchField">
            Ancients Translations:<br/>
            {{{ca_objects_x_objects.link_translation_lkrr%excludeRelationshipTypes=r77301,r77302,r77300,r77301,r77500,r77501&width=100%}}}
        </div>
        <div class="advancedSearchField">
            Library Copy:<br/>
            {{{ca_entities.preferred_labels%restrictToRelationshipTypes=libraryCopy&width=100%}}}
        </div>
        <div class="advancedSearchField">
            Ancient List:<br/>
            {{{ca_objects_x_objects.preferred_labels%restrictToRelationshipTypes=ancientList&width=100%}}}
        </div>
        <div class="advancedSearchField">
            Modern List:<br/>
            {{{ca_objects_x_objects.preferred_labels%restrictToRelationshipTypes=modernList&width=100%}}}
        </div>
        <div class="advancedSearchField">
            Reviews:<br/>
            {{{ca_entities.preferred_labels%restrictToRelationshipTypes=reviewer&width=100%}}}
        </div>
	</div>	
	
	<br style="clear: both;"/>
	
	<div style="float: left ; margin-left: 20px; margin-right: 20px;">{{{reset%label=Reset}}}</div>
	<div style="float: left;">{{{submit%label=Search}}}</div>
{{{/form}}}

		</div>
		<div class="col-sm-4" style='border-left:1px solid #ddd;'>
			<h1>Helpful Links</h1>
			<p>Include some helpful info for your users here.</p>
		</div><!-- end col -->
	</div><!-- end row -->
</div><!-- end container -->
