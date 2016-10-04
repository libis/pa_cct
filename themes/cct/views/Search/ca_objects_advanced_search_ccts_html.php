<div class="container">
	<div class="row">
		<div class="col-sm-8 ">
			<h1>Objects Advanced Search</h1>

			<?php
			print "<p>Enter your search terms in the fields below.</p>";
			?>
			{{{form}}}

			<div class='advancedContainer'>
				<div class="advancedSearchField" style="font-weight: bold">
					Search Field:
					<select onchange="selectSearchType(this.value)">
						<option value="all" selected> All </option>
						<option value="id"> ID </option>
						<option value="title"> Title </option>
					</select>
				</div>
				<br style="clear: both;"/>
				<br style="clear: both;"/>
				<div class="advancedSearchField" style="font-weight: bold">
					Search :
					<div id="preferred_labels" style="display: none" class="advancedSearchField">
						{{{ca_objects.preferred_labels.name%width=250px}}}
					</div>
					<div id="idno" style="display: none" class="advancedSearchField">
						{{{ca_objects.idno%width=250px}}}
					</div>
					<div id="fulltext" class="advancedSearchField">
						{{{_fulltext%width=250px&height=25px}}}
					</div>
				</div>

				<br style="clear: both;"/>
				<br style="clear: both;"/>
				<div class="advancedSearchField" style="font-weight: bold">
					Source :
					{{{ca_objects.marc900a}}}
				</div>
			</div>

			<br style="clear: both;"/>
			<br style="clear: both;"/>

			<div style="float: left; margin-left: 80px;">{{{reset%label=Reset}}}</div>
			<div style="float: left; margin-left: 20px;">{{{submit%label=Search}}}</div>
			{{{/form}}}

		</div>
		<div class="col-sm-4" style='border-left:1px solid #ddd;'>
			<h1>Helpful Links</h1>
			<p>Include some helpful info for your users here.</p>
		</div><!-- end col -->
	</div><!-- end row -->
</div><!-- end container -->

<script>
	function selectSearchType(str) {
		console.log("select test 1");
		if (str == "") {
			document.getElementById("txtHint").innerHTML = "";
			return;
		} else {
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			console.log("select test 2");
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					$("#preferred_labels").hide();
					$("#idno").hide();
					$("#fulltext").hide();

					document.getElementsByName("ca_objects_preferred_labels_name").value = "";
					document.getElementsByName("ca_objects_idno[]").value = "";
					document.getElementsByName("_fulltext[]").value = "";

					var divID = '#'+$.trim(xmlhttp.responseText);
					console.log(divID);
					$(divID).show();
				}
			};
			xmlhttp.open("GET","getselection?q="+str,true);
			xmlhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
			xmlhttp.send();
		}
	}
</script>
