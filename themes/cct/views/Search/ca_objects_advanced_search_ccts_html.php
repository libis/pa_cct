<div class="container">
	<div class="row">
		<div class="col-sm-8 cct_result_div_bkg ">
			<h1>Basic Search</h1>

			<?php
			print "<p>Enter your search terms in the fields below.</p>";
			?>

			{{{form}}}

            <div style="float: right; margin-left: 20px;  font-weight: bold;">{{{submit%label=SEARCH}}}</div>
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
                    <div class="col-sm-12">
                        Author:<br/>
                        {{{ca_entities.preferred_labels%restrictToRelationshipTypes=aut,clb,com,ctb,edt,edc,imp,oth,ppf,trl,nio&width=100%}}}
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
                Source type:<br/>
                {{{ca_objects.marc900a%width=240px}}}
            </div>
            <div class="col-sm-4 advancedSearchField">
                Category:<br/>
                {{{ca_objects.marc690%width=240px}}}
            </div>
            <div class="col-sm-4 advancedSearchField">
                Year (e.g. 1970):<br/>
                {{{print_year_sort%width=240px&height=40px}}}
            </div>
           </div>
			</div>

			<br style="clear: both;"/>

			<div style="float: left; margin-right: 20px;">{{{reset%label=Reset}}}</div>
			<div style="float: left; font-weight: bold;">{{{submit%label=SEARCH}}}</div>
			{{{/form}}}

		</div>
		<div class="col-sm-4" style='border-left:1px solid #ddd;'>
			<p><a href="/pa_cct/index.php/About/Help" target="_blank" style="border-bottom-width: 1px; border-bottom-color: rgb(12, 120, 139); color: rgb(114, 170, 190); text-decoration: none;">Search tips</a></p>
		</div><!-- end col -->
	</div><!-- end row -->
</div><!-- end container -->
