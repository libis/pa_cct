<div class="container">
	<div class="row">
		<div class="col-sm-8 cct_result_div_bkg ">
			<h1>Advanced Search</h1>

<?php
	print "<p>Enter your search terms in the fields below.</p>";
?>

{{{form}}}

    <div style="float: right; margin-left: 20px; font-weight: bold;">{{{submit%label=SEARCH}}}</div>
    <div style="float: right;">{{{reset%label=Reset}}}</div>
    <br style="clear: both;"/>

	<div class='advancedContainer'>
		<div class="row">
			<div class="col-sm-12">
            Title:<br/>
            {{{multi_label_search%width=100%}}}
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 advancedSearchField">
				Any word:<br/>
				{{{_fulltext%width=100%&height=50px&placeholder='Type word or phrase and click Search'}}}
			</div>
		</div>
		<div class="row">
        <div class="col-sm-4 advancedSearchField">
            Source:<br/>
            {{{ca_objects.marc900a%width=240px}}}
        </div>
        <div class="col-sm-4 advancedSearchField">
            Authors:<br/>
            {{{ca_entities.preferred_labels%restrictToRelationshipTypes=aut,clb,com,ctb,edt,edc,imp,oth,ppf,trl,nio&width=100%}}}
        </div>
        <div class="col-sm-4 advancedSearchField">
            Category:<br/>
            {{{ca_objects.marc690%width=240px}}}
        </div>
		</div>
		<div class="row">
        <div class="col-sm-4 advancedSearchField">
            Document type:<br/>
            {{{ca_objects.marc655a%width=240px}}}
        </div>
        <div class="col-sm-4 advancedSearchField">
            Translations:<br/>
            {{{ca_objects_x_objects.preferred_labels%restrictToRelationshipTypes=r78500,r78501,r78502,r78503,r78504,r78505,r78506,r78507,r78508,r78509,r78510,r78511,r78512,r78513,r78514,r78515,r78516&width=240px}}}
        </div>
        <div class="col-sm-4 advancedSearchField">
            Year (e.g. 1970)<br/>
            {{{print_year_sort%width=240px&height=40px}}}
        </div>
		</div>
		<div class="row">
        <div class="col-sm-4 advancedSearchField">
            Series:<br/>
            {{{ca_objects_x_objects.preferred_labels%restrictToRelationshipTypes=partOfSeries&width=100%}}}
        </div>
        <div class="col-sm-4 advancedSearchField">
            Periodical:<br/>
            {{{ca_objects.marc773.marc773a%width=240px&height=42px}}}
        </div>
        <div class="col-sm-4 advancedSearchField">
            Impressum - place of printing:<br/>
            {{{multi_printing_place_search%&width=240px&height=42px}}}
        </div>
		</div>
		<div class="row">
        <div class="col-sm-4 advancedSearchField">
            Impressum - Printer:<br/>
            {{{ca_entities.preferred_labels%restrictToRelationshipTypes=printer&width=100%}}}
        </div>
        <div class="col-sm-4 advancedSearchField">
            Impressum - date of printing:<br/>
            {{{multi_impressum-date_search%width=240px&height=42px}}}
        </div>
        <div class="col-sm-4 advancedSearchField">
            Description based on title:<br/>
            {{{ca_objects_x_objects.preferred_labels%restrictToRelationshipTypes=descriptionTitle&width=100%}}}
        </div>
		</div>
		<div class="row">
        <div class="col-sm-4 advancedSearchField">
            Contents:<br/>
            {{{ca_objects.marc520a_cont%width=240px&height=42px}}}
        </div>
        <div class="col-sm-4 advancedSearchField">
            Adapted from West:<br/>
            {{{ca_objects.marc795.marc795a%width=240px&height=42px}}}
        </div>
        <div class="col-sm-4 advancedSearchField">
            Facsimile editions:<br/>
            {{{ca_objects_x_objects.preferred_labels%restrictToRelationshipTypes=facsimile&width=100%}}}
        </div>
			</div>
			<div class="row">
        <div class="col-sm-4 advancedSearchField">
            Reprints in series:<br/>
            {{{ca_objects_x_objects.preferred_labels%restrictToRelationshipTypes=reprintSeries&width=100%}}}
        </div>
        <div class="col-sm-4 advancedSearchField">
            Reprints - place of printing:<br/>
            {{{ca_objects_x_places.preferred_labels%restrictToRelationshipTypes=printedIn&width=100%}}}
        </div>
        <div class="col-sm-4 advancedSearchField">
            Ancients translations:<br/>
            {{{ca_objects_x_objects.preferred_labels%restrictToRelationshipTypes=ancientTranslation&width=240px}}}
        </div>
			</div>
			<div class="row">
        <div class="col-sm-4 advancedSearchField">
            Library copy:<br/>
            {{{ca_entities.preferred_labels%restrictToRelationshipTypes=libraryCopy&width=100%}}}
        </div>
        <div class="col-sm-4 advancedSearchField">
            Ancient list:<br/>
            {{{ca_objects_x_objects.preferred_labels%restrictToRelationshipTypes=ancientList&width=100%}}}
        </div>
        <div class="col-sm-4 advancedSearchField">
            Modern list:<br/>
            {{{ca_objects_x_objects.preferred_labels%restrictToRelationshipTypes=modernList&width=100%}}}
        </div>
			</div>
			<div class="row">
        <div class="col-sm-4 advancedSearchField">
            Reviews:<br/>
            {{{ca_entities.preferred_labels%restrictToRelationshipTypes=reviewer&width=100%}}}
        </div>

        <div class="col-sm-4 advancedSearchField">
            Notes:<br/>
            {{{ca_objects.marc529a%width=240px&height=42px}}}
        </div>
        <div class="col-sm-4 advancedSearchField">
            Object identifier:<br/>
            {{{ca_objects.idno%width=100}}}
        </div>		
			</div>
	</div>

	<br style="clear: both;"/>

	<div style="float: left ;margin-right: 20px; ">{{{reset%label=Reset}}}</div>
	<div style="float: left;  font-weight: bold;">{{{submit%label=SEARCH}}}</div>
{{{/form}}}

		</div>
		<div class="col-sm-4" style='border-left:1px solid #ddd;'>
			<h1>Search Tips</h1>
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>

            <p><a href="/pa_cct/index.php/About/Help" style="border-bottom-width: 1px; border-bottom-style: dotted; border-bottom-color: rgb(12, 120, 139); color: rgb(114, 170, 190); text-decoration: none;">More search tips</a></p>
		</div><!-- end col -->
	</div><!-- end row -->
</div><!-- end container -->
